const DAFAULT_DATE_FORMAT = "YYYY-MM-DD";
var messages = {
    "chekInAllowed":"Anreise möglich",
    "chekInNotAllowed":"Anreise nich möglich",
    "chekOutAllowed": "Abreise möglich",
    "chekOutNotAllowed":"Abreise nich möglich",
    "minStayRestriction": "Abreise nicht möglich, da die Mindestaufenthaltsdauer nicht erfüllt wird"
};

function BookingRequest() {
    this.personsAge = ['18', '18'];
    this.childrenAge = [];
    this.numberOfRooms = 1;
    this.fromDate = '';
    this.toDate = '';
    this.fromCalDayElement = null;
    this.toCalDayElement = null;
    this.numberOfKinder = 0

    this.numberOfPersons = function () {
        return this.personsAge.length;
    };


    this.resetDates = function () {
        this.fromDate = '';
        this.toDate = '';
        this.fromCalDayElement = null;
        this.toCalDayElement = null;
    };

    this.twoDateSelected = function () {
        return this.fromDate && this.fromDate.trim() != '' && this.toDate && this.toDate.trim() != '';
    };
}

var bookingRequest = new BookingRequest();
var bookCalendar = null;

function isBefore($day, $otherDay) {
    var $days = $(".DayPicker div.DayPicker-Day").not(".DayPicker-Day--disabled");
    var dayBeforeFound = false;
    for( var i = 0;  i< $days.length ; i++){
        if($($days[i]).is($day)){
          return !dayBeforeFound;
        }
        if($($days[i]).is($otherDay)){
            dayBeforeFound = true;
        }
    }
}

function loadCheckOutRestriction(bookCalendar, $day) {
    var dayDate = $day.attr("data-date");
    var checkoutRestriction = bookCalendar.calendarDays[dayDate].checkOutRestriction;
    const day = moment(dayDate);
    var dayCursor = day.clone();
    var momentDateToCalendar =  moment(bookCalendar.to);
    $(".DayPicker-Day").removeClass("DayPicker-Day--bookable DayPicker-Day--warning");
    $(".DayPicker-Day .DayPicker-Day__Wrapper.hint--top").attr("data-hint",'');
    var minStayDay = checkoutRestriction.minStay ? dayCursor.clone().add( checkoutRestriction.minStay, 'd') : null;
    var maxStayDate = checkoutRestriction.maxStay ? dayCursor.clone().add(checkoutRestriction.maxStay, 'd') : dayCursor.clone().add(20, 'd');
    for (;dayCursor <= momentDateToCalendar && dayCursor <= maxStayDate; dayCursor.add(1,'d')){
        var dayDateStr = dayCursor.format(DAFAULT_DATE_FORMAT);

        var $dayCursor = $("div[data-date=" + dayDateStr + "]").not(".DayPicker-Day--disabled");
        if (!bookCalendar.calendarDays[$dayCursor.attr("data-date")]){
            //the day is not bookable; the chekout must be done this day;
            $dayCursor.addClass("DayPicker-Day--bookable");
            $dayCursor.find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", messages.chekOutAllowed);
            break;
        }
        if( minStayDay &&  dayCursor <= minStayDay && dayCursor > day){
            $dayCursor.addClass("DayPicker-Day--warning");
            $dayCursor.find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", messages.minStayRestriction);
        } else {
            $dayCursor.addClass("DayPicker-Day--bookable");
            $dayCursor.find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", messages.chekOutAllowed);
        }
    }

}
function loadCheckInRestriction(bookCalendar) {
    var dayDateCursor = moment(bookCalendar.from);
    var momentDateToCalendar =  moment(bookCalendar.to);
    $(".DayPicker-Day").not(".DayPicker-Day--selected").removeClass("DayPicker-Day--bookable");
    $(".DayPicker-Day__Wrapper.hint--top").attr("data-hint",'');
    for (;dayDateCursor <= momentDateToCalendar; dayDateCursor.add(1,'d')){
        var dayDateStr = dayDateCursor.format(DAFAULT_DATE_FORMAT);
        var $day = $("div[data-date=" + dayDateStr + "]").not(".DayPicker-Day--disabled");
        if( bookCalendar.calendarDays[dayDateStr] && !bookCalendar.calendarDays[dayDateStr].checkInRestriction && !$day.hasClass(".DayPicker-Day--selected")){
            $day.addClass("DayPicker-Day--bookable");
            $day.find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", messages.chekInAllowed);
        }
    }

}
function validForCheckInCheckOut($day) {
    if ($day.hasClass("DayPicker-Day--disabled")){
        return false;
    }
    if ( $day.is(bookingRequest.fromCalDayElement)) {
        return false;
    }
    var dayDate = $day.attr("data-date");
    if ( (bookingRequest.twoDateSelected() || !bookingRequest.fromDate) && !bookCalendar.calendarDays[dayDate]) {
        return false;
    } else if (  !bookingRequest.toDate && bookingRequest.fromDate
        && bookCalendar.calendarDays[bookingRequest.fromCalDayElement.attr("data-date")].checkOutRestriction[dayDate]){
        return false;
    }

    return true;
}
function daySelected($day) {

    if (!validForCheckInCheckOut($day)) {
        return;
    }

    if (bookingRequest.twoDateSelected() || isBefore($day, bookingRequest.fromCalDayElement)) {
        bookingRequest.resetDates();
    }
    if (bookingRequest.fromDate) {
        bookingRequest.toCalDayElement = $day;
        bookingRequest.toDate = $day.attr('aria-label')
    } else {
        bookingRequest.fromDate = $day.attr('aria-label');
        bookingRequest.fromCalDayElement = $day;
    }

    $("#summary").trigger("update");
    $("#calendar").trigger("update-cal-range")
}

function buildLabel(prefix, value) {
    valueStr = value+'';
    return valueStr.trim() != '0' && valueStr.trim() != '' ? prefix + valueStr.trim() : '';
}
function summaryUpdate() {
    if ($("a[href='#calendar']").parent().hasClass("active")){
        $('#summary').hide();
    } else {
        $('#summary').show();
        $('#summary_rooms').text(buildLabel("Rooms: ", bookingRequest.numberOfRooms));
        $('#summary_persons').text(buildLabel("Persons: ", bookingRequest.numberOfPersons()));
        $('#summary_kinder').text(buildLabel("Kinder: ", bookingRequest.numberOfKinder));
        $('#summary_fromDate').text(buildLabel("from: ", bookingRequest.fromDate));
        $('#summary_toDate').text(buildLabel("to:", bookingRequest.toDate));
    }
}

function calendarRangeUpdate() {
    $(".DayPicker-Day").removeClass("DayPicker-Day--first");
    $(".DayPicker-Day").removeClass("DayPicker-Day--last");
    $(".DayPicker-Day").removeClass("DayPicker-Day--selected");
    bookingRequest.fromCalDayElement.addClass("DayPicker-Day--selected").addClass("DayPicker-Day--first");
    if (bookingRequest.toCalDayElement != null) {
        bookingRequest.toCalDayElement.addClass("DayPicker-Day--selected").addClass("DayPicker-Day--last");
    } else {
        bookingRequest.fromCalDayElement.addClass("DayPicker-Day--selected").addClass("DayPicker-Day--last");
    }
    if(bookingRequest.twoDateSelected()) {
        var inRange = false;
        var $days = $(".DayPicker div.DayPicker-Day").not(".DayPicker-Day--disabled");
        $days.each(function () {
            if (!inRange && $(this).is(bookingRequest.fromCalDayElement)){
                inRange = true;
            } else if (inRange && $(this).is(bookingRequest.toCalDayElement)){
                inRange = false;
            }
            if (inRange){
                $(this).addClass("DayPicker-Day--selected");
            }
        })
        loadCheckInRestriction(bookCalendar);
    } else {
        loadCheckOutRestriction(bookCalendar, bookingRequest.fromCalDayElement);
    }
}
function loadCalendar() {
    var fromCalendar = $('#first-month').val();
    var toCalendar = moment($('#second-month').val()).endOf('month');
    bookCalendar = retrieveBookCalendar(fromCalendar, toCalendar);
    var firstMonthDays = $(".DayPicker-Body").first().find(".DayPicker-Day");
    loadMonth(fromCalendar,firstMonthDays,bookCalendar)
    var secondMonthDays = $($(".DayPicker-Body")[1]).find(".DayPicker-Day");
    loadMonth(toCalendar,secondMonthDays,bookCalendar)
}

function loadMonth(dateStr, uiMonthCalendar,bookCalendar){
    var fromNormalizedToMonday = moment(dateStr).startOf("month").startOf('week');
    var fromMonthLastDay =  moment(dateStr).endOf('month');

    var momentDay = fromNormalizedToMonday.clone();
    uiMonthCalendar.each(function () {

        $(this).attr("data-date",momentDay.format(DAFAULT_DATE_FORMAT));
        $(this).attr("data-day-of-week",momentDay.format("dd"));
        $(this).removeClass().addClass("DayPicker-Day");
        $(this).find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint","");
        if(!momentDay.isSame(fromMonthLastDay, 'month')){
            $(this).addClass("DayPicker-Day--outside DayPicker-Day--disabled");
        } else if (bookCalendar.calendarDays[momentDay.format(DAFAULT_DATE_FORMAT)]){
            $(this).addClass("DayPicker-Day--bookable");
            $(this).find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint",messages.chekInAllowed);
        }
        momentDay.add(1,'d');
    })
}
function syncChildren(room) {
    if ($("#room_" + room + "_children_count").val() == 0) {
        $("#room_" + room + " .children-age").hide();
    }
}
function syncGUIToBookingRequest() {
    var i = 1;
    $(".calendar_accordion h3").each(function (){
        if (i > bookingRequest.numberOfRooms) {
            $(this).hide();
        } else if (!$(this).is(":visible")){
            $(this).show();
        }
        syncChildren(i);
        i++;
    });
    $( ".calendar_accordion" ).accordion( "option", "active", bookingRequest.numberOfRooms - 1 );
    $("#remove_room").addClass("is-focused").removeClass("disabled");
    $("#add_room").addClass("is-focused").removeClass("disabled");
    switch (bookingRequest.numberOfRooms) {
        case 3:
            $("#add_room").removeClass("is-focused").addClass("disabled");
            break;
        case 1:
            $("#remove_room").removeClass("is-focused").addClass("disabled");
            break;
    }


}

function updateRoom(element, inc){
    if ( bookingRequest.numberOfRooms <= 3) {
        bookingRequest.numberOfRooms = bookingRequest.numberOfRooms + inc;
        syncGUIToBookingRequest();
    }

    $("#summary").trigger("update");
}
function kinderChanged($kinderSelect) {
    var $room = $kinderSelect.closest(".room");
    $room.find(".children-age").each(function(i) {
            if (i < $kinderSelect.val()) {
                $(this).show();
            } else {
                $(this).hide();
            }
    });
    bookingRequest.numberOfKinder = 0;
    $(".children_count select").each(function () {
        bookingRequest.numberOfKinder += parseInt($(this).val());
    })
    $("#summary").trigger("update");
}

function chekinCheckoutConfirmed() {
    $("a[href='#rooms']").click();
}

function changeMonth(numberOfMonthToMove) {
    firstMonthDate = moment($('#first-month').val()).add(numberOfMonthToMove,'month');
    secondMonthDate = firstMonthDate.clone().add(1,'month');

    $('#first-month').val(firstMonthDate.format(DAFAULT_DATE_FORMAT)).trigger("change");
    $('#second-month').val(secondMonthDate.format(DAFAULT_DATE_FORMAT)).trigger("change");
    loadCalendar();
}
function monthChanged(event, $monthSelect) {
    var $firstMonth = $('#first-month');
    var $second = $('#second-month');
    var $ToChange = $monthSelect.is($firstMonth) ? $second : $firstMonth;
    var diff =  $monthSelect.is($firstMonth) ? 1 : -1

    var newValue = moment($monthSelect.val()).add(diff,'month').format(DAFAULT_DATE_FORMAT);
    if (newValue != $ToChange.val()){
        $ToChange.val(newValue).change();
        loadCalendar();
    }
}
/**
 * Created by rifaccio on 06/12/2016.
 */
$(document).ready(function(){
    moment.locale("de_DE");
    //Bind action
    $(".DayPicker-Day").click(function(){daySelected($(this))});
    $("#calendar").on("update-cal-range", function(){calendarRangeUpdate()});
    $("#summary").on("update", function(){summaryUpdate()});
    //room
    $("#add_room").click(function(){updateRoom($(this), +1)});
    $("#remove_room").click(function(){updateRoom($(this), -1)});
    $(".children_count select").change(function () { kinderChanged($(this))});
    $("#book-btn").click(function(){chekinCheckoutConfirmed()});

    $("#first-month").change(function (event) { monthChanged(event, $(this))});
    $("#second-month").change(function (event) { monthChanged(event, $(this))});
    $("#prev-month").click(function(){changeMonth(-1)});
    $("#next-month").click(function(){changeMonth(+1)});
    //Load Calendar
    loadCalendar();
    syncGUIToBookingRequest();
    $("#summary").trigger("update");

});

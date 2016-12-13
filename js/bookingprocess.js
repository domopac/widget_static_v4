const DAFAULT_DATE_FORMAT = "YYYY-MM-DD";

function BookingRequest() {
    this.personsAge = ['18', '18'];
    this.childrenAge = [];
    this.numberOfRooms = 1;
    this.fromDate = '';
    this.toDate = '';
    this.fromCalDayElement = null;
    this.toCalDayElement = null;
    
    this.numberOfPersons = function () {
        return this.personsAge.length;
    };

    this.numberOfKinder = function () {
        return this.childrenAge.length;
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

var bookingRequest = new BookingRequest();

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
    var dayCursor = moment(dayDate);
    var momentDateToCalendar =  moment(bookCalendar.to);
    $(".DayPicker-Day").removeClass("DayPicker-Day--bookable DayPicker-Day--warning");
    for (;dayCursor <= momentDateToCalendar; dayCursor.add(1,'d')){
        const dayDateStr = dayCursor.format(DAFAULT_DATE_FORMAT);
        if( checkoutRestriction[dayDateStr]){
            $("div[data-date=" + dayDateStr + "]").not(".DayPicker-Day--disabled").addClass("DayPicker-Day--warning");
        } else {
            $("div[data-date=" + dayDateStr + "]").not(".DayPicker-Day--disabled").addClass("DayPicker-Day--bookable")
        }
    }

}
function loadCheckInRestriction(bookCalendar) {
    var dayDateCursor = moment(bookCalendar.from);
    var momentDateToCalendar =  moment(bookCalendar.to);
    $(".DayPicker-Day").not(".DayPicker-Day--selected").removeClass("DayPicker-Day--bookable");
    for (;dayDateCursor <= momentDateToCalendar; dayDateCursor.add(1,'d')){
        var dayDateStr = dayDateCursor.format(DAFAULT_DATE_FORMAT);
        var $day = $("div[data-date=" + dayDateStr + "]").not(".DayPicker-Day--disabled");
        if( bookCalendar.calendarDays[dayDateStr] && !$day.hasClass(".DayPicker-Day--selected")){
            $day.addClass("DayPicker-Day--bookable")
        }
    }

}
function daySelected($day) {
    if ($day.is(bookingRequest.fromCalDayElement)) {
        return;
    }
    var dayDate = $day.attr("data-date");
    if ((bookingRequest.twoDateSelected() || !bookingRequest.fromDate) && !bookCalendar.calendarDays[dayDate]) {
        return;
    } else if (!bookingRequest.toDate && bookingRequest.fromDate
        && bookCalendar.calendarDays[bookingRequest.fromCalDayElement.attr("data-date")].checkOutRestriction[dayDate]){
        return;
    }
    if (bookingRequest.twoDateSelected() || isBefore($day, bookingRequest.fromCalDayElement)){
        bookingRequest.resetDates();
    }
    if (bookingRequest.fromDate){
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
    $('#summary_rooms').text(buildLabel("Rooms:",bookingRequest.numberOfRooms));
    $('#summary_persons').text(buildLabel("Persons:",bookingRequest.numberOfPersons()));
    $('#summary_kinder').text(buildLabel("Kinder:",bookingRequest.numberOfKinder()));
    $('#summary_fromDate').text(buildLabel("from:",bookingRequest.fromDate));
    $('#summary_toDate').text(buildLabel("to:",bookingRequest.toDate));
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
    moment.locale("de_DE");
    fromCalendar = "2016-12-01";
    toCalendar = "2017-01-31";
    bookCalendar = retrieveBookCalendar("2016-12-01", "2017-01-31");
    var firstMonthDays = $(".generated .DayPicker-Body").first().find(".DayPicker-Day");
    loadMonth(fromCalendar,firstMonthDays,bookCalendar)
    var secondMonthDays = $($(".generated .DayPicker-Body")[1]).find(".DayPicker-Day");
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

        if(!momentDay.isSame(fromMonthLastDay, 'month')){
            $(this).addClass("DayPicker-Day--outside DayPicker-Day--disabled");
        } else if (bookCalendar.calendarDays[momentDay.format(DAFAULT_DATE_FORMAT)]){
            $(this).addClass("DayPicker-Day--bookable");
        }
        momentDay.add(1,'d');
    })
}
/**
 * Created by rifaccio on 06/12/2016.
 */
$(document).ready(function(){
    //Bind action
    $(".DayPicker-Day").click(function(){daySelected($(this))});
    $("#summary").on("update", function(){summaryUpdate()});
    $("#calendar").on("update-cal-range", function(){calendarRangeUpdate()})

    //Load Calendar
    loadCalendar();
    $("#summary").trigger("update");

});

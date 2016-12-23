const DAFAULT_DATE_FORMAT = "YYYY-MM-DD";
var messages = {
    "chekInAllowed": "Anreise möglich",
    "chekInNotAllowed": "Anreise nich möglich",
    "chekOutAllowed": "Abreise möglich",
    "chekOutNotAllowed": "Abreise nich möglich",
    "minStayRestriction": "Abreise nicht möglich, da die Mindestaufenthaltsdauer nicht erfüllt wird"
};

function BookingRequest() {
    this.personsAge = ['18', '18'];
    this.childrenAge = [];
    this.numberOfRooms = 1;
    this.fromCalDayElement = $($(".DayPicker-Day")[10]);
    this.toCalDayElement = $($(".DayPicker-Day")[13]);
    this.fromDate = this.fromCalDayElement.attr('aria-label');
    this.toDate = this.toCalDayElement.attr('aria-label');
    this.numberOfKinder = 0

    this.momentFrom = function () {
        if (!this.fromCalDayElement) return;
        var dayDate = this.fromCalDayElement.attr("data-date");
        return moment(dayDate);
    };
    this.momentTo = function () {
        if (!this.toCalDayElement) return;
        var dayDate = this.toCalDayElement.attr("data-date");
        return moment(dayDate);
    };
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

function Extra($extraAction) {
    this.$extra = $extraAction.parent();

    this.price = function () {
        return Number(this.$extra.attr("data-price"));
    };
    this.quantity = function () {
        return Number(this.$extra.attr("data-quantity"));
    };
    this.setQuantity = function (newQuantity) {
        this.$extra.attr("data-quantity", newQuantity);
        return this.quantity();
    };
    this.title = function () {
        return this.$extra.attr("data-title");
    };
    this.id = function () {
        return this.$extra.attr("data-id");
    };
}

var bookingRequest = new BookingRequest();
var bookCalendar = null;

function isBefore($day, $otherDay) {
    var $days = $(".DayPicker div.DayPicker-Day").not(".DayPicker-Day--disabled");
    var dayBeforeFound = false;
    for (var i = 0; i < $days.length; i++) {
        if ($($days[i]).is($day)) {
            return !dayBeforeFound;
        }
        if ($($days[i]).is($otherDay)) {
            dayBeforeFound = true;
        }
    }
}

function loadCheckOutRestriction(bookCalendar, $day) {
    var dayDate = $day.attr("data-date");
    var checkoutRestriction = bookCalendar.calendarDays[dayDate].checkOutRestriction;
    const day = moment(dayDate);
    var dayCursor = day.clone();
    var momentDateToCalendar = moment(bookCalendar.to);
    $(".DayPicker-Day").removeClass("DayPicker-Day--bookable DayPicker-Day--warning");
    $(".DayPicker-Day .DayPicker-Day__Wrapper.hint--top").attr("data-hint", '');
    var minStayDay = checkoutRestriction.minStay ? dayCursor.clone().add(checkoutRestriction.minStay, 'd') : null;
    var maxStayDate = checkoutRestriction.maxStay ? dayCursor.clone().add(checkoutRestriction.maxStay, 'd') : dayCursor.clone().add(20, 'd');
    for (; dayCursor <= momentDateToCalendar && dayCursor <= maxStayDate; dayCursor.add(1, 'd')) {
        var dayDateStr = dayCursor.format(DAFAULT_DATE_FORMAT);

        var $dayCursor = $("div[data-date=" + dayDateStr + "]").not(".DayPicker-Day--disabled");
        if (!bookCalendar.calendarDays[dayDateStr]) {
            //the day is not bookable; the chekout must be done this day;
            $dayCursor.addClass("DayPicker-Day--bookable");
            $dayCursor.find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", messages.chekOutAllowed);
            break;
        }
        if (bookCalendar.calendarDays[dayDateStr].checkOutRestriction && bookCalendar.calendarDays[dayDateStr].checkOutRestriction.closed) {
            $dayCursor.find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", messages.chekOutNotAllowed);
        } else if (minStayDay && dayCursor <= minStayDay && dayCursor > day) {
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
    var momentDateToCalendar = moment(bookCalendar.to);
    $(".DayPicker-Day").not(".DayPicker-Day--selected").removeClass("DayPicker-Day--bookable");
    $(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", '');
    for (; dayDateCursor <= momentDateToCalendar; dayDateCursor.add(1, 'd')) {
        var dayDateStr = dayDateCursor.format(DAFAULT_DATE_FORMAT);
        var $day = $("div[data-date=" + dayDateStr + "]").not(".DayPicker-Day--disabled");
        if (bookCalendar.calendarDays[dayDateStr]
            && (!bookCalendar.calendarDays[dayDateStr].checkInRestriction || !bookCalendar.calendarDays[dayDateStr].checkInRestriction.closed)
            && !$day.hasClass(".DayPicker-Day--selected")) {

            $day.addClass("DayPicker-Day--bookable");
            $day.find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", messages.chekInAllowed);
        }
    }

}
function validForCheckInCheckOut($day) {
    if ($day.hasClass("DayPicker-Day--disabled") || !$day.hasClass("DayPicker-Day--bookable")) {
        return false;
    }
    if ($day.is(bookingRequest.fromCalDayElement)) {
        return false;
    }
    var dayDate = $day.attr("data-date");
    if ((bookingRequest.twoDateSelected() || !bookingRequest.fromDate) && !bookCalendar.calendarDays[dayDate]) {
        return false;
    } else if (!bookingRequest.toDate && bookingRequest.fromDate
        && bookCalendar.calendarDays[bookingRequest.fromCalDayElement.attr("data-date")].checkOutRestriction.closed) {
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
    valueStr = value + '';
    return valueStr.trim() != '0' && valueStr.trim() != '' ? prefix + valueStr.trim() : '';
}
function summaryUpdate() {
    if ($("a[href='#calendar']").parent().hasClass("active") || $("a[href='#total']").parent().hasClass("active")) {
        $('#summary').hide();
    } else {
        $('#summary').show();
    }
    $('.summary_rooms').text(buildLabel("", bookingRequest.numberOfRooms));
    $('.summary_persons').text(buildLabel("", bookingRequest.numberOfPersons()));
    $('.summary_kinder').text(buildLabel("", bookingRequest.numberOfKinder));
    $('.summary_fromDate').text(buildLabel("", bookingRequest.fromDate));
    $('.summary_toDate').text(buildLabel("", bookingRequest.toDate));
    $('.summary_nights').text(buildLabel("", moment(bookingRequest.momentTo()).diff(bookingRequest.momentFrom(), 'day')));
}

function updatedCalendarRange() {
    $(".DayPicker-Day").removeClass("DayPicker-Day--first");
    $(".DayPicker-Day").removeClass("DayPicker-Day--last");
    $(".DayPicker-Day").removeClass("DayPicker-Day--selected");
    bookingRequest.fromCalDayElement.addClass("DayPicker-Day--selected").addClass("DayPicker-Day--first");
    if (bookingRequest.toCalDayElement != null) {
        bookingRequest.toCalDayElement.addClass("DayPicker-Day--selected").addClass("DayPicker-Day--last");
    } else {
        bookingRequest.fromCalDayElement.addClass("DayPicker-Day--selected").addClass("DayPicker-Day--last");
    }
    if (bookingRequest.twoDateSelected()) {
        var inRange = false;
        var $days = $(".DayPicker div.DayPicker-Day").not(".DayPicker-Day--disabled");
        $days.each(function () {
            if (!inRange && $(this).is(bookingRequest.fromCalDayElement)) {
                inRange = true;
            } else if (inRange && $(this).is(bookingRequest.toCalDayElement)) {
                inRange = false;
            }
            if (inRange) {
                $(this).addClass("DayPicker-Day--selected");
            }
        })
        loadCheckInRestriction(bookCalendar);
        $("#book-btn").removeClass("disabled");
        $("a[href='#rooms']").parent().removeClass("disabled");
    } else {
        loadCheckOutRestriction(bookCalendar, bookingRequest.fromCalDayElement);
        $("#book-btn").addClass("disabled");
        $("a[href='#rooms']").parent().addClass("disabled");
    }
}
function loadCalendar() {
    var fromCalendar = $('#first-month').val();
    var toCalendar = moment($('#second-month').val()).endOf('month');
    bookCalendar = retrieveBookCalendar(fromCalendar, toCalendar);
    var firstMonthDays = $(".DayPicker-Body").first().find(".DayPicker-Day");
    loadMonth(fromCalendar, firstMonthDays, bookCalendar)
    var secondMonthDays = $($(".DayPicker-Body")[1]).find(".DayPicker-Day");
    loadMonth(toCalendar, secondMonthDays, bookCalendar);
    loadCheckInRestriction(bookCalendar);
}

function loadMonth(dateStr, uiMonthCalendar, bookCalendar) {
    var fromNormalizedToMonday = moment(dateStr).startOf("month").startOf('week');
    var fromMonthLastDay = moment(dateStr).endOf('month');

    var momentDay = fromNormalizedToMonday.clone();
    uiMonthCalendar.each(function () {

        $(this).attr("data-date", momentDay.format(DAFAULT_DATE_FORMAT));
        $(this).attr("data-day-of-week", momentDay.format("dd"));
        $(this).removeClass().addClass("DayPicker-Day");
        $(this).find(".DayPicker-Day__Date").first().text('');
        $(this).find(".DayPicker-Day__Wrapper.hint--top").attr("data-hint", "");
        if (!momentDay.isSame(fromMonthLastDay, 'month')) {
            $(this).addClass("DayPicker-Day--outside DayPicker-Day--disabled");
        } else {
            $(this).find(".DayPicker-Day__Date").first().text(momentDay.format("D"));
        }
        momentDay.add(1, 'd');
    })
}
function syncChildren(room) {
    if ($("#room_" + room + "_children_count").val() == 0) {
        $("#room_" + room + " .children-age").hide();
    }
}
function syncGUIToBookingRequest() {
    var i = 1;
    $(".calendar_accordion h3").each(function () {
        if (i > bookingRequest.numberOfRooms) {
            $(this).hide();
        } else if (!$(this).is(":visible")) {
            $(this).show();
        }
        syncChildren(i);
        i++;
    });
    $(".calendar_accordion").accordion("option", "active", bookingRequest.numberOfRooms - 1);
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

function updateRoom(element, inc) {
    if (bookingRequest.numberOfRooms <= 3) {
        bookingRequest.numberOfRooms = bookingRequest.numberOfRooms + inc;
        syncGUIToBookingRequest();
    }

    $("#summary").trigger("update");
}
function kinderChanged($kinderSelect) {
    var $room = $kinderSelect.closest(".room");
    $room.find(".children-age").each(function (i) {
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
    $("a[href='#rooms']").parent().removeClass('disabled');
    $("a[href='#rooms']").click();
    summaryUpdate();
}

function changeMonth(numberOfMonthToMove) {
    firstMonthDate = moment($('#first-month').val()).add(numberOfMonthToMove, 'month');
    secondMonthDate = firstMonthDate.clone().add(1, 'month');

    $('#first-month').val(firstMonthDate.format(DAFAULT_DATE_FORMAT)).trigger("change");
    $('#second-month').val(secondMonthDate.format(DAFAULT_DATE_FORMAT)).trigger("change");
    loadCalendar();
}
function monthChanged(event, $monthSelect) {
    var $firstMonth = $('#first-month');
    var $second = $('#second-month');
    var $ToChange = $monthSelect.is($firstMonth) ? $second : $firstMonth;
    var diff = $monthSelect.is($firstMonth) ? 1 : -1

    var newValue = moment($monthSelect.val()).add(diff, 'month').format(DAFAULT_DATE_FORMAT);
    if (newValue != $ToChange.val()) {
        $ToChange.val(newValue).change();
        loadCalendar();
    }
}
function boardConfirmed($room) {
    $("a[href='#service']").parent().removeClass('disabled');
    $("a[href='#service']").click();
    $("#service .jumbotron.room").hide()
    $("#"+$room.attr("data-room")).show();
    if (!$("#"+$room.attr("data-room")+" ."+$room.attr("data-board")).hasClass("ui-state-active")) {
        $("#" + $room.attr("data-room") + " ." + $room.attr("data-board")).click();
    }
}
function serviceConfirmed($serviceRoom) {
    $("a[href='#total']").parent().removeClass('disabled');
    $("a[href='#total']").click();
    $(".total-summary .room_name").text($serviceRoom.attr("data-room-name"));
    $(".total-summary .price-item-room .price").text($serviceRoom.attr("data-room-price")+",00 €");
    $(".total-summary .extra .price-item").remove();
    $serviceRoom.parent().find(".extra").each(function () {
        var extraName =$(this).find(".quantity").parent().text();
        var extraPrice =$(this).find(".price").attr("data-price");
        var totSummaryExtra =
            '<div class="clearfix price-item"><div class="col-xs-offset-1 col-xs-6">'
            + '<span class="extra-name">' + extraName + '</span></div>'
            + '<div><span class="price">' + extraPrice + ',00 &euro;</span></div></div>';
        var html = $.parseHTML(totSummaryExtra);
        $(".total-summary .extra").append(html);
    })
    $(".total-summary .total .price").text($serviceRoom.attr("data-total-price"))

}
function updateExtraView(extra) {
    var $label = extra.$extra.parent().find(".extra-price").first();
    var $removeAction = extra.$extra.parent().find(".remove_extra").first();
    if (extra.quantity() == 0) {
        $label.removeClass("selected");
        $label.find(".quantity").text("");
        $removeAction.hide();
    } else {
        $label.addClass("selected");
        $label.find(".quantity").text(extra.quantity() + "x");
        $removeAction.show();
    }

}

function updateTotServicePrice() {
    var totPerBoard = 0;
    $(".service-board .book_btn").each(function () {
        totPerBoard = 0;
        $(this).parent().find(".details .price").each(function () {
            totPerBoard += Number($(this).attr("data-price"));
        });
        $(this).text("Buchen um " + totPerBoard + ",00 €");
        $(this).attr("data-total-price", totPerBoard + ",00 €");
        $(this).parent().prev().find(".price").text(totPerBoard + ",00 €");
    })
}
function updateServiceDetails(extra) {
    $(".service-board .details .row.extra." + extra.id()).remove();
    if (extra.quantity() > 0) {
        var totExtra = Number(extra.price()) * Number(extra.quantity());
        var extraDetails =
            '<div class="row extra ' + extra.id() + '">'
            + '<div class="col-xs-10"><span class="quantity">' + extra.quantity() + 'x </span>'
            + extra.title() + '</div><div class="col-xs-2">'
            + '<span class="price" data-price="' + totExtra + '">' + totExtra + ' &euro;</span></div></div>';
        var html = $.parseHTML(extraDetails);
        $(".service-board .details").append(html);
    }
    updateTotServicePrice();
}
function changeExtra(quantityVar, $extra) {
    var extra = new Extra($extra);

    extra.setQuantity(extra.quantity() + quantityVar);

    updateExtraView(extra);
    updateServiceDetails(extra);

}
/**
 * Created by rifaccio on 06/12/2016.
 */
$(document).ready(function () {
    moment.locale("de_DE");
    //Bind action
    $(".DayPicker-Day").click(function () {
        daySelected($(this))
    });
    $("#calendar").on("update-cal-range", function () {
        updatedCalendarRange()
    });
    $("#summary").on("update", function () {
        summaryUpdate()
    });

    //room
    $("#add_room").click(function () {
        updateRoom($(this), +1)
    });
    $("#remove_room").click(function () {
        updateRoom($(this), -1)
    });
    $(".children_count select").change(function () {
        kinderChanged($(this))
    });
    $("#book-btn").click(function () {
        chekinCheckoutConfirmed()
    });
    $(".board .book_btn").click(function () {
        boardConfirmed($(this))
    });
    $(".book-btn-room").click(function () {
        boardConfirmed($(this))
    });
    $(".service-board .book_btn").click(function () {
        serviceConfirmed($(this))
    });

    $("#first-month").change(function (event) {
        monthChanged(event, $(this))
    });
    $("#second-month").change(function (event) {
        monthChanged(event, $(this))
    });
    $("#prev-month").click(function () {
        changeMonth(-1)
    });
    $("#next-month").click(function () {
        changeMonth(+1)
    });

    //Service
    $(".add_extra").click(function () {
        changeExtra(1, $(this))
    });
    $(".remove_extra").click(function () {
        changeExtra(-1, $(this))
    });
    //Load Calendar
    loadCalendar();
    syncGUIToBookingRequest();
    $("#summary").trigger("update");
    updateTotServicePrice();

});

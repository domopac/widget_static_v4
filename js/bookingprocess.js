function BookingRequest() {
    this.personsAge = ['18', '18'];
    this.childrenAge = [];
    this.numberOfRooms = 1;
    this.fromDate = '';
    this.toDate = '';

    this.numberOfPersons = function () {
        return this.personsAge.length;
    }
    this.numberOfKinder = function () {
        return this.childrenAge.length;
    }

    this.resetDates = function () {
        this.fromDate = '';
        this.toDate = '';
    };

    this.twoDateSelected = function () {
        return this.fromDate.trim() != '' && this.toDate.trim() != '';
    };
}

function UiDayRange() {
    this.fromCalDayElement = null;
    this.toCalDayElement = null;
    this.reset = function () {
        this.fromCalDayElement = null;
        this.toCalDayElement = null;
    }
}

var uiDayRange = new UiDayRange();
var bookingRequest = new BookingRequest();


function daySelected($day) {
    if (bookingRequest.twoDateSelected()){
        bookingRequest.resetDates();
        uiDayRang.reset();
    }
    if (bookingRequest.fromDate){
        uiDayRang.toCalDayElement = $day;
        bookingRequest.toDate = $day.attr('aria-label')
    } else {
        bookingRequest.fromDate = $day.attr('aria-label');
        uiDayRang.toCalDayElement = $day;
    }
    $("#summary").trigger("update");
}

function buildLabel(prefix, value) {
    valueStr = value+'';
    return valueStr.trim() != '0' && valueStr.trim() != '' ? prefix + valueStr.trim() : '';
}
function summaryUpdated() {
    $('#summary_rooms').text(buildLabel("Rooms:",bookingRequest.numberOfRooms));
    $('#summary_persons').text(buildLabel("Persons:",bookingRequest.numberOfPersons()));
    $('#summary_kinder').text(buildLabel("Kinder:",bookingRequest.numberOfKinder()));
    $('#summary_fromDate').text(buildLabel("from:",bookingRequest.fromDate));
    $('#summary_toDate').text(buildLabel("to:",bookingRequest.toDate));
}
/**
 * Created by rifaccio on 06/12/2016.
 */
$(document).ready(function(){
    $(".DayPicker-Day").click(function(){daySelected($(this))});
    $("#summary").on("update", function(){summaryUpdated()});
    $("#summary").trigger("update");
});

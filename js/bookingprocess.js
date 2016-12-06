function BookingRequest() {
    this.fromDate = '';
    this.toDate = '';
    this.personsAge = ['18', '18'];
    this.childrenAge = [];

    this.numberOfPersons = function () {
        return this.personsAge.length;
    }
    this.numberOfRooms = function () {
        return this.personsAge.length;
    }
    this.numberOfKinder = function () {
        return 0;
    }


    this.resetDates = function () {
        this.fromDate = '';
        this.toDate = '';
    };

    this.twoDateSelected = function () {
        return this.fromDate && this.toDate;
    };
}

var bookingRequest = new BookingRequest();


function daySelected($day) {
    if (bookingRequest.twoDateSelected()){
        bookingRequest.resetDates();
    }
    if (bookingRequest.fromDate){
        bookingRequest.toDate = $day.attr('aria-label')
    } else {
        bookingRequest.fromDate = $day.attr('aria-label');
    }
    $("#summary").trigger("update");
}

function summaryUpdated() {
    $('#rooms').text(bookingRequest.numberOfRooms());
    $('#persons').text(bookingRequest.numberOfPersons());
    $('#kinder').text(bookingRequest.numberOfKinder());
    $('#fromDate').text(bookingRequest.fromDate);
    $('#toDate').text(bookingRequest.toDate);
}
/**
 * Created by rifaccio on 06/12/2016.
 */
$(document).ready(function(){
    $(".DayPicker-Day").click(function(){daySelected($(this))});
    $("#summary").on("update", function(){summaryUpdated()});
});

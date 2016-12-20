

$(document).ready(function(){

    // show/hide .widget_tab on click on menu and button
    $(".navbar-nav li").on("click",function() {

        if ($(this).hasClass("disabled")) { return true;}

        $(".navbar-nav li").each(function() {
            $(this).removeClass("active");
        });
        if(!$(this).hasClass("active")) {
            $(this).addClass("active");
        }
        if($(this).children().attr("href") !== "undefined") {
            var $selected = $(this).children().attr("href");
            $(".widget_tab").each(function() {
                $(this).hide();
            });
            $($selected).show(400);
            if(($selected) === "#rooms") {$(".progress-bar").css("width","50%");}
            else if (($selected) === "#service") {$(".progress-bar").css("width","75%");}
            else if (($selected) === "#total") {$(".progress-bar").css("width","100%");}
            else {$(".progress-bar").css("width","25%");};
        }
    });


    // info_btn opens the room_board section
    $(".room .info_btn").on("click",function() {
        var room_boards = $(this).parents(".room").find(".room_board");
        if(room_boards.hasClass("room_board_open")) {
            room_boards.slideUp().removeClass("room_board_open");
        } else {
            room_boards.slideDown().addClass("room_board_open");
        }
        $(this).parents(".room").find(".book-btn-room").toggle();
    });

});


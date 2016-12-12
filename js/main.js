

$(document).ready(function(){
    
    // show/hide .widget_tab on click on menu and button
    $(".navbar-nav li").on("click",function() {    
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
    $(".info_btn").on("click",function() {       
        if( $(this).parents(".room").siblings().find(".room_board").hasClass("yo")) {
        $(this).parents(".room").siblings().find(".room_board").slideUp().removeClass("yo"); 
        }
        $(this).parents(".room").find(".room_board").slideToggle().addClass("yo");
    });
    
});


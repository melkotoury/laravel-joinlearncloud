
// Loading Screen

$(window).load(function () {
    
    "use strict";
    
    // Loading Elements
    
    $(".loading .sk-folding-cube").fadeOut(2000, function () {
        
        // Show The Scroll

        $("body").css("overflow", "auto");
        
        $(this).parent().fadeOut(2000, function () {
            
            $(this).remove();
        });
    });
});

/*global $, smoothScroll*/

$(function () {
   
    "use strict";
    
    // Make Div Height Same As Window Height
    
    
    // Initialize Smooth Scroll
    
    smoothScroll.init();
    
});
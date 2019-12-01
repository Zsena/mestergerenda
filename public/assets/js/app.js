'use strict';

window.$ = window.jQuery = $;

// import $ from 'jquery';

// import 'jquery-ui/ui/widgets/datepicker.js';

window.onscroll = function() {scrollFunction()};

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
function scrollFunction() {
    let navLink = $('header.main-header nav.main-nav ul.menu li a');
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        $('#navbar').addClass('sticky-bg-color');
        navLink.addClass('sticky-color');
    } else {
        $('#navbar').removeClass('sticky-bg-color');
        navLink.removeClass('sticky-color');
    }
}

function toggleMenuFunction () {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
            $(this).html("<i class='fas fa-bars'></i>");
        } else {
            $(".item").addClass("active");
            $(this).html("<i class='fas fa-times'></i>");
        }
    });
}

// // Add active class to the current button (highlight it)
// var header = document.getElementById("navbar");
// var item = header.getElementsByClassName("item");
// for (var i = 0; i < item.length; i++) {
//     item[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("clicked");
//         current[0].className = current[0].className.replace(" clicked", "");
//         this.className += " clicked";
//     });
// }

$(document).ready(function(){
    toggleMenuFunction();
});
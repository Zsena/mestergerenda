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

// tabs

var tabLinks = document.querySelectorAll(".tablinks");
var tabContent = document.querySelectorAll(".tabcontent");


tabLinks.forEach(function(el) {
    el.addEventListener("click", openTabs);
});


function openTabs(el) {
    var btnTarget = el.currentTarget;
    var tablink = btnTarget.dataset.tabs;

    tabContent.forEach(function(el) {
        el.classList.remove("active");
    });

    tabLinks.forEach(function(el) {
        el.classList.remove("active");
    });

    document.querySelector("#" + tablink).classList.add("active");

    btnTarget.classList.add("active");
}

function bindValidation() {
    $.validator.addMethod("regex", function (value, element, regexpr) {
        return regexpr.test(value);
    });
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    });
    $.validator.addMethod("zipCode", function (value, element, arg) {
        return value.length === 4;
    });
    // $.validator.addMethod("validCodeFormat", function (value, element, arg) {
    //     return /^[1-9]{4}\/[1-9]{5}$/i.test(value);
    // });
    jQuery.validator.addMethod("lettersOnly", function (value, element) {
        return this.optional(element) || /^[a-zA-Z\u0080-\uFFFF]+$/i.test(value); //latin extended
    }, "Letters only please");

    $("#contactForm").validate({
        // onfocusout: function (element, event) {
        //     if (element.name !== "placeList") {
        //         $.validator.defaults.onfocusout.call(this, element, event);
        //     }
        // },
        rules: {
            email: {
                required: true,
                email: true,
                minlength: 6,
                regex: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i
            },
            tel: {
                required: true,
                number: true,
                minlength: 9
            },
            zipCode: {
                required: true,
                minlength: 4,
                maxlength: 4,
                number: true
            },
            lastName: {
                required: true,
                lettersOnly: true
            },
            firstName: {
                required: true,
                lettersOnly: true
            },
            city: {
                required: true,
                lettersOnly: true
            },
            agree: {
                required: true
            },
            message: {
                required: true
            }
        },
        messages: {
            zipCode: {
                required: "Kérjük adja meg az irányítószámát!",
                minlength: "Az irányítószám kevesebb mint 4, pontosan 4db számból kell állnia, és csak számokat tartalmazhat. Pl: 1097",
                maxlength: "Az irányítószám több mint 4, pontosan 4db számból kell állnia, és csak számokat tartalmazhat. Pl: 1097",
                number: "Az irányítószám csak számokat tartalmazhat. Pl: 1097"
            },
            email: {
                required: "Kérjük adjon meg egy e-mail címet. Pl.: mestergerenda@mestergerenda.hu",
                email: "Nem megfelelő az e-mail formátuma: Pl.: mestergerenda@mestergerenda.hu",
                regex: "Nem megfelelő az e-mail formátuma: Pl.: mestergerenda@mestergerenda.hu"
            },
            tel: {
                required: "Kérjük adja meg a telefonszámát!",
                number: "A telefonszám csak számokból állhat. Pl: 06205555556",
                minlength: "A telefonszámnak minimum 9 jegyűnek kell lennie. pl: 061564656"
            },
            lastName: {
                required: "Kérjük adja meg a vezetéknevét.",
                lettersOnly: "Kérjük csak betűket használjon!"
            },
            firstName: {
                required: "Kérjük adja meg a keresztnevét.",
                lettersOnly: "Kérjük csak betűket használjon!"
            },
            city: {
                required: "Kérjük adja meg a település nevét ahol szeretne építkezni.",
                lettersOnly: "Kérjük csak betűket használjon!"
            },
            agree: {
                required: "Kérjük küldés előtt fogadja el az adatkezelési szabályzatunkat!"
            },
            message: {
                required: "Kérjük küldés előtt írja meg nekünk az elképzeléseit."
            }
        },
        errorLabelContainer: $('#errorContainer'),
        wrapper: "li"
    });

}

$(document).ready(function(){
    toggleMenuFunction();
    bindValidation();
});
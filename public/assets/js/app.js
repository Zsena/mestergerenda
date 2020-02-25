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

//faq:  tabs

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

    $("#offerForm").validate({
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
                lettersOnly: "Kérjük csak betűket használjon a vezetéknév mezőben!"
            },
            firstName: {
                required: "Kérjük adja meg a keresztnevét.",
                lettersOnly: "Kérjük csak betűket használjon a keresztnév mezőben!!"
            },
            city: {
                required: "Kérjük adja meg a település nevét ahol szeretne építkezni.",
                lettersOnly: "Kérjük csak betűket használjon a település mezőben!"
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

    $("#newsLetterForm").validate({
        rules: {
            newsLetterName: {
                required: true,
                lettersOnly: true
            },
            newsLetterEmail: {
                required: true,
                email: true,
                minlength: 6,
                regex: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i
            },
            newsLetterAgree: {
                required: true
            },
        },
        messages: {
            newsLetterName: {
                required: "Név kötelező.",
                lettersOnly: "A név mező csak betűket tartalmazhat"
            },
            newsLetterEmail: {
                required: "Az e-mail kötelező.",
                email: "Az @ megadása kötelező.",
                minlength: "Az e-mail minimum 6 karakterből kell hogy álljon",
                regex: "Nem megfelelő az e-mail formátuma"
            },
            newsLetterAgree: {
                required: "Kérjük fogadja el az adatkezelési szabályzatunkat!"
            },
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "newsLetterAgree") {
                error.insertBefore( $("#newsLetterAgreeError") );
            } else {
                error.insertAfter(element);
            }
        },
        wrapper: "li",
    });

    $("#contactForm").validate({
        rules: {
            contactEmail: {
                required: true,
                email: true,
                mcontactinlength: 6,
                regex: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i
            },
            contactTel: {
                required: true,
                number: true,
                minlength: 9
            },
            contactZipCode: {
                required: true,
                minlength: 4,
                maxlength: 4,
                number: true
            },
            contactLastName: {
                required: true,
                lettersOnly: true
            },
            contactFirstName: {
                required: true,
                lettersOnly: true
            },
            contactCity: {
                required: true,
                lettersOnly: true
            },
            contactAgree: {
                required: true
            },
            contactMessage: {
                required: true
            }
        },
        messages: {
            contactZipCode: {
                required: "Kérjük adja meg az irányítószámát!",
                minlength: "Az irányítószám kevesebb mint 4, pontosan 4db számból kell állnia, és csak számokat tartalmazhat. Pl: 1097",
                maxlength: "Az irányítószám több mint 4, pontosan 4db számból kell állnia, és csak számokat tartalmazhat. Pl: 1097",
                number: "Az irányítószám csak számokat tartalmazhat. Pl: 1097"
            },
            contactEmail: {
                required: "Kérjük adjon meg egy e-mail címet. Pl.: mestergerenda@mestergerenda.hu",
                email: "Nem megfelelő az e-mail formátuma: Pl.: mestergerenda@mestergerenda.hu",
                regex: "Nem megfelelő az e-mail formátuma: Pl.: mestergerenda@mestergerenda.hu"
            },
            contactTel: {
                required: "Kérjük adja meg a telefonszámát!",
                number: "A telefonszám csak számokból állhat. Pl: 06205555556",
                minlength: "A telefonszámnak minimum 9 jegyűnek kell lennie. pl: 061564656"
            },
            contactLastName: {
                required: "Kérjük adja meg a vezetéknevét.",
                lettersOnly: "Kérjük csak betűket használjon a vezetéknév mezőben!"
            },
            contactFirstName: {
                required: "Kérjük adja meg a keresztnevét.",
                lettersOnly: "Kérjük csak betűket használjon a keresztnév mezőben!!"
            },
            contactCity: {
                required: "Kérjük adja meg a település nevét ahol szeretne építkezni.",
                lettersOnly: "Kérjük csak betűket használjon a település mezőben!"
            },
            contactAgree: {
                required: "Kérjük küldés előtt fogadja el az adatkezelési szabályzatunkat!"
            },
            contactMessage: {
                required: "Kérjük küldés előtt írja meg nekünk az elképzeléseit."
            }
        },
        errorLabelContainer: $('#contactErrorContainer'),
        wrapper: "li"
    });
}

/* ===== creating fake Select Boxes ===== */
$('.sel').each(function() {
    $(this).children('select').css('display', 'none');

    var $current = $(this);

    $(this).find('option').each(function(i) {
        if (i == 0) {
            $current.prepend($('<div>', {
                class: $current.attr('class').replace(/sel/g, 'sel-box')
            }));

            var placeholder = $(this).text();
            $current.prepend($('<span>', {
                class: $current.attr('class').replace(/sel/g, 'sel-placeholder'),
                text: placeholder,
                'data-placeholder': placeholder
            }));

            return;
        }

        $current.children('div').append($('<span>', {
            class: $current.attr('class').replace(/sel/g, 'sel-box-options'),
            text: $(this).text()
        }));
    });
});

// Toggling the `.active` state on the `.sel`.
$('.sel').click(function() {
    $(this).toggleClass('active');
});

// Toggling the `.selected` state on the options.
$('.sel-box-options').click(function() {
    var txt = $(this).text();
    var index = $(this).index();

    $(this).siblings('.sel-box-options').removeClass('selected');
    $(this).addClass('selected');

    var $currentSel = $(this).closest('.sel');
    $currentSel.children('.sel-placeholder').text(txt);
    $currentSel.children('select').prop('selectedIndex', index + 1);
});

/*Scroll to top when arrow up clicked BEGIN*/
$('#backToTop').fadeOut();
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 1000) {
        $('#backToTop').fadeIn();
    } else {
        $('#backToTop').fadeOut();
    }
});

$("#backToTop").click(function(event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});/*Scroll to top when arrow up clicked END*/


$(document).ready(function(){
    toggleMenuFunction();
    bindValidation();
});

// $("#newsLetterSubmit").click(function(e){
//     e.preventDefault();
// });
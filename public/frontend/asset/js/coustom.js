
$(document).ready(function(){
    $("#menu_btn").click(function(){
        $(".main_menu").toggleClass("main");
    });
});
// =============nav-end================

var swiper = new Swiper(".myproduct", {
    slidesPerView: 5,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        600: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        770: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        991: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    },
});
// =============Password===============
$(function () {

    $('#eye').click(function () {

        if ($(this).hasClass('fa-eye-slash')) {

            $(this).removeClass('fa-eye-slash');

            $(this).addClass('fa-eye');

            $('#password').attr('type', 'text');

        } else {

            $(this).removeClass('fa-eye');

            $(this).addClass('fa-eye-slash');

            $('#password').attr('type', 'password');
        }
    });
});


$(function () {

    $('#eye2').click(function () {

        if ($(this).hasClass('fa-eye-slash')) {

            $(this).removeClass('fa-eye-slash');

            $(this).addClass('fa-eye');

            $('#password-confirm').attr('type', 'text');

        } else {

            $(this).removeClass('fa-eye');

            $(this).addClass('fa-eye-slash');

            $('#password-confirm').attr('type', 'password');
        }
    });
});

// ===============log-in ================

$(function () {

    $('#eyelog').click(function () {

        if ($(this).hasClass('fa-eye-slash')) {

            $(this).removeClass('fa-eye-slash');

            $(this).addClass('fa-eye');

            $('#passwordlog').attr('type', 'text');

        } else {

            $(this).removeClass('fa-eye');

            $(this).addClass('fa-eye-slash');

            $('#passwordlog').attr('type', 'password');
        }
    });
});


// ================Shop-categories============

$(document).ready(function () {
    //jquery for toggle sub menus
    $('.sub-btn').click(function () {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });

    //jquery for expand and collapse the sidebar
    $('.menu-btn').click(function () {
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
    });

    $('.close-btn').click(function () {
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
    });
});

// ================Prise===============


// =========================

var swiper = new Swiper(".product_gellery", {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
    loop: true,
    breakpoints: {
        300: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        600: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        770: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
    },

});
var swiper2 = new Swiper(".product_gellery2", {
    spaceBetween: 3,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});

require("./bootstrap");
window.$ = window.jQuery = require("jquery");

require("./slick-1.8.1.min");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

jQuery(window).scroll(function () {
    const scroll = jQuery(window).scrollTop();

    if (scroll >= 50) {
        jQuery(".sticky-header").addClass("sticky-header-active");
    } else {
        jQuery(".sticky-header").removeClass("sticky-header-active");
    }
});

jQuery(document).ready(function () {
    console.log("string");
});

jQuery(document).ready(function ($) {

    $(".largeSlider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: ".thumbSlider",
        prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
        nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    });
    $(".thumbSlider").slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        arrows: true,
        centerPadding: '20px',
        asNavFor: ".largeSlider",
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
        nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    });

    // $(".gallery-slider").slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: true,
    //     fade: false,
    //     asNavFor: ".thumbnail-slider",
    //     prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
    //     nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    // });
    // $(".thumbnail-slider").slick({
    //     slidesToShow: 7,
    //     slidesToScroll: 1,
    //     arrows: true,
    //     centerPadding: '20px',
    //     asNavFor: ".gallery-slider",
    //     dots: false,
    //     centerMode: false,
    //     focusOnSelect: true,
    //     prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
    //     nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    // });
});

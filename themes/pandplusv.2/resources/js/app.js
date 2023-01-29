import $ from "jquery";
require('./bootstrap');
import 'swiper/css';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import WOW from 'wow.js'
require('./gsap');

const wow = new WOW(
    {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 100,          // distance to the element when triggering the animation (default is 0)
        duration: .5,
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        callback: function (box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
);

wow.init();

$(document).ready(function () {
    // animate logo
        setInterval(function () {
            $('.logo_header').addClass('animate__logo');
            setTimeout(function () {
                $('.logo_header').removeClass('animate__logo');
            }, 3000)
        }, 6000);
        // animate logo
        $(window).scroll(function () { // check if scroll event happened
            if ($(document).scrollTop() > 30) { // check if user scrolled more than 50 from top of the browser window
                $('.cd-nav-trigger ').css('background-color', 'rgba(255, 255, 255, 0.5)')
                $('.cd-nav-icon').css('background-color', 'black')
                $('.backTo_Top').removeClass('outro');
            } else {
                $('.cd-nav-trigger ').css('background-color', 'transparent')
                $('.cd-nav-icon').css('background-color', 'white')
                $('.backTo_Top').addClass('outro');
            }
        })
        //menu item
        $(".menu li").mouseenter(function () {
            let el = $(this).bind();
            if (!el.hasClass("active")) {
                el.addClass("active");
                el.siblings().removeClass("active");
            }
            let services = $('.services-menu');
            let portfolio = $('.portfolio-menu');
            let blog = $('.blog-menu');


            if (el.attr('data-list') === 'portfolio-menu' && el.hasClass('active')) {
                portfolio.addClass('show');
                services.removeClass('show');
                blog.removeClass('show');
            } else if (el.attr('data-list') === 'service-menu' && el.hasClass('active')) {
                services.addClass('show');
                portfolio.removeClass('show');
                blog.removeClass('show');
            } else if (el.attr('data-list') === 'blog-menu' && el.hasClass('active')) {
                blog.addClass('show');
                portfolio.removeClass('show');
                services.removeClass('show');
            } else {
                portfolio.removeClass('show');
                blog.removeClass('show');
                services.removeClass('show');
            }
        });

        // menu navigation
        var isLateralNavAnimating = false;

        //open/close lateral navigation
        $('.cd-nav-trigger').on('click', function (event) {
            // fade out top menu when cd nav active
            $('.top-menu').toggleClass('animate__fadeOutUp animate__delay-1s');
            $('body').toggleClass('overflow-hidden')
            $('html').toggleClass('overflow-hidden')
            $('.backTo_Top').toggleClass('d-none')
            $('.call').toggleClass('animate__fadeOutDown animate__fadeInUp');
            event.preventDefault();
            //stop if nav animation is running
            if (!isLateralNavAnimating) {
                if ($(this).parents('.csstransitions').length > 0) isLateralNavAnimating = true;

                $('body').toggleClass('navigation-is-open');
                $('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                    //animation is over
                    isLateralNavAnimating = false;
                });
            }
        });
        //    service list menu
        $(".service_archive_list li").each(function () {
            let datafrom = jsData.service_ID
            let el = $(this).bind();
            const datalist = this.dataset.list
            let services_show = $('.services' + -datalist);

            $(this).mouseenter(function (e) {
                if (!el.hasClass("active")) {
                    el.addClass("active");
                    el.siblings().removeClass("active");
                }
                datafrom.forEach(function (value, index) {
                    if (datalist == value && el.hasClass('active')) {
                        services_show.addClass("show");
                        services_show.siblings().removeClass("show");
                    }
                })
            })
        })
    }
);
document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    //toggle header on time
    const toggleScrollClass = function () {
        if (window.scrollY > 24) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }
    }

    toggleScrollClass();

    //check scroll to take actions on it
    window.addEventListener('scroll', function () {
        toggleScrollClass();
    });

    const swiper = new Swiper('.swiper1', {
        // Optional parameters
        loop: true,
        effect: 'fade',
        navigation: {
            nextEl: '.swiper-button-next-unique',
            prevEl: '.swiper-button-prev-unique',
        },
        autoplay: {
            delay: 2000,
        },
        disableOnInteraction: false,
    })
    const swiper2 = new Swiper('.swiper2', {
        // Optional parameters
        loop: true,
        slidesPerView: 1.1,
        spaceBetween: 0,
        navigation: {
            nextEl: '.swiper-button-next-unique1',
            prevEl: '.swiper-button-prev-unique1',
        },
        disableOnInteraction: true,
        // when window width is >= 640px
        breakpoints: {
            992: {
                slidesPerView: 3,
                spaceBetween: 5,
                centeredSlides: true
            }
        }
    });
    const swiper3 = new Swiper('.swiper3', {
        // Optional parameters
        speed: 2000,
        loop: true,
        centeredSlides: true,
        slidesPerView: 2,
        direction: 'vertical',
        spaceBetween: 15,
        autoplay: {
            delay: 1,
        },
        disableOnInteraction: true,
    });
    const swiper4 = new Swiper('.swiper4', {
        // Optional parameters
        speed: 2000,
        loop: true,
        centeredSlides: true,
        slidesPerView: 2,
        direction: 'horizontal',
        spaceBetween: 15,
        autoplay: {
            delay: 1,
        },
        disableOnInteraction: true,
    });
    const swiper5 = new Swiper('.swiper5', {
        // Optional parameters
        slidesPerView: 1,
        direction: 'vertical',
        centeredSlides: true,
        spaceBetween: 2,
        disableOnInteraction: true,
        navigation: {
            nextEl: '.swiper-button-next-unique5',
            prevEl: '.swiper-button-prev-unique5',
        },
        breakpoints: {
            992: {
                direction: 'horizontal',
                slidesPerView: 3,
                spaceBetween: 0,
            }
        }
    });
    const swiper6 = new Swiper('.swiper6', {
        // Optional parameters
        speed: 2000,
        slidesPerView: 1,
        direction: 'horizontal',
        spaceBetween: 0,
        autoplay: {
            delay: 15000,
        },
        disableOnInteraction: true,
    });
})

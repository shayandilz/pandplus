import { tsParticles } from "tsparticles/tsparticles.bundle.min";

require('./bootstrap');
require('./gsap');

import Splide from '@splidejs/splide';
import WOW from 'wow.js'

// SPLIDES
Splide.defaults = {
    direction: 'rtl',
    lazyLoad: true,
    sequential: true,
    pagination: true,
    rewind: true,
    speed: 1000,
    autoplay: false,
    interval: 5000,
    pauseOnHover: true,
    perMove: 1,
    focus: 0,
    clones: 0,
    updateOnMove: true,
}

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

document.addEventListener('DOMContentLoaded', function () {


    if (document.getElementById('playerModal')) {
        [].slice.call(document.querySelectorAll('.play-btn[data-bs-toggle="modal"]')).map(function (El) {
            El.addEventListener('click', function () {
                document.querySelector('#modalPlayerVideo img').alt = El.dataset.title;
                document.querySelector('#modalPlayerVideo img').src = El.dataset.url;
            })
        });

        document.getElementById('playerModal').addEventListener('hide.bs.modal', function () {
            document.querySelector('#modalPlayerVideo img').src = '';
        })
    }

    init_iconsax();


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

// SPLIDES


    if (document.getElementsByClassName('splide-customizable').length) {
        [].slice.call(document.getElementsByClassName('splide-customizable')).map(function (El) {
            let elementSlidePerPage = El.getAttribute('data-perpage');
            let elementSlideGap = El.getAttribute('data-gap');
            let elementSlideArrow = El.getAttribute('data-arrow');
            let elementSlidePagination = El.getAttribute('data-pagination');

            return new Splide(El, {
                type: 'slide',
                gap: elementSlideGap + 'px',
                perPage: elementSlidePerPage,
                arrows: elementSlideArrow == 'true' ? true : false,
                pagination: elementSlidePagination == 'true' ? true : false,
                breakpoints: {
                    576: {
                        perPage: 1,
                        type: 'slide',
                        focus: 'center',
                        trimSpace: true,
                    },
                    991: {
                        perPage: 2,
                    },
                    1200: {
                        perPage: elementSlidePerPage,
                    },
                }
            }).mount();
        });
    }
    document.querySelector('button.navbar-toggler').addEventListener('click', function (e) {
        e.currentTarget.classList.toggle('on');
        document.querySelector('section.menu__body').classList.toggle('show');

    });

    (async () => {
        await tsParticles.load('tsparticles', {
            background: {
                color: "transparent"
            },
            particles: {
                number: {
                    value: 60
                },
                color: {
                    value: "#ffffff"
                },
                shape: {
                    type: "circle"
                },
                opacity: {
                    value: { min: 0, max: 1 },
                    animation: {
                        count: .10,
                        enable: true,
                        speed: 60,
                        startValue: "min",
                        sync: false
                    }
                },
                size: {
                    value: { min: 0.5, max: 1.3 }
                },
                move: {
                    enable: true,
                    speed: {
                        min: 0,
                        max: .1
                    },
                    direction: "none",
                    straight: false,
                    outModes: {
                        default: "out"
                    }
                }
            }
        });
    })();

});


// Setup swing circle points

function init_iconsax() {
    document.querySelectorAll(".iconsax").forEach(iconsax => {
        var TuT = iconsax.getAttribute("icon-name").toLowerCase().trim();

        fetch("//glenthemes.github.io/iconsax/icons/" + TuT + ".svg")
            .then(n_n => {
                return n_n.text();
            })
            .then(n_n => {
                iconsax.innerHTML = n_n;
                if (iconsax.querySelectorAll("[http-equiv='Content-Security-Policy']").length) {
                    iconsax.innerHTML = "";
                }
            });
    });
}


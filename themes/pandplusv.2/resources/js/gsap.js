import gsap from "gsap"
import $ from "jquery";

import ScrollTrigger from 'gsap/ScrollTrigger'
import DrawSVGPlugin from "gsap/DrawSVGPlugin";
import MorphSVGPlugin from "gsap/MorphSVGPlugin";
import TextPlugin from "gsap/TextPlugin";


gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, MorphSVGPlugin, TextPlugin)
MorphSVGPlugin.defaultType = "linear";


document.addEventListener("DOMContentLoaded", function () {
    function animateFrom(elem, direction) {
        direction = direction || 1;
        var x = 0,
            y = direction * 100;
        if (elem.classList.contains("gs_reveal_fromLeft")) {
            x = -100;
            y = 0;
        } else if (elem.classList.contains("gs_reveal_fromRight")) {
            x = 100;
            y = 0;
        } else if (elem.classList.contains("gs_reveal_fromTop")) {
            x = 0;
            y = 100;
        } else if (elem.classList.contains("gs_reveal_fromBottom")) {
            x = 0;
            y = -100;
        }
        elem.style.transform = "translate(" + x + "px, " + y + "px)";
        elem.style.opacity = "0";
        gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
            duration: 1.25,
            delay: (elem.dataset.animate ? elem.dataset.animate / 100 : 0),
            x: 0,
            y: 0,
            autoAlpha: 1,
            ease: "expo",
            overwrite: "auto"
        });
    }

    function hide(elem) {
        gsap.set(elem, {autoAlpha: 0});
    }

    gsap.utils.toArray(".gs_reveal").forEach(function (elem) {
        hide(elem); // assure that the element is hidden when scrolled into view
        ScrollTrigger.create({
            trigger: elem,
            markers: false,
            onEnter: function () {
                animateFrom(elem)
            },
            onEnterBack: function () {
                animateFrom(elem, -1)
            },
            onLeave: function () {
                hide(elem)
            } // assure that the element is hidden when scrolled into view
        });
    });


    //line draw for main page
    MorphSVGPlugin.convertToPath("circle, rect, ellipse, line, polygon, polyline");
    let lineMainSVG = gsap.timeline({
        scrollTrigger: {
            markers: false,
            trigger: ".svg-section",
            start: "top center",
            // endTrigger: '.end-section',
            end: "8400px center",
            scrub: 1,
        },
        ease: "power1.in"
    })
    lineMainSVG.fromTo('#star-path', 1, {drawSVG: "100% 100%"}, {drawSVG: "0% 100%"})
    //line draw for main page
    gsap.utils.toArray(".svg-lines").forEach(section => {
        let lineMin = section.querySelector(".line-min");
        if (lineMin) {
            gsap.from(lineMin, {
                drawSVG: "0%",
                scrollTrigger: {
                    trigger: section,
                    start: "top center",
                    end: "150px center",
                    scrub: 2,
                    markers: false
                },
                ease: "power1.in"
            });
        }
    });
});

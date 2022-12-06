import gsap from "gsap"
import $ from "jquery";

import ScrollTrigger from 'gsap/ScrollTrigger'
import DrawSVGPlugin from "gsap/DrawSVGPlugin";
import MorphSVGPlugin from "gsap/MorphSVGPlugin";
import TextPlugin from "gsap/TextPlugin";


gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, MorphSVGPlugin, TextPlugin)
MorphSVGPlugin.defaultType = "linear";


function animateFrom(elem, direction) {
    //line draw for main page
    let lineSVG = gsap.timeline({
        scrollTrigger: {
            trigger: ".line-min",
            start: "top center",
            end: "bottom center",
            scrub: 2,
        },
        ease: "power1.in"
    })
    lineSVG.fromTo('#line_min', 1, {drawSVG: "0%"}, {drawSVG: "100%"})
    let section1 = gsap.timeline({
        scrollTrigger: {
            trigger: "#line_min",
            start: "top center",
            end: "bottom bottom",
            scrub: 3
        },
    })
    direction = direction || 1;
    var x = 0,
        y = direction * 100;
    if (elem.classList.contains("gs_reveal_fromLeft")) {
        x = -100;
        y = 0;
    } else if (elem.classList.contains("gs_reveal_fromRight")) {
        x = 100;
        y = 0;
    } else if(elem.classList.contains("gs_reveal_fromTop")){
        x = 0;
        y = 100;
    }
    elem.style.transform = "translate(" + x + "px, " + y + "px)";
    elem.style.opacity = "0";
    gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
        duration: 1.25,
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

document.addEventListener("DOMContentLoaded", function () {
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
});

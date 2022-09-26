import gsap from "gsap"
import $ from "jquery";

import ScrollTrigger from 'gsap/ScrollTrigger'
import DrawSVGPlugin from "gsap/DrawSVGPlugin";
import MorphSVGPlugin from "gsap/MorphSVGPlugin";
import TextPlugin from "gsap/TextPlugin";


gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, MorphSVGPlugin, TextPlugin)
MorphSVGPlugin.defaultType = "linear";


$(function () {
    //front-page
    let home = gsap.utils.toArray('#text,' +
        '.svg-section,' +
        '#star-path,' +
        '#Strategy,' +
        '#Website,' +
        '#Graphic,' +
        '#Content,' +
        '#Social,' +
        '.hero')
    if (home.length) {
        // text typewriter
        let tween = gsap.to("#text", {
            text: {value: "آژانس دیجیتال مارکتینگ" + "<br>" + "پندپلاس"},
            duration: 5,
            delay: 1,
            ease: "none"
        })
        //line draw for main page
        let lineSVG = gsap.timeline({
            scrollTrigger: {
                trigger: ".svg-section",
                start: "top center",
                end: "bottom center",
                scrub: 2,
            },
            ease: "power1.in"
        })
        lineSVG.fromTo('#star-path', 1, {drawSVG: "0%"}, {drawSVG: "100%"})
        let section1 = gsap.timeline({
            scrollTrigger: {
                trigger: ".section-1",
                start: "top center",
                end: "bottom bottom",
                scrub: 3
            },
        })
        ScrollTrigger.matchMedia({
            "(min-width: 1080px)": function () {
                section1.fromTo("#Strategy", 1, {y: "100", opacity: "0"}, {y: "0", opacity: "1"})
                section1.fromTo("#Website", 1, {y: "100", opacity: "0"}, {y: "0", opacity: "1"})
                section1.fromTo("#Graphic", 1, {y: "100", opacity: "0"}, {y: "50", opacity: "1"})
                section1.fromTo("#Content", 1, {y: "100", opacity: "0"}, {y: "0", opacity: "1"})
                section1.fromTo("#Social", 1, {y: "100", opacity: "0"}, {y: "-50", x: "-80", opacity: "1"})

                //    office
                let speed = 1
                let heroSvg = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".hero",
                        start: "top 30px",
                        end: "bottom center",
                        scrub: 3,
                        snap: true
                    }
                })
                heroSvg.to('.mouse-down svg', {y: -140 * speed, opacity: -20})
                heroSvg.fromTo('#text', {opacity: 1}, {opacity: 0})
                heroSvg.fromTo('#hero-office', {x: 0}, {x: 290})
                heroSvg.fromTo('#hero-office > g:not(#office-1)', {opacity: 1}, {opacity: 0})
                heroSvg.fromTo('#hero-office', {scale: 1}, {scale: 1.5})
                heroSvg.fromTo('#first_section .section-1', {opacity: -30}, {opacity: 1})
                heroSvg.fromTo('#hero-office', {opacity: 1}, {opacity: 0})
            }
        })
        ScrollTrigger.matchMedia({
            "(max-width: 1080px)": function () {
                section1.fromTo("#Strategy", 1, {y: "100", opacity: "0"}, {y: "-190", scale: 1.3, opacity: "0.5"})
                section1.fromTo("#Website", 1, {y: "100", x: "100", opacity: "0"}, {
                    y: "40",
                    scale: 1.3,
                    x: "60",
                    opacity: "0.5"
                })
                section1.fromTo("#Graphic", 1, {y: "100", opacity: "0"}, {y: "50", scale: 1.3, opacity: "0.5"})
                section1.fromTo("#Content", 1, {y: "100", x: "100", opacity: "0"}, {
                    y: "280",
                    scale: 1.3,
                    x: "100",
                    opacity: "0.5"
                })
                section1.fromTo("#Social", 1, {y: "100", opacity: "0"}, {
                    y: "300",
                    x: "90",
                    scale: 1.3,
                    opacity: "0.5"
                })
            }
        })

    }

    // characters
    let characters = gsap.utils.toArray('.bounce-gsap,' +
        '.rotate-gsap,' +
        '.rotate-move,' +
        '.glowing,' +
        '.glow-numbers,' +
        '.rotate-eyes,' +
        '.droplets,' +
        '.phone-num,' +
        '.mouth-down');

    if (characters.length) {
        //bouncing star head
        gsap.to(".bounce-gsap", {duration: 1.0, y: 20, ease: "circ.in", repeat: -1, yoyo: true})
        //rotating small objects
        gsap.to('.rotate-gsap path', {
            stagger: {
                each: 0.2,
                from: "edges"
            }, duration: 4, y: 20, x: 10, ease: "linear", repeat: -1, yoyo: true
        })
        //rotate eyes
        gsap.fromTo('.rotate-move g',
            {
                stagger: {each: 0.2, from: "center"},
                duration: 1,
                scale: "0",
                rotate: "360",
                repeat: -1,
                yoyo: true,
                transformOrigin: "center center"
            },
            {
                stagger: {each: 0.2, from: "center"},
                duration: 1,
                scale: 1,
                rotate: "0",
                repeat: -1,
                yoyo: true,
                transformOrigin: "center center"
            })
        //glowing plus
        gsap.fromTo('.glowing',
            {duration: 2, fill: "#EABCFF", repeat: -1},
            {fill: 'transparent', repeat: -1, duration: 2})
        //glow numbers
        gsap.fromTo('.glow-numbers path',
            {stagger: 0.1, duration: 0.1, fill: "#EABCFF", repeat: -1, yoyo: true},
            {stagger: 0.1, duration: 0.1, fill: 'transparent', repeat: -1, yoyo: true})
        //rotate eyes
        gsap.fromTo('.rotate-eyes path',
            {
                stagger: {each: 0.8, from: "start"},
                duration: 10,
                x: "-4",
                y: "-2",
                repeat: -1,
                yoyo: true,
                transformOrigin: "center center"
            },
            {
                stagger: {each: 0.11, from: "edges"},
                duration: 1,
                x: "0",
                y: "-0",
                repeat: -1,
                yoyo: true,
                transformOrigin: "center center"
            })
        //droplets
        gsap.fromTo('.droplets path', {
            y: 0,
            x: 0,
            opacity: 0,
            duration: 4,
            repeat: -1,
            ease: "sine",
            stagger: {each: 0.3, from: "center"}
        }, {
            x: -4,
            y: 18,
            opacity: 1,
            duration: 1,
            repeat: -1,
            ease: "sine",
            stagger: {each: 0.1, from: "center"}
        })
        //phone numbers
        gsap.fromTo('.phone-num rect', {
            stagger: {each: 0.1, from: "random"},
            duration: 0.1,
            fill: "#EABCFF",
            repeat: -1,
            yoyo: true
        }, {stagger: {each: 0.1, from: "random"}, duration: 0.1, fill: 'transparent', repeat: -1, yoyo: true})
        //mouth animation
        gsap.fromTo('.mouth-down', {duration: 1, y: 2, repeat: -1, yoyo: true}, {
            duration: 1,
            y: 5,
            repeat: -1,
            yoyo: true
        })
    }

    //sticky sidebar
    let stickySide = gsap.utils.toArray('.blog-sticky')
    if (stickySide.length) {
        ScrollTrigger.matchMedia({
            "(min-width: 1080px)": function () {
                let stickySidebar = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".blog-sticky",
                        start: "top top",
                        end: "bottom center",
                        pin: ".sticky-section"
                    }
                })
            }
        })
    }

    let website = gsap.utils.toArray('#website1,' + '#website2');
    if (website.length) {

        MorphSVGPlugin.convertToPath("circle, rect, ellipse, line, polygon, polyline");

        let hover = document.querySelector(".service-hover");
        // globe
        let globePlay = []
        for (let i = 2; i < 10; i++) {
            globePlay.push(gsap.to(`#globe2 path:nth-child(${i})`,
                {
                    duration: 1,
                    morphSVG: {
                        shape: `#globe1 path:nth-child(${i})`,
                        type: "linear",
                        origin: "80% 60%"
                    }
                }
            ))
        }
        //globe lines
        let globeLine = [];
        for (let i = 1; i < 26; i++) {
            globeLine.push(gsap.to(`#line2 path:nth-child(${i})`,
                {
                    duration: 1,
                    morphSVG: {
                        shape: `#line1 path:nth-child(${i})`,
                        type: "linear",
                        origin: "80% 60%"
                    }
                }
            ))
        }
        gsap.to("#coffee2", {morphSVG: {shape: `#coffee1`, type: "linear", origin: "10% 60%"},yoyo:true, duration: 1, repeat: -1})

        hover.addEventListener("mouseenter", function () {

            globePlay.map(function (item) {
                item.reverse();
            })
            globeLine.map(function (item) {
                item.reverse();
            })
            gsap.fromTo('.glow-numbers1 path', {stagger: 0.1, duration: 0.1, fill: "transaprent"},
                {stagger: 0.1, duration: 0.1, fill: '#ffffff'})
            gsap.to("#website_text", {duration:"6", text:{
                    value: "www.pandplus.com"
                }})
        });

        hover.addEventListener("mouseleave", function () {
            globePlay.map(function (item) {
                // console.log(item)
                item.play();
            })
            globeLine.map(function (item) {
                // console.log(item)
                item.play();
            })
            gsap.fromTo('.glow-numbers1 path', {stagger: 0.1, duration: 0.1, fill: "#ffffff"},
                {stagger: 0.1, duration: 0.1, fill: 'transparent'})
            gsap.to("#website_text", {duration:"3", text:{
                    value: " "
                }})
        });
    }
});

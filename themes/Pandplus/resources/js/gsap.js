import gsap from "gsap"
import $ from "jquery";

import ScrollTrigger from 'gsap/ScrollTrigger'
import DrawSVGPlugin from "gsap/DrawSVGPlugin";
import MorphSVGPlugin from "gsap/MorphSVGPlugin";



gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, MorphSVGPlugin)
MorphSVGPlugin.defaultType = "linear";


$(function () {


    if ($('body').is('.single-service')) {
        let circle = document.querySelector("#circle")

        let dur = 8.5;

        let serviceSVG = gsap.timeline({
            scrollTrigger: {
                trigger: ".content-svg",
                markers: true,
                scrub: true,
                start: "top center",
                end: "bottom bottom",
                id: "points"
            }
        })
        serviceSVG.to(circle, dur, {morphSVG: ".morph-1"})
        serviceSVG.to(circle, dur, {morphSVG: ".morph-2"})
        serviceSVG.to(circle, dur, {morphSVG: ".morph-3"})
        serviceSVG.to(circle, dur, {morphSVG: ".morph-4"})
        serviceSVG.to(circle, dur, {morphSVG: "#circle"})


    }
    if ($('body').is('.single-services')){
        gsap.to(".bounce-gsap", {duration: 1.0, y: 20, ease: "circ.in", repeat: -1, yoyo: true})
        //glow numbers
        gsap.fromTo('.glow-numbers path',
            {stagger: 0.1, duration: 0.1, stroke: "#EABCFF", repeat: -1, yoyo: true},
            {stagger: 0.1, duration: 0.1, stroke: 'transparent', repeat: -1, yoyo: true})
        gsap.fromTo('.glowing',
            {duration: 2, fill: "#EABCFF", repeat: -1},
            {fill: 'transparent', repeat: -1, duration: 2})
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

    }
    if ($('body').is('.home') ) {
        let speed = 1
        let heroSvg = gsap.timeline({
            scrollTrigger: {
                trigger: ".hero",
                start: "top top",
                end: "bottom 10px",
                scrub: 3
            }
        })
        heroSvg.to('.mouse-down svg', {y: -140 * speed, opacity: -20})
        heroSvg.fromTo(".bg__metah .svg", {scale: 1, opacity: 1, duration: 1}, {
            scale: 60 * speed,
            opacity: -17,
            ease: "power1.in"
        }, 0)


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
        gsap.fromTo('.mouth-down', {duration: 1, y: 2, repeat: -1, yoyo: true}, {duration: 1,y: 5, repeat: -1, yoyo: true})
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
            }
        }),
            ScrollTrigger.matchMedia({
            "(max-width: 1080px)": function () {
                section1.fromTo("#Strategy", 1, {y: "100", opacity: "0"}, {y: "-190",scale:1.3, opacity: "0.5"})
                section1.fromTo("#Website", 1, {y: "100",x:"100", opacity: "0"}, {y: "40",scale:1.3,x:"60", opacity: "0.5"})
                section1.fromTo("#Graphic", 1, {y: "100", opacity: "0"}, {y: "50",scale:1.3, opacity: "0.5"})
                section1.fromTo("#Content", 1, {y: "100",x:"100", opacity: "0"}, {y: "280",scale:1.3,x:"100", opacity: "0.5"})
                section1.fromTo("#Social", 1, {y: "100", opacity: "0"}, {y: "300",x:"90",scale:1.3, opacity: "0.5"})
            }
        })

    }


    ScrollTrigger.matchMedia({
        "(min-width: 1080px)": function () {
            if ($('body').is('.single-post')) {
                let stickySidebar = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".blog-sticky",
                        start: "top top",
                        end: "bottom center",
                        pin: ".sticky-section"
                    }
                })
            }
            if ($('body').is('.home')){
                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".social-cards",
                        start: "-20px center",
                        end: "90px center",
                        scrub: 1,
                    }
                })
                tl.fromTo(".social-cards > li:first-child",
                    {translateX: -170, translateY: 10, rotate: 4, scale: 0.85},
                    {translateX: 0, translateY: 0, rotate: 0, scale: 1}, 0)
                tl.fromTo(".social-cards > li:last-child",
                    {translateX: 170, translateY: 10, rotate: -4, scale: 0.85},
                    {translateX: 0, translateY: 0, rotate: 0, scale: 1}, 0)
            }

        }
    })

});

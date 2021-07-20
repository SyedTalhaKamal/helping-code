gsap.registerPlugin(ScrollTrigger);
// gsap.to(".ball", {scrollTrigger: ".ball",x:700, rotation:360, duration:5,yoyo:true,repeat:-1});
gsap.to(".ball", {scrollTrigger: {
    trigger: ".ball",
    start: "top bottom",
    markers: "true",
    toggleActions: "restart pause resume pause"
},x:700, rotation:360, duration:5});

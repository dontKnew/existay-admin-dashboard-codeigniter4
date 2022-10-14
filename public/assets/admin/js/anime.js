window.onload = function(){
    document.getElementById("showDOM").style.cssText = "display:block";
}
// anime({
//     targets: '.animePage',
//     translateX: [100, 0],
//     duration: 2000,
//     opacity: [0, 1],
//     delay: (el, i) => {
//         return 300 + 100 * i;
//     },
// });


// anime({
//     targets: '.animePage',
//     duration: 1200,
//     opacity: [0, 1],
//     delay: 700
// })
//
// anime({
//     targets: '.animePage',
//     translateY: [100, 0],
//     duration: 1200,
//     delay: (el, i) => {
//         return 1000 + 100 * i;
//     },
// })
//
// anime({
//     targets: '.animePage',
//     easing: 'easeOutExpo',
//     scale: [2, 1],
//     opacity: [0, 1],
//     delay: 1200
// })
//
// anime({
//     targets: '.animePage',
//     easing: 'easeOutExpo',
//     scale: [2, 1],
//     opacity: [0, 1],
//     delay: 1300
// })
//
// anime({
//     targets: '.animePage',
//     easing: 'easeOutExpo',
//     scale: [2, 1],
//     opacity: [0, 1],
//     delay: 1400
// })
//
anime({
    targets: '.animePage',
    translateX: [300, 0],
    easing: 'easeOutExpo',
    opacity: [0, 1],
    delay: (el, i) => 700 + 300 * i
})

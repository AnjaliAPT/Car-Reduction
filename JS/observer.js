$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() >50) {
            $('nav').addClass('nav-scrolled');
        } else {
            $('nav').removeClass('nav-scrolled');
        }
    });
});

// #075BA8, #063557


// const nav = document.querySelector("nav");
// const sect = document.querySelector(".section-b");
// const secta = document.querySelector(".section-a");

// const sectionOneOptions = {
//     rootMargin: "-5000px 0px 0px 0px"
// };

// const sectionTwoOptions = {
//     rootMargin: "0px 0px 0px 0px"
// };

// const sectionOneObserver = new IntersectionObserver(function (
//         entries,
//         sectionOneObserver
//     ) {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 nav.classList.add("nav-scrolled");
//             } else {
//                 nav.classList.remove("nav-scrolled");
//             }
//         });
//     },
//     sectionOneOptions);

// sectionOneObserver.observe(sect);

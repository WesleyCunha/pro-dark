document.addEventListener("DOMContentLoaded", () => {
    //gsap 3.0
    gsap.from(".h1-title", {
        opacity: 0,
        duration: 1,
        filter: "blur(10px)",
        stagger: 0.1,
        ease: "power4.out",
        repeat: -1,
        repeatDelay: 5
    }, '0');

    //timeline 1
    let tl1 = gsap.timeline();
    tl1.from(".header-desktop", {
            opacity: 0,
            y: 200,
            ease: "power4.out",
        })
        .from(".hero-content", {
            opacity: 0,
            y: 200,
            ease: "power4.out",
        })
        .from(".hero-img", {
            opacity: 0,
            y: 200,
            ease: "power4.out",
        })
        .from(".pais", {
            opacity: 0,
            x: 200,
            ease: "power4.out",
            duration: 2
        })


});

//swiper
const swiper = new Swiper('.swiper', {
    slidesPerView: 'auto',
    grabCursor: true,
    spaceBetween: 40,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    loop: true,
});
//menu mobile
let menu = document.querySelector(".menu-hamburgue");
let menuMobile = document.querySelector(".menu-mobile");


menu.addEventListener("click", function() {
    menu.classList.toggle("menu-hamburgue-active");
    menuMobile.classList.toggle("menu-mobile-active");
    window.scroll(0, 0);

});

//OTHER ROOM
var swiper1 = new Swiper(".swiper-room", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
    grabCursor: "true",
   
});

document.addEventListener("DOMContentLoaded", function () {
    var swiper1 = new Swiper(".swiper4", {
        slidesPerView: 1,
        // spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-next4",
            prevEl: ".button-prev4",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        grabCursor: "true",
        breakpoints: {
            340: {
                slidesPerView: 1,
                spaceBetween: 5,
                centerSlide: true,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 5,
                centerSlide: true,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10,
                centerSlide: true,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
                centerSlide: true,
            },
            1280: {
                slidesPerView: 4,
                spaceBetween: 10,
                centerSlide: true,
            },
            1539: {
                slidesPerView: 4,
                spaceBetween: 15,
                centerSlide: true,
            },
            1600: {
                slidesPerView: 4,
                spaceBetween: 15,
                centerSlide: true,
            },
        },
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var swiper1 = new Swiper(".swiper-5", {
        slidesPerView: 1,
        // spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".button-next5",
            prevEl: ".button-prev5",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        grabCursor: "true",
        breakpoints: {
            340: {
                slidesPerView: 1,
                spaceBetween: 15,
                centerSlide: true,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
                centerSlide: true,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10,
                centerSlide: true,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 10,
                centerSlide: true,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 10,
                centerSlide: true,
            },
            1539: {
                slidesPerView: 3,
                spaceBetween: 15,
                centerSlide: true,
            },
            1600: {
                slidesPerView: 3,
                spaceBetween: 15,
                centerSlide: true,
            },
        },
    });
});
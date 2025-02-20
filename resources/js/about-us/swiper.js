//room
var swiper = new Swiper(".swiper-about-us", {
    slidesPerView: 1,
    // spaceBetween: 10,
    loop: true,
    grabCursor: "true",
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            // spaceBetween: 10,
            centerSlide: true,
        },
        640: {
            slidesPerView: 2,
            // spaceBetween: 5,
            centerSlide: true,
        },
        768: {
            slidesPerView: 2,
            // spaceBetween: 10,
            centerSlide: true,
        },
        820: {
            slidesPerView: 2,
            // spaceBetween: 10,
            centerSlide: true,
        },
        1024: {
            slidesPerView: 3,
            // spaceBetween: 10,
            centerSlide: true,
        },
        1280: {
            slidesPerView: 3,
            // spaceBetween: 20,
            centerSlide: true,
        },
        1539: {
            slidesPerView: 3,
            spaceBetween: 20,
            centerSlide: true,
        },
        1600: {
            slidesPerView: 3,
            // spaceBetween: 20,
            centerSlide: true,
        },
    },
});


//Popup video
document.addEventListener("DOMContentLoaded", function () {
    const videoOpen = document.getElementById("video-open"); // ปุ่มเปิดวิดีโอ
    const videoModal = document.getElementById("video-modal"); // Popup
    const videoClose = document.getElementById("video-close"); // ปุ่มปิด
    const videoFrame = document.getElementById("video-frame"); // iframe วิดีโอ


    const videoID = "hmfBTUFHN_g"; 
    const videoURL = `https://www.youtube.com/embed/${videoID}?autoplay=1&rel=0&modestbranding=1&playsinline=1`;

    // เปิด Popup และกำหนด URL ให้ iframe
    videoOpen.addEventListener("click", function () {
        videoFrame.src = videoURL; // กำหนด src ของ iframe
        videoModal.classList.remove("hidden");
    });

    // ปิด Popup และหยุดวิดีโอ
    videoClose.addEventListener("click", function () {
        videoModal.classList.add("hidden");
        videoFrame.src = ""; // รีเซ็ต src เพื่อหยุดวิดีโอ
    });

    // ปิด popup เมื่อคลิกนอกกรอบ
    videoModal.addEventListener("click", function (event) {
        if (event.target === videoModal) {
            videoModal.classList.add("hidden");
            videoFrame.src = ""; // รีเซ็ต src เพื่อหยุดวิดีโอ
        }
    });
});

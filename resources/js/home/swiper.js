document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        pagination: "true",
        pagination: {
            el: ".swiper-pagination1",
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 1, // แสดงทีละ 1 slide
        spaceBetween: 0, // ไม่มีช่องว่างระหว่าง slide
        // mousewheel: true, // ให้เลื่อนด้วยเมาส์
    });
});

//room
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".swiper2", {
        slidesPerView: 1,
        //   spaceBetween: 20,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".swiper3", {
        slidesPerView: 1,
          spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".button-next3",
            prevEl: ".button-prev3",
        },
    });
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
        grabCursor: "true",
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
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

console.log("preview_img");

// preview_img
document.addEventListener("DOMContentLoaded", () => {
    const popup = document.getElementById("image-popup");
    const closePopup = document.getElementById("popup-close");
    const imageContainers = document.querySelectorAll(".image-container");

    // Swiper instance
    let swiper;

    // เปิด Popup เมื่อคลิกรูป
    imageContainers.forEach((container, index) => {
        container.addEventListener("click", () => {
            popup.classList.remove("hidden");

            // เริ่ม Swiper หรืออัปเดตไปยัง slide ที่เลือก
            if (!swiper) {
                swiper = new Swiper(".mySwiper_img", {
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            }
            swiper.slideTo(index, 0); // เลื่อนไปยังรูปที่เลือก
        });
    });

    // ปิด Popup
    closePopup.addEventListener("click", () => {
        popup.classList.add("hidden");
    });

    // ปิด Popup เมื่อคลิกด้านนอก
    popup.addEventListener("click", (e) => {
        if (e.target === popup) {
            popup.classList.add("hidden");
        }
    });
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

console.log("preview_img_contact");

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
                    loop:true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
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
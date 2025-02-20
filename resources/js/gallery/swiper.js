console.log("preview_img_gallery");

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



//see more
document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".image-gallery .image-container");
    const toggleButton = document.getElementById("toggle-button").parentElement;
    const button = toggleButton.querySelector("button");
    let visibleRows = 3; 
    const imagesPerRow = 4;

    // Hide the button if there are less than or equal to 3 rows of images
    if (images.length <= visibleRows * imagesPerRow) {
        toggleButton.classList.add("hidden");
        images.forEach((image) => {
            image.classList.remove("hidden"); // Show all images
        });
        return;
    } else {
        toggleButton.classList.remove("hidden"); // Show button if there are more than 3 rows
    }

    // Function to update the gallery display
    const updateGallery = () => {
        images.forEach((image, index) => {
            image.classList.toggle("hidden", index >= visibleRows * imagesPerRow); // Hide extra images
        });

        // Update the button text based on the visibility of images
        if (visibleRows * imagesPerRow >= images.length) {
            button.textContent = "See less"; 
        } else {
            button.textContent = "See all";  
        }
    };

   
    button.addEventListener("click", () => {
        if (visibleRows * imagesPerRow >= images.length) {
            visibleRows = 3; 
        } else {
            visibleRows += 4; 
        }
        updateGallery();
    });
    updateGallery();
});

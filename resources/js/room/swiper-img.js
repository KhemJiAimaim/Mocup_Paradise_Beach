// เลือก img main
const imgMain = document.getElementById('img-main');
// เลือก img more ทั้งหมด
const imgMores = document.querySelectorAll('.img-more');
// สร้าง Array จาก img more
const imgSources = Array.from(imgMores).map(img => img.src);
// ตัวแปรสำหรับเก็บ index ของรูปปัจจุบัน
let currentIndex = 0;

// เลือกปุ่ม Navigation
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');

// ฟังก์ชันแสดงรูปตาม index
const showImage = index => {
    imgMain.src = imgSources[index];
};

// Event สำหรับปุ่ม Previous
prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + imgSources.length) % imgSources.length;
    showImage(currentIndex);
});

// Event สำหรับปุ่ม Next
nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % imgSources.length;
    showImage(currentIndex);
});

// Event สำหรับการคลิกที่ img more
imgMores.forEach((imgMore, index) => {
    imgMore.addEventListener('click', () => {
        currentIndex = index;
        showImage(currentIndex);
    });
});





//room
console.log("roomeerwe");

//room
var swiper = new Swiper(".swiper-room", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    grabCursor: "true",
    navigation: {
        nextEl: ".room-next-btn", 
        prevEl: ".room-prev-btn",
    },
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
            centerSlide: true,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 5,
            centerSlide: true,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
            centerSlide: true,
        },
        820: {
            slidesPerView: 2,
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
            spaceBetween: 20,
            centerSlide: true,
        },
        1539: {
            slidesPerView: 3,
            spaceBetween: 20,
            centerSlide: true,
        },
        1600: {
            slidesPerView: 3,
            spaceBetween: 20,
            centerSlide: true,
        },
    },
});


// document.addEventListener("DOMContentLoaded", function () {
//     var swiperWrapper = document.querySelector(".swiper-room .swiper-wrapper");
//     var slides = swiperWrapper ? swiperWrapper.querySelectorAll(".swiper-slide").length : 0;

//     // ซ่อนปุ่ม navigation ถ้า slides น้อยกว่า 3
//     if (slides <= 3) {
//         document.querySelector(".room-next-btn").style.display = "none";
//         document.querySelector(".room-prev-btn").style.display = "none";
//     }

//     var swiper = new Swiper(".swiper-room", {
//         slidesPerView: 1,
//         spaceBetween: 10,
//         loop: slides > 3, // ปิด loop ถ้า slide น้อยกว่า 3
//         grabCursor: true,
//         navigation: slides >= 3 ? {
//             nextEl: ".room-next-btn",
//             prevEl: ".room-prev-btn",
//         } : false, // ปิด navigation ถ้า slide น้อยกว่า 3
//         autoplay: {
//             delay: 6000,
//             disableOnInteraction: false,
//         },
//         breakpoints: {
//             480: { slidesPerView: 1, spaceBetween: 10 },
//             640: { slidesPerView: 2, spaceBetween: 5 },
//             768: { slidesPerView: 2, spaceBetween: 10 },
//             820: { slidesPerView: 2, spaceBetween: 10 },
//             1024: { slidesPerView: 3, spaceBetween: 10 },
//             1280: { slidesPerView: 3, spaceBetween: 20 },
//             1539: { slidesPerView: 3, spaceBetween: 20 },
//             1600: { slidesPerView: 3, spaceBetween: 20 },
//         },
//     });
// });

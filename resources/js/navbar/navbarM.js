console.log("okkkkkk");

document.addEventListener("DOMContentLoaded", function () {
    const btns = document.querySelectorAll(".mobile-menu-button");  // เลือกปุ่มทั้งหมด
    const menu = document.querySelector(".m-nav"); // เลือกเมนู
    const closeButton = document.getElementById("close-cate"); // เลือกปุ่มปิดเมนู

    // เปิด/ปิดเมนูเมื่อคลิกที่ปุ่ม
    btns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.currentTarget.classList.toggle("change"); // เปลี่ยนคลาสสำหรับปุ่ม
            menu.classList.toggle("active"); // เปิด/ปิดเมนูโดยการเพิ่ม/ลบคลาส active
        });
    });

    // ปิดเมนูเมื่อคลิกที่ปุ่มปิด (close-cate)
    closeButton.addEventListener("click", function () {
        menu.classList.remove("active"); // ลบคลาส active เพื่อปิดเมนู
    });

    // ปิดเมนูเมื่อคลิกที่พื้นหลัง
    menu.addEventListener("click", function (event) {
        if (event.target === menu) { // ตรวจสอบว่าคลิกที่พื้นหลังหรือไม่
            menu.classList.remove("active"); // ปิดเมนู
        }
    });
});




document.addEventListener("DOMContentLoaded", function () {
    const submenu = document.getElementById("submenu-m");
    const openSubmenu = document.getElementById("open-submenu-m");
    const arrowUp = document.getElementById("arrow-up-m");

    openSubmenu.addEventListener("click", function () {
        submenu.classList.toggle("hidden");
        submenu.classList.toggle("scale-100");
        submenu.classList.toggle("scale-95");
        submenu.classList.toggle("duration-300" );

        // Rotate arrow icon
        arrowUp.classList.toggle("rotate-180");
    });
});
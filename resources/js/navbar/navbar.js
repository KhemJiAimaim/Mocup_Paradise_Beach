
// ปุ่มเพื่อเปิด/ปิดเมนูภาษา
document.addEventListener("DOMContentLoaded", function () {
    const langButton = document.getElementById("open-submenu"); // ปุ่มเปิด/ปิดเมนู
    const langMenu = document.getElementById("submenu"); // เมนูภาษาที่จะเปิด/ปิด
    const arrowIcon = document.getElementById("arrow-up"); // ไอคอนลูกศร

    langButton.addEventListener("click", function (event) {
        event.stopPropagation();
        langMenu.classList.toggle("hidden"); // ซ่อน/แสดงเมนู
        langMenu.classList.toggle("scale-100"); // ขยายเมนู
        arrowIcon.classList.toggle("rotate-180"); // หมุนลูกศร
    });

    document.addEventListener("click", function (event) {
        if (!langButton.contains(event.target) && !langMenu.contains(event.target)) {
            langMenu.classList.add("hidden");
            langMenu.classList.remove("scale-100");
            arrowIcon.classList.remove("rotate-180");
        }
    });
});


const navbar = document.getElementById("navbar");
const navbar_menu = document.getElementById("navbar-menu");

let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
    if (window.scrollY > 120) {
        // เมื่อเลื่อนลง Navbar เลื่อนขึ้นและจางหาย
        navbar.style.opacity = "0";
        navbar.style.pointerEvents = "none";
        
        navbar_menu.classList.add("fixed", "top-0" );
        navbar_menu.classList.remove("top-32");
    } else {
        // เมื่อเลื่อนขึ้น Navbar ค่อยๆ แสดงออกมา
        navbar.style.opacity = "1";
        navbar.style.pointerEvents = "auto";

        navbar_menu.classList.remove("fixed", "top-0");
        navbar_menu.classList.add("top-32");
    }

    lastScrollY = window.scrollY;
});
document.addEventListener("DOMContentLoaded", function() {
    function setupDropdown(toggleId, menuId, arrowId) {
        const toggleElement = document.getElementById(toggleId);
        const menuElement = document.getElementById(menuId);
        const arrowElement = document.getElementById(arrowId);

        toggleElement.addEventListener("click", function(event) {
            event.stopPropagation(); // ป้องกันการกระทบกับ event อื่น ๆ

            // ปิดเมนูอื่น ๆ ก่อนเปิดอันใหม่
            document.querySelectorAll(".dropdown-menu").forEach(menu => {
                if (menu !== menuElement) {
                    menu.classList.add("hidden");
                    menu.classList.remove("opacity-100");
                }
            });

            document.querySelectorAll(".arrow-icon").forEach(icon => {
                if (icon !== arrowElement) {
                    icon.style.transform = "rotate(0deg)";
                }
            });

            // Toggle เมนูที่ถูกคลิก
            if (menuElement.classList.contains("hidden")) {
                menuElement.classList.remove("hidden");
                menuElement.classList.add("opacity-100");
                arrowElement.style.transform = "rotate(180deg)";
            } else {
                menuElement.classList.add("hidden");
                menuElement.classList.remove("opacity-100");
                arrowElement.style.transform = "rotate(0deg)";
            }
        });
    }

    setupDropdown("toggle-rooms", "menu-rooms", "arrow-icon-rooms");
    setupDropdown("toggle-guests", "menu-guests", "arrow-icon-guests");

    // ปิดเมนูทั้งหมดเมื่อคลิกที่อื่น
    document.addEventListener("click", function() {
        document.querySelectorAll(".dropdown-menu").forEach(menu => {
            menu.classList.add("hidden");
            menu.classList.remove("opacity-100");
        });

        document.querySelectorAll(".arrow-icon").forEach(icon => {
            icon.style.transform = "rotate(0deg)";
        });
    });

    // ป้องกันเมนูปิดเมื่อกดด้านในเมนู
    document.querySelectorAll(".dropdown-menu").forEach(menu => {
        menu.addEventListener("click", function(event) {
            event.stopPropagation();
        });
    });
});

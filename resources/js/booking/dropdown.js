document.addEventListener("DOMContentLoaded", function() {
    const openDropdown = document.getElementById("open-dropdown");
    const guestDropdown = document.getElementById("guest-dropdown");
    const closeDropdown = document.getElementById("close-dropdown");

    // ตรวจสอบว่า guestDropdown มีอยู่ใน DOM ก่อน
    if (!guestDropdown) return;

    // เปิด dropdown เมื่อคลิกที่ open-dropdown
    openDropdown.addEventListener("click", (event) => {
        guestDropdown.classList.remove("hidden");
        event.stopPropagation(); // ป้องกันการซ่อนจากการคลิกนอก dropdown
    });

    // ปิด dropdown เมื่อคลิกที่ close-dropdown
    closeDropdown.addEventListener("click", (event) => {
        guestDropdown.classList.add("hidden");
        event.stopPropagation(); // ป้องกันการซ่อนจากการคลิกนอก dropdown
    });

    // ปิด dropdown ถ้าคลิกที่พื้นที่นอก dropdown
    document.addEventListener("click", (event) => {
        if (!guestDropdown.contains(event.target) && !openDropdown.contains(event.target)) {
            guestDropdown.classList.add("hidden");
        }
    });
});


document.addEventListener("DOMContentLoaded", () => {
    // ค่าตั้งต้น
    let adultCount = 0;
    let childCount = 0;

    // ตัวเลือกที่ใช้ในการเพิ่มหรือลดจำนวน
    const adultNumber = document.getElementById("adult-number");
    const childNumber = document.getElementById("child-number");
    const adultCountDisplay = document.getElementById("adults-count");
    const childrenCountDisplay = document.getElementById("children-count");

    // เพิ่มจำนวน Adult
    document.getElementById("plus-adult").addEventListener("click", () => {
        adultCount++;
        adultNumber.textContent = adultCount;
        adultCountDisplay.textContent = `${adultCount} Adults,`;
    });

    // ลดจำนวน Adult
    document.getElementById("minus-adult").addEventListener("click", () => {
        if (adultCount > 0) {
            adultCount--;
            adultNumber.textContent = adultCount;
            adultCountDisplay.textContent = `${adultCount} Adults,`;
        }
    });

    // เพิ่มจำนวน Children
    document.getElementById("plus-child").addEventListener("click", () => {
        childCount++;
        childNumber.textContent = childCount;
        childrenCountDisplay.textContent = `${childCount} Children`;
    });

    // ลดจำนวน Children
    document.getElementById("minus-child").addEventListener("click", () => {
        if (childCount > 0) {
            childCount--;
            childNumber.textContent = childCount;
            childrenCountDisplay.textContent = `${childCount} Children`;
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const toggleNight = document.getElementById("toggle-night");
    const dropdown = document.getElementById("our-night");
    const arrowIcon = document.getElementById("arrow-icon");

    toggleNight.addEventListener("click", function() {
        dropdown.classList.toggle("hidden");
        arrowIcon.classList.toggle("rotate-180");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function(event) {
        if (!toggleNight.contains(event.target)) {
            dropdown.classList.add("hidden");
            arrowIcon.classList.remove("rotate-180");
        }
    });
});
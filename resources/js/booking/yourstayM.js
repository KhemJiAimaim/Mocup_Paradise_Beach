document.addEventListener("DOMContentLoaded", function () {
    const stayButton = document.getElementById("your-stay-button");
    const stayModal = document.querySelector(".m-your-stay");
    const closeStay = document.getElementById("close-your-stay");

    // เปิดโมดัล
    stayButton.addEventListener("click", function () {
        stayModal.classList.remove("hidden");
    });

    // ปิดโมดัล
    closeStay.addEventListener("click", function () {
        stayModal.classList.add("hidden");
    });


    // ปิด dropdown ถ้าคลิกข้างนอก
    document.addEventListener("click", function (event) {
        if (!toggleNight.contains(event.target) && !ourNight.contains(event.target)) {
            ourNight.classList.add("hidden");
            arrowIcon.classList.remove("rotate-180");
        }
    });
});

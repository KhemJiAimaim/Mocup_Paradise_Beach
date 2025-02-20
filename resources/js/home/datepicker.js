document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#datepicker", {
        dateFormat: "D, d M Y",  
        altInput: true,
        altFormat: "D, d M Y",
        disableMobile: true,
        enableTime: false,
        theme: "light"
    });
});
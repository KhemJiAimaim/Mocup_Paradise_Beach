// ฟังก์ชันเพื่อแสดงวันที่ในรูปแบบ "Mon, 01 Jan 2024"
function getFormattedDate() {
    const today = new Date();
    const options = { weekday: 'short', day: '2-digit', month: 'short', year: 'numeric' };
    return today.toLocaleDateString('en-GB', options);  
}

document.getElementById("checkin-datepicker").placeholder = getFormattedDate();
document.getElementById("checkout-datepicker").placeholder = getFormattedDate();

flatpickr("#checkin-datepicker", {
    dateFormat: "D, d M Y",  
    altInput: true,
    altFormat: "D, d M Y",
    disableMobile: true
});

flatpickr("#checkout-datepicker", {
    dateFormat: "D, d M Y",  
    altInput: true,
    altFormat: "D, d M Y",
    disableMobile: true
});

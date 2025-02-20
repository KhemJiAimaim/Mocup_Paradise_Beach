document.getElementById("s-massage").addEventListener("click", function(event) {
    event.preventDefault();
    
    Swal.fire({
        position: "center",
        icon: "success",
        title: "ส่งข้อความสำเร็จ",
        showConfirmButton: false,
        timer: 1500
      });
});
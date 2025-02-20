document.getElementById("s-massage").addEventListener("click", function(event) {
    event.preventDefault();
    
    Swal.fire({
        position: "center",
        icon: "success",
        title: "success",
        showConfirmButton: false,
        timer: 1500
      });
});
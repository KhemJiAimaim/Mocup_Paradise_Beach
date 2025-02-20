const openQDetails = document.querySelectorAll('.open_q_detail');
    const qDetails = document.querySelectorAll('.q_detail');
    const arrowIcons = document.querySelectorAll('.arrow-icon');

    openQDetails.forEach((openQDetail, index) => {
        openQDetail.addEventListener('click', function() {
            const qDetail = qDetails[index];
            const arrowIcon = arrowIcons[index];
            
            // Toggle visibility and smooth transition of q_detail
            if (qDetail.style.maxHeight) {
                qDetail.style.maxHeight = null;
                qDetail.style.opacity = 0;
                arrowIcon.style.transform = 'rotate(0deg)';
            } else {
                qDetail.style.maxHeight = qDetail.scrollHeight + "px"; // Set maxHeight to the content height
                qDetail.style.opacity = 1;
                arrowIcon.style.transform = 'rotate(180deg)';
            }
        });
    });
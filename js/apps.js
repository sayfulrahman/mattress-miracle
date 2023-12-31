document.addEventListener('DOMContentLoaded', function () {
    // Get the button and sidebar elements
    const openSidebarBtn = document.getElementById('matmir-aar');
    const sidebar = document.getElementById('matmir-yjk');
    const closeSidebarBtn = document.getElementById('matmir-xxx');

    // Function to toggle sidebar visibility
    function toggleSidebar() {
        sidebar.classList.toggle('active');
    }

    // Event listener for button click to toggle sidebar
    openSidebarBtn.addEventListener('click', function () {
        toggleSidebar();
    });

    closeSidebarBtn.addEventListener('click', function () {
        sidebar.classList.remove('active');
    });
});



document.addEventListener('DOMContentLoaded', function () {
    const dropdownItems = document.querySelectorAll('.dropdown');

    dropdownItems.forEach(function (item) {
        item.addEventListener('click', function (event) {
            const clickedDropdown = event.currentTarget;
            const innerMenu = clickedDropdown.querySelector('.matmir-abs');

            if (innerMenu) {
                innerMenu.classList.toggle('active');
                item.classList.toggle('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var modal = document.querySelector('.matmir-m2d');
    var closeButton = document.querySelector('.cro');
    var overlay = document.querySelector('.matmir-mod');
	var modalData = document.getElementById('matmirData');

	var openButton = document.querySelectorAll('.mbtn');

    if (openButton) {
        openButton.forEach(function(button) {
            button.addEventListener('click', function(event) {
				 event.preventDefault();
                // Handle click event for each evidence button
                var dataTag = button.dataset.tag;
                if (button && modal && dataTag) {
					modalData.innerHTML = dataTag;
					overlay.style.display = 'flex';
				}
            });
        });
    }
	

    if (closeButton && modal) {
        closeButton.addEventListener('click', function() {
            overlay.style.display = 'none';
        });
    }

    // Close modal on outside click
    if (overlay) {
        overlay.addEventListener('click', function(event) {
            if (event.target === overlay) {
                overlay.style.display = 'none';
            }
        });
    }
});
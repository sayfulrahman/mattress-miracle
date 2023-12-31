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


new Glider(document.querySelector('.glider'), {
    // Mobile-first defaults
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    },
    responsive: [
        {
            breakpoint: 1000,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
          },{
        breakpoint: 768,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
      },{
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      }
    ]
  });
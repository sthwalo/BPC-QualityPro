document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const openMenuButton = document.querySelector('.open-menu');
    const closeMenuButton = document.querySelector('.close-menu');
    const navbar = document.querySelector('.navbar');
    const stickyOffset = 100;
    const hamburger = document.querySelector('.hamburger'); // assuming you have an element with class 'hamburger'

    // Toggle the visibility of the mobile navigation
    function toggleMobileNav() {
        navbar.classList.toggle('is-active');
        navbar.style.display = navbar.classList.contains('is-active') ? 'flex' : 'none';
    }

    if (openMenuButton && closeMenuButton && navbar) {
        openMenuButton.addEventListener('click', toggleMobileNav);
        closeMenuButton.addEventListener('click', toggleMobileNav);
    }

    if (hamburger) {
        hamburger.addEventListener('click', toggleMobileNav); // Use the same toggle function for hamburger
    }

    // Close the menu if clicking outside
    document.addEventListener('click', function(event) {
        if (!navbar.contains(event.target) && !openMenuButton.contains(event.target) && navbar.classList.contains('is-active')) {
            navbar.classList.remove('is-active');
            navbar.style.display = 'none';
        }
    });

    // Sticky header functionality
    window.onscroll = function() {
        if (window.pageYOffset > stickyOffset) {
            header.classList.add('sticky-header');
        } else {
            header.classList.remove('sticky-header');
        }
    };

    // Handling service card animations and content toggling
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('.sub-content').style.display = 'block';
        });
        card.addEventListener('mouseleave', function() {
            this.querySelector('.sub-content').style.display = 'none';
        });

        // Ensure this does not affect other links such as the mobile menu
        document.querySelectorAll('.mobile-nav a, .navbar a').forEach(menuLink => {
            menuLink.addEventListener('click', function(event) {
                event.stopPropagation(); // Allow default action to proceed normally for menu navigation links
            });
        });

        // Modify this to not interfere with 'Learn More' links
        const toggler = card.querySelector('.toggle-content'); // Ensure you have a specific selector/class for toggle
        if (toggler) {
            toggler.addEventListener('click', function(event) {
                event.stopPropagation(); // Stop the event from propagating to 'Learn More' link
                const targetId = card.getAttribute('data-target');
                const content = document.getElementById(targetId);
                content.style.display = content.style.display === 'none' ? 'block' : 'none';
            });
        }
    });
});
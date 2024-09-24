// Initialize popover
const popoverTrigger = document.querySelector('#popoverLink');
const popover = new bootstrap.Popover(popoverTrigger);

// Grab the elements
const iconElement = document.getElementById('icon');
const menu = document.getElementById('menu');
const overlay = document.getElementById('overlay');

// Toggle the icon, menu, and overlay visibility
popoverTrigger.addEventListener('click', function() {
    // Toggle icons
    if (iconElement.classList.contains('fa-bars')) {
        iconElement.classList.remove('fa-bars');
        iconElement.classList.add('fa-times');  // Change to 'close' icon
    } else {
        iconElement.classList.remove('fa-times');
        iconElement.classList.add('fa-bars');  // Change to 'bars' icon
    }

    // Toggle menu and overlay visibility
    if (menu.classList.contains('d-none')) {
        menu.classList.remove('d-none');
        menu.classList.add('show');   // Add show class for fade-in and animation
        overlay.classList.remove('d-none');
        overlay.classList.add('show'); // Show the overlay
    } else {
        menu.classList.remove('show');
        overlay.classList.remove('show'); // Hide the overlay
        setTimeout(() => {
            menu.classList.add('d-none');
            overlay.classList.add('d-none');
        }, 300); // Delay hiding the menu to allow fade-out effect
    }
});

// Close the menu and overlay when the overlay is clicked
overlay.addEventListener('click', function() {
    iconElement.classList.remove('fa-times');
    iconElement.classList.add('fa-bars');  // Revert to 'bars' icon
    menu.classList.remove('show');
    overlay.classList.remove('show'); // Hide the overlay
    setTimeout(() => {
        menu.classList.add('d-none');
        overlay.classList.add('d-none');
    }, 300);
});

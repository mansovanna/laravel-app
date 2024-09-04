document.addEventListener('DOMContentLoaded', () => {
    const profileButton = document.getElementById('profileButton');
    const profilePopup = document.getElementById('profilePopup');

    const menuApp = document.getElementById('menuList');
    const menuSidebar = document.getElementById('menuSidebar');

    // Toggle sidebar visibility on menuApp click
    menuApp.addEventListener('click', () => {
        menuSidebar.classList.toggle('-left-[100%]');
    });

    // Toggle profile popup visibility on profileButton click
    profileButton.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent the event from bubbling up to the document
        profilePopup.classList.toggle('hidden');
    });

    // Document-level click listener to hide profilePopup and adjust menuSidebar
    document.addEventListener('click', (e) => {
        // Hide profilePopup if click is outside profilePopup and profileButton
        if (!profilePopup.contains(e.target) && !profileButton.contains(e.target)) {
            profilePopup.classList.add('hidden');
        }

        // Adjust menuSidebar if click is outside menuSidebar and menuApp
        if (!menuSidebar.contains(e.target) && !menuApp.contains(e.target)) {
            menuSidebar.classList.add('-left-[100%]');
        }
    });
});

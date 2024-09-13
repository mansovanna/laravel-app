document.addEventListener('DOMContentLoaded', () => {
    const buttonPopProducts = document.getElementsByClassName('button-pop-product');
    const overlayPopProducts = document.getElementsByClassName('overlay-pop-up-product');
    const showPoPopProducts = document.getElementsByClassName('overlay-pop-up-detail');
    const buttonClosePopProducts = document.getElementsByClassName('button-close-pop-product');

    // Show the overlay when the button is clicked
    Array.from(buttonPopProducts).forEach((button, index) => {
        if (overlayPopProducts[index]) {
            button.addEventListener('click', () => {
                const overlay = overlayPopProducts[index];
                overlay.classList.remove('hidden');
                overlay.classList.add('flex');
            });
        }
    });

    // Hide the overlay when the close button is clicked
    Array.from(buttonClosePopProducts).forEach((button, index) => {
        if (overlayPopProducts[index]) {
            button.addEventListener('click', () => {
                const overlay = overlayPopProducts[index];
                overlay.classList.remove('flex');
                overlay.classList.add('hidden');
            });
        }
    });

    // Close the overlay when clicking outside of it
    document.addEventListener('click', (e) => {
        Array.from(overlayPopProducts).forEach((overlay, index) => {
            const button = buttonPopProducts[index];
            const closeButton = buttonClosePopProducts[index];
            const showOverlay = showPoPopProducts[index];

            if (overlay && !button.contains(e.target) && !closeButton.contains(e.target) && overlay.contains(e.target) && !showOverlay.contains(e.target)) {
                overlay.classList.remove('flex');
                overlay.classList.add('hidden');
            }
        });
    });
});

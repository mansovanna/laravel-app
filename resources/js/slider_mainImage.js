document.addEventListener("DOMContentLoaded", () => {
    const mainImages = document.getElementsByClassName("mainImage");
    const thumbnailContainers = document.getElementsByClassName("thumbnails");
    const buttonPreviouss = document.getElementsByClassName("button-previous-slider");
    const buttonNexts = document.getElementsByClassName("button-next-slider");

    // Loop through each set of elements
    Array.from(mainImages).forEach((mainImage, index) => {
        const thumbnails = thumbnailContainers[index].getElementsByClassName("thumbnail");
        const buttonPrevious = buttonPreviouss[index];
        const buttonNext = buttonNexts[index];

        let currentIndex = 0;
        const images = Array.from(thumbnails).map(thumbnail => thumbnail.src);

        // Generate an array of class names from thumbnails
        const classArray = Array.from(thumbnails).map(thumbnail => thumbnail.className);
        // console.log("Class Array:", classArray);

        // Update main image based on the current index
        function updateMainImage(index) {
            if (index >= 0 && index < images.length) {
                mainImage.src = images[index];
                currentIndex = index;
                updateActiveThumbnail();
                scrollThumbnailIntoView();
            }
        }

        // Update the active thumbnail state
        function updateActiveThumbnail() {
            Array.from(thumbnails).forEach((thumbnail, i) => {
                if (i === currentIndex) {
                    thumbnail.classList.add("active");
                } else {
                    thumbnail.classList.remove("active");
                }
            });
        }

        // Scroll the active thumbnail into view
        function scrollThumbnailIntoView() {
            const activeThumbnail = thumbnails[currentIndex];
            if (activeThumbnail) {
                const containerRect = thumbnailContainers[index].getBoundingClientRect();
                const thumbnailRect = activeThumbnail.getBoundingClientRect();

                // Calculate how far to scroll
                const thumbnailCenter = thumbnailRect.left + thumbnailRect.width / 2;
                const containerCenter = containerRect.left + containerRect.width / 2;
                const scrollPosition = thumbnailCenter - containerCenter;

                // Smooth scroll to the calculated position
                thumbnailContainers[index].scrollTo({
                    left: thumbnailContainers[index].scrollLeft + scrollPosition,
                    behavior: "smooth"
                });
            }
        }

        // Handle thumbnail click
        Array.from(thumbnails).forEach((thumbnail, i) => {
            thumbnail.addEventListener("click", () => {
                updateMainImage(i);
            });
        });

        // Handle previous button click
        buttonPrevious.addEventListener("click", () => {
            const newIndex = (currentIndex - 1 + images.length) % images.length;
            updateMainImage(newIndex);
        });

        // Handle next button click
        buttonNext.addEventListener("click", () => {
            const newIndex = (currentIndex + 1) % images.length;
            updateMainImage(newIndex);
        });

        // Initialize the active thumbnail on page load
        updateMainImage(currentIndex); // Use updateMainImage to set the initial state
    });
});

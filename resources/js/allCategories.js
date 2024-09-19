const buttonShow = document.getElementById('buttonSetCategories');
const listShow = document.getElementById('lists-categorie');

// Show or hide the list on button click
buttonShow.addEventListener('click', () => {
    if (listShow.classList.contains('hidden')) {
        listShow.classList.remove('hidden');

        // Add opacity transition
        setTimeout(() => {
            listShow.classList.remove('opacity-0');
            listShow.classList.add('opacity-100');
        }, 10); // Short timeout to ensure transition starts smoothly
    } else {
        // Handle hiding the list
        listShow.classList.remove('opacity-100');
        listShow.classList.add('opacity-0');

        setTimeout(() => {
            listShow.classList.add('hidden');
        }, 400); // Match this duration with your CSS transition duration
    }
});

// Hide the list if clicking outside
document.addEventListener('click', (e) => {
    if (!buttonShow.contains(e.target) && !listShow.contains(e.target)) {
        if (!listShow.classList.contains('hidden')) {
            listShow.classList.remove('opacity-100');
            listShow.classList.add('opacity-0');

            setTimeout(() => {
                listShow.classList.add('hidden');
            }, 400); // Match this duration with your CSS transition duration
        }
    }
});

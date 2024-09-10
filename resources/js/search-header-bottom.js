const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');

// Show results when the search input is clicked or focused
searchInput.addEventListener('focus', () => {
    searchResults.classList.add('visible');
});

// Hide results when clicking outside the search input or results
document.addEventListener('click', function (e) {
    if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
        searchResults.classList.remove('visible');
    }
});

searchInput.addEventListener('input', function () {
    if (searchInput.value.trim() === "") {
        searchResults.classList.remove('visible');
    } else {
        searchResults.classList.add('visible');
    }
});
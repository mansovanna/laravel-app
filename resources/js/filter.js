// resources/js/filter.js

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('filters-form');
    const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
    const priceSlider = document.getElementById('price-slider');
    const priceMax = document.getElementById('price-max');

    const fetchProducts = () => {
        const formData = new FormData(form);

        fetch(form.action, {
            method: 'GET',
            body: new URLSearchParams(formData)
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById('products-list').innerHTML = html;
        })
        .catch(error => console.error('Error fetching products:', error));
    };

    filterCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', fetchProducts);
    });

    priceSlider.addEventListener('input', () => {
        priceMax.textContent = priceSlider.value;
        fetchProducts();
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        fetchProducts();
    });
});

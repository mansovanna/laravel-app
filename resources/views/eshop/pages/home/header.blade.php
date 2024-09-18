<div class="flex flex-row justify-between items-center">
    <!-- Default sorting Button -->
    <button id="button-default-shorting"
        class="flex flex-row justify-between items-center gap-16 border rounded-md p-3 relative z-[5]">
        <p class="pl-2 text-sm">Default sorting</p>

        <!-- Block Icon -->
        <svg id="reteteIcon" class="w-4 text-secondary duration-300 ease-linear transform"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
            <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9" stroke="currentColor"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <!-- Block Item (Dropdown List) -->
        <ul id="show-default-shorting"
            class="text-left bg-white rounded-md border absolute top-12 left-0 right-0 opacity-0 transform transition-all duration-300 ease-in-out translate-y-[-20px] hidden">
            <li class="p-2 px-4 hover:bg-slate-100 font-medium text-sm" onclick="sortByPrice('asc')">Price low-high</li>
            <li class="p-2 px-4 hover:bg-slate-100 text-sm" onclick="sortByPrice('desc')">Price high-low</li>
        </ul>
    </button>

    {{-- Block App --}}
    <div class="flex flex-row justify-end items-center gap-3">
        {{-- Icon App --}}
        <button id="shortlist" class="text-white py-2 px-3 rounded-sm bg-danger border border-danger">
            <svg class="w-4  font-medium" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                <circle cx="17.75" cy="6.25" r="4.25" stroke="currentColor" stroke-width="1.5" />
                <circle cx="6.25" cy="6.25" r="4.25" stroke="currentColor" stroke-width="1.5" />
                <circle cx="17.75" cy="17.75" r="4.25" stroke="currentColor" stroke-width="1.5" />
                <circle cx="6.25" cy="17.75" r="4.25" stroke="currentColor" stroke-width="1.5" />
            </svg>
        </button>

        {{-- Icon --}}
        <button id="shortnonlist" class="text-secondary py-2 px-3 rounded-sm border border-danger">
            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                <path d="M11 5.5L21 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path
                    d="M5.4 16.8926C6.46667 17.607 7 17.9642 7 18.5C7 19.0358 6.46667 19.393 5.4 20.1074C4.33333 20.8218 3.8 21.1789 3.4 20.9111C3 20.6432 3 19.9288 3 18.5C3 17.0712 3 16.3568 3.4 16.0889C3.8 15.8211 4.33333 16.1782 5.4 16.8926Z"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path
                    d="M5.4 3.89263C6.46667 4.60702 7 4.96421 7 5.5C7 6.03579 6.46667 6.39298 5.4 7.10737C4.33333 7.82176 3.8 8.17895 3.4 7.91105C3 7.64316 3 6.92877 3 5.5C3 4.07123 3 3.35684 3.4 3.08895C3.8 2.82105 4.33333 3.17824 5.4 3.89263Z"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M11 12L21 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M11 18.5L21 18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </button>
    </div>
    {{-- End Block App --}}
</div>

<script type="text/javascript">
    function sortByPrice(orderDir = 'asc') {
        // Get currently applied filters
        const checkedCategories = Array.from(document.querySelectorAll('input[name="categories[]"]:checked')).map(cb => cb.value);
        const checkedBrands = Array.from(document.querySelectorAll('input[name="brands[]"]:checked')).map(cb => cb.value);
        const minPriceValue = document.getElementById('slider').value;
        const maxPriceValue = Math.max(50, parseInt(minPriceValue) + 50);

        // Build the query parameters
        const filters = new URLSearchParams();
        if (checkedCategories.length) filters.set('categories', checkedCategories.join(','));
        if (checkedBrands.length) filters.set('brands', checkedBrands.join(','));
        filters.set('min_price', minPriceValue);
        filters.set('max_price', maxPriceValue);
        filters.set('orderDir', orderDir);  // Add sorting parameter

        // Redirect with both sorting and filtering parameters
        window.location.href = "{{ URL::to('/') }}/eshop?" + filters.toString();
    }

    // Show or hide sorting dropdown
    document.getElementById('button-default-shorting').addEventListener('click', () => {
        const dropdown = document.getElementById('show-default-shorting');
        dropdown.classList.toggle('hidden');
        dropdown.classList.toggle('opacity-100');
        dropdown.classList.toggle('translate-y-0');
    });
</script>

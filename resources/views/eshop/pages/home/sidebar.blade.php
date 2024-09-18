<div class="w-4/12 p-4 boxShadow bg-white mb-4">
    <h1 class="uppercase font-medium text-xl">Categories</h1>

    @forelse ($categories as $category)
<<<<<<< HEAD
    <div class="mt-2 flex flex-row justify-between items-center">
        <form method="GET" action="eshop" id="form-category">
            <label class="peer flex flex-row gap-4 cursor-pointer">
                <input type="checkbox"
                    name="categories[]" value="{{$category->id }}"
                @if (in_array($category->id, explode(',', $f_categories)))
                checked="checked" @endif class="w-4 appearance-auto chk-category"
                onclick=" sortByOrder()" />
                <p>{{ $category->name }}</p>
            </label>
        </form>
        <p>({{ $category->products->count() }})</p>
    </div>
=======
        <div class="mt-2 flex flex-row justify-between items-center">
            <label class="peer flex flex-row gap-4 cursor-pointer">
                <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                    @if (in_array($category->id, explode(',', $f_categories))) checked="checked" @endif
                    class="w-4 appearance-auto chk-category" />
                <p>{{ $category->name }}</p>
            </label>
            <p>({{ $category->products->count() }})</p>
        </div>
>>>>>>> bef9d58c36be59374c2e269c66a5bb46f3656c75
    @empty
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <p>No Category found</p>
        </label>
        <p>(0)</p>
    </div>
    @endforelse

    <hr class="my-4">

    <h1 class="uppercase font-medium text-xl">Brands</h1>

    @forelse ($brands as $brand)
<<<<<<< HEAD
    <div class="mt-2 flex flex-row justify-between items-center">
        <form method="GET" accept="eshop" id="form-brand">
=======
        <div class="mt-2 flex flex-row justify-between items-center">
            <label class="peer flex flex-row gap-4 cursor-pointer">
                <input type="checkbox" name="brands[]" value="{{ $brand->id }}"
                    @if (in_array($brand->id, explode(',', $f_brands))) checked="checked" @endif
                    class="w-4 appearance-auto chk-brand" />
                <p>{{ $brand->name }}</p>
            </label>
            <p>({{ $brand->products->count() }})</p>
        </div>
    @empty
        <div class="mt-2 flex flex-row justify-between items-center">
>>>>>>> bef9d58c36be59374c2e269c66a5bb46f3656c75
            <label class="peer flex flex-row gap-4 cursor-pointer">
                <input type="checkbox" name="brands[]" value="{{ $brand->id }}" @if (in_array($brand->id, explode(',',
                $f_brands))) checked="checked" @endif class="w-4 appearance-auto chk-brand"
                onclick=" sortByOrder()" />
                <p>{{ $brand->name }}</p>
            </label>
        </form>
        <p>({{ $brand->products->count() }})</p>
    </div>
    @empty
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <p>No Brand found</p>
        </label>
        <p>(0)</p>
    </div>
    @endforelse

    <hr class="my-4">

    <h1 class="uppercase font-medium text-xl">Price</h1>

    <div class="mt-4">
        <input id="slider" type="range" min="0" max="100" value="1"
            class="w-full h-2 bg-gray-300 rounded-lg appearance-none cursor-pointer accent-red-500" />
        <div class="flex justify-start items-center text-base font-medium gap-2 text-gray-600 mt-2">
            <p id="minPrice">$1</p>
            <p>-</p>
            <p id="maxPrice">$51</p> <!-- Updated to reflect the max value correctly -->
        </div>
    </div>
<<<<<<< HEAD
    {{-- End Price --}}


    <script>
        const slider = document.getElementById('slider');
        const minPrice = document.getElementById('minPrice');
        const maxPrice = document.getElementById('maxPrice');

        slider.addEventListener('input', () => {
            const value = slider.value;
            minPrice.textContent = `$${value}`;
            maxPrice.textContent = `$${Math.max(50, value + 50)}`;
        });

       function sortByOrder() {
    const checkedBrands = [];
    const checkedCategories = [];

    // Select the checked checkboxes for categories and brands
    const categoryCheckboxes = document.querySelectorAll('input[name="categories[]"]:checked');
    const brandCheckboxes = document.querySelectorAll('input[name="brands[]"]:checked');

    // Loop through the NodeList and push the value of each checked checkbox to the respective arrays
    categoryCheckboxes.forEach((checkbox) => {
        checkedCategories.push(checkbox.value);
    });
    brandCheckboxes.forEach((checkbox) => {
        checkedBrands.push(checkbox.value);
    });

    // Construct the URL with both brands and categories
    window.location.href = "{{ URL::to('/') }}/eshop?brands=" + checkedBrands.join(",") + "&categories=" + checkedCategories.join(",");
}



    </script>
=======
>>>>>>> bef9d58c36be59374c2e269c66a5bb46f3656c75

    <hr class="my-4">

    <h1 class="uppercase font-medium text-xl">Size</h1>
</div>

<script>
    const slider = document.getElementById('slider');
    const minPrice = document.getElementById('minPrice');
    const maxPrice = document.getElementById('maxPrice');

    slider.addEventListener('input', () => {
        const value = slider.value;
        minPrice.textContent = $${value};
        maxPrice.textContent = $${Math.max(50, parseInt(value) + 50)};
        bothFilters(); // Apply filters when slider value changes
    });

    function bothFilters() {
        const checkedCategories = Array.from(document.querySelectorAll('input[name="categories[]"]:checked')).map(cb => cb.value);
        const checkedBrands = Array.from(document.querySelectorAll('input[name="brands[]"]:checked')).map(cb => cb.value);
        const minPriceValue = slider.value;
        const maxPriceValue = Math.max(50, parseInt(minPriceValue) + 50);

        const filters = new URLSearchParams();
        if (checkedCategories.length) filters.set('categories', checkedCategories.join(','));
        if (checkedBrands.length) filters.set('brands', checkedBrands.join(','));
        filters.set('min_price', minPriceValue);
        filters.set('max_price', maxPriceValue);

        window.location.href = "{{ URL::to('/') }}/eshop?" + filters.toString();
    }

    document.querySelectorAll('input[name="categories[]"]').forEach(checkbox => {
        checkbox.addEventListener('change', bothFilters);
    });

    document.querySelectorAll('input[name="brands[]"]').forEach(checkbox => {
        checkbox.addEventListener('change', bothFilters);
    });
</script>
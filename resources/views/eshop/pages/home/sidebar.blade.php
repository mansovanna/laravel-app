<div class="w-4/12 p-4  boxShadow bg-white mb-4">
    <h1 class="uppercase font-medium text-xl">categories</h1>

    @forelse ($categories as $category)
    {{-- Women --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="category" class="w-4  appearance-auto" onclick="sortByCategory({{ $category->id }})" />
            <p>{{ $category->name }}</p>
        </label>
        <p>({{ $category->products->count() }})</p>
    </div>
    @empty
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <p>No Category found</p>
        </label>
        <p>(0)</p>
    </div>
    @endforelse


    {{-- End Women --}}





    <hr class="my-4">

    {{-- --}}
    <h1 class="uppercase font-medium text-xl">Brands</h1>

    @forelse ($brands as $brand)
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="brands" value="{{$brand->id}}" @if(in_array($brand->id,explode(',',$f_brands)))
            checked="checked" @endif " class="w-4 appearance-auto chk-brand"
            onclick="sortByBrand({{ $brand->id }})" />
            <p>{{ $brand->name }}</p>
        </label>
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

    {{-- --}}
    <h1 class="uppercase font-medium text-xl">Price</h1>

    {{-- Price --}}
    <div class="mt-4">
        <input id="slider" type="range" min="0" max="100" value="1"
            class="w-full h-2 bg-gray-300 rounded-lg appearance-none cursor-pointer accent-red-500" />
        <div class="flex justify-start items-center text-base font-medium gap-2 text-gray-600 mt-2">
            <p id="minPrice">$1</p>
            <p>-</p>
            <p id="maxPrice">$50</p>
        </div>
    </div>
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


        function sortByBrand(orderBrand) {
            window.location.href="{{URL::to('/')}}/eshop?brands="+orderBrand
        }

        function sortByCategory(orderCategory) {
            window.location.href="{{URL::to('/')}}/eshop?orderCategory="+orderCategory
        }
    </script>


    <hr class="my-4">

    {{-- --}}
    <h1 class="uppercase font-medium text-xl">Size</h1>

    {{-- --}}
</div>

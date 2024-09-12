<div class="w-4/12 p-4  boxShadow bg-white mb-4">
    <h1 class="uppercase font-medium text-xl">categories</h1>

    {{-- Women --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="todo[1]" checked class="w-4  appearance-auto" />
            <p>Women</p>
        </label>
        <p>(16)</p>
    </div>

    {{-- End Women --}}

    {{-- Men --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="todo[1]" class="w-4  appearance-auto" />
            <p>Men</p>
        </label>
        <p>(9)</p>
    </div>
    {{-- End Men --}}


    {{-- Shoes --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="todo[1]" class="w-4  appearance-auto" />
            <p>Shoes</p>
        </label>
        <p>(19)</p>
    </div>
    {{-- End Shoes --}}

    {{-- Computer --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="todo[1]" class="w-4  appearance-auto" />
            <p>Computer</p>
        </label>
        <p>(35)</p>
    </div>
    {{-- End Computer --}}

    <hr class="my-4">

    {{-- --}}
    <h1 class="uppercase font-medium text-xl">Brands</h1>

    {{-- Adidas --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="todo[1]" checked class="w-4  appearance-auto" />
            <p>Adidas</p>
        </label>
        <p>(16)</p>
    </div>

    {{-- End Adidas --}}

    {{-- Nike --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="todo[1]" checked class="w-4  appearance-auto" />
            <p>Nike</p>
        </label>
        <p>(16)</p>
    </div>

    {{-- End Nike --}}

    {{-- Easy --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="todo[1]" checked class="w-4  appearance-auto" />
            <p>Easy</p>
        </label>
        <p>(16)</p>
    </div>

    {{-- End Easy --}}


    {{-- Arong --}}
    <div class="mt-2 flex flex-row justify-between items-center">
        <label class="peer flex flex-row gap-4 cursor-pointer">
            <input type="checkbox" name="todo[1]" checked class="w-4  appearance-auto" />
            <p>Arong</p>
        </label>
        <p>(16)</p>
    </div>

    {{-- End Arong --}}


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
    </script>


    <hr class="my-4">

    {{-- --}}
    <h1 class="uppercase font-medium text-xl">Size</h1>

    {{-- --}}
</div>

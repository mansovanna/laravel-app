<aside id="list-Items" class="w-full grid grid-cols-3 gap-4 mt-3">
    @forelse ( $products as $index => $product )
    @php
    $images = json_decode($product->image);
    @endphp
    <div class="w-full border rounded-sm group flex flex-col justify-start items-start grid-child">

        <div class=" w-[7.3cm] h-[6cm] bg-sky-100 overflow-hidden relative">

            <img src="{{ asset('images/'. $images[0]) }}" alt="{{ $product->name }}" class="object-cover w-full h-full">

            {{-- Block Button Items more --}}
            <div
                class="w-full h-full flex justify-center items-center bg-blue-200 bg-opacity-30 absolute top-0 right-0 left-0 bottom-0 gap-4 duration-700 ease-linear group-hover:opacity-100 opacity-0">
                {{-- Blokc Button Popup --}}
                <button
                    class="button-pop-product text-white bg-danger rounded-full p-2 hover:bg-white hover:text-danger duration-200 active:bg-red-400 group-hover:opacity-100 group-hover:translate-y-0 translate-y-36 group-hover:duration-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                        <path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    </svg>
                </button>
                {{-- End Blokc Button Popup --}}

                {{-- Block D --}}
                <a href="{{ route('wish.store', $product->id) }}"
                    class="text-white bg-danger rounded-full p-2 hover:bg-white hover:text-danger duration-200 active:bg-red-400 group-hover:opacity-100 group-hover:translate-y-0 translate-y-36 group-hover:duration-1000">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                        <path
                            d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </a>
                {{-- End Block D --}}
            </div>
            {{-- End Block Button Items more --}}
        </div>

        {{-- Block Title --}}
        <div class="w-8/12 px-5 mt-6 flex flex-col  relative leading-[0]">
            <div class="w-full h-10 ">
                <h2 class="font-medium text-sceondary text-xl mb-3 leading-4 text-ellipsis overflow-hidden line-clamp-1">{{ $product->name }}</h2>
            </div>

            {{-- --}}
            <div class=" flex flex-row items-center justify-start gap-x-3 leading-[0] ">
                @if ($product->discount <= 0) <h1 class="text-danger font-medium text-lg ">${{ $product->price }}</h1>

                    @else
                    <h1 class="text-danger font-medium text-lg">${{ $product->discount }}</h1>
                    <p class="text-sm line-through font-medium text-gray-400">${{ $product->price }}</p>
                    @endif


            </div>

            {{-- Block Start --}}
            <div class="flex flex-row justify-start items-center mb-4 ">
                <div class="flex flex-row justify-start items-start gap-1">
                    <svg class="w-3 text-yellow-500 fill-yellow-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="w-3 text-yellow-500 fill-yellow-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="w-3 text-yellow-500 fill-yellow-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="w-3 text-yellow-500 fill-yellow-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="w-3 text-yellow-500 fill-yellow-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

                {{-- --}}
                <p class="text-sm text-gray-400">(15)</p>
            </div>

            {{-- Descripton --}}
            <div class="description-product hidden w-full h-24 text-ellipsis overflow-hidden ">
                <p class="leading-4 text-ellipsis overflow-hidden line-clamp-3">{{ $product->description }}</p>
            </div>


            {{-- Block Hover Add Button Add To cart --}}
            <button
                class="bg-danger group-hover:translate-y-0 translate-y-7  group-hover:opacity-100 opacity-0 hover:bg-white  rounded-sm border border-danger active:bg-red-400 text-white hover:text-danger  duration-700 ease-in-out font-medium uppercase w-36 h-11 absolute bottom-4 left-4 ">Add
                <a href="{{ route('add_to_cart', $product->id) }}">
                    To Cart
                </a>
            </button>
            {{-- End Block Hover Add Button Add To cart --}}
        </div>

        {{-- Popup Data --}}
        @include('eshop.pages.home.detail')
    </div>
    @empty
    <p class="mt-2 text-slate-400">Not Found Data</p>
    @endforelse
</aside>

<aside id="list-Items" class="w-full grid grid-cols-3 gap-4 mt-3">
    <script>
        // Declare isShort only once, outside of the loop
        const isShort = localStorage.getItem('isShortList');
    </script>

    @foreach ($products as $index => $product)
    <div id="list-items-col-{{ $index }}"
        class="w-full border rounded-sm group flex flex-col justify-start items-start">

        <div class=" w-[7.3cm] h-[6cm] bg-sky-100 overflow-hidden relative">
            <img src="{{ asset('images/'. $product->image) }}" alt="{{ $product->name }}"
                class="object-cover w-full h-full">

            {{-- Block Button Items more --}}
            <div
                class="w-full h-full flex justify-center items-center bg-blue-200 bg-opacity-30 absolute top-0 right-0 left-0 bottom-0 gap-4 duration-700 ease-linear group-hover:opacity-100 opacity-0">
                {{-- Blokc Button Popup --}}
                <button onclick="boTTonPoPUp({{ $index }})"
                    class="text-white bg-danger rounded-full p-2 hover:bg-white hover:text-danger duration-200 active:bg-red-400 group-hover:opacity-100 group-hover:translate-y-0 translate-y-36 group-hover:duration-700">
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
                <button
                    class="text-white bg-danger rounded-full p-2 hover:bg-white hover:text-danger duration-200 active:bg-red-400 group-hover:opacity-100 group-hover:translate-y-0 translate-y-36 group-hover:duration-1000">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                        <path
                            d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </button>
                {{-- End Block D --}}
            </div>
            {{-- End Block Button Items more --}}
        </div>




        {{-- Block Title --}}
        <div class="px-5 mt-6 flex flex-col  relative leading-[0]">
            <h2 class="font-medium text-sceondary text-xl mb-3">{{ $product->name }}</h2>

            {{-- --}}
            <div class="flex flex-row items-center justify-start gap-x-3 leading-[0] ">
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

            {{-- Block Hover Add Button Add To cart --}}
            <button
                class="bg-danger group-hover:translate-y-0 translate-y-7  group-hover:opacity-100 opacity-0 hover:bg-white  rounded-sm border border-danger active:bg-red-400 text-white hover:text-danger  duration-700 ease-in-out font-medium uppercase w-36 h-11 absolute bottom-4 left-4 ">Add
                To Cart</button>
            {{-- End Block Hover Add Button Add To cart --}}
        </div>
    </div>



    @endforeach

</aside>


{{-- Block POP UP DATA --}}
@php
$produc_images = [
'https://themes.programmingkit.xyz/rafcart/assets/images/slider-1.png',
'https://themes.programmingkit.xyz/rafcart/assets/images/slider-2.png',
'https://themes.programmingkit.xyz/rafcart/assets/images/slider-3.png',
'https://themes.programmingkit.xyz/rafcart/assets/images/slider-4.png',
'https://themes.programmingkit.xyz/rafcart/assets/images/slider-5.png',
'https://themes.programmingkit.xyz/rafcart/assets/images/slider-1.png'
];
@endphp

<div id="overlay-pop-up"
    class="w-full h-screen hidden bg-black bg-opacity-20 fixed top-0 bottom-0 right-0 left-0 z-50  justify-center items-center overflow-y-auto duration-500 ease-in-out">
    <div id="overlay-pop-up-content" class="w-8/12 h-5/6 bg-white rounded-sm shadow-lg p-2 overflow-y-auto">
        {{-- Close Button --}}
        <div class="w-full flex flex-row justify-end items-center">
            <button onclick="boTTonClostPoPUP()"
                class="bg-danger rounded-sm text-white p-1 hover:bg-white border border-danger hover:text-danger duration-200 active:bg-red-300">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                    <path d="M14.9994 15L9 9M9.00064 15L15 9" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                        stroke="currentColor" stroke-width="1.5" />
                </svg>
            </button>
        </div>
        {{-- End Close Button --}}

        {{-- Block of Detail Data --}}
        <div class="flex flex-row justify-between items-start h-full gap-4 mt-1">
            {{-- Block Detail Image --}}
            <div class="w-[11cm] px-3">
                {{-- Main Image --}}
                <img id="mainImage" class="w-full h-80 object-cover" src="{{ $produc_images[0] }}" alt="">

                {{-- Block Slide Children Images --}}
                <div class="w-full h-20 mt-3 flex flex-row justify-start items-center gap-2 relative group">
                    <div class="flex flex-row gap-2 " id="thumbnails">
                        @foreach ($produc_images as $index => $child_image)
                        <img id="thumbnail-{{ $index }}"
                            class="w-20 h-20 my-2 object-center cursor-pointer outline outline-transparent hover:outline-blue-400 duration-500 ease-in-out"
                            src="{{ $child_image }}" alt=""
                            onclick="changeMainImage('{{ $child_image }}', {{ $index }})">
                        @endforeach
                    </div>

                    {{-- Previous Button --}}
                    <button
                        class="p-1 bg-white rounded-sm shadow-md absolute top-1/3 left-1  transform  group-hover:translate-x-0 -translate-x-3 group-hover:opacity-100 opacity-0 duration-700 ease-in-out active:bg-slate-300 "
                        onclick="prevImage()">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M15 6C15 6 9.00001 10.4189 9 12C8.99999 13.5812 15 18 15 18" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    {{-- Next Button --}}
                    <button
                        class="p-1 bg-white rounded-sm shadow-md absolute top-1/3 right-3 transform group-hover:translate-x-0 translate-x-3 group-hover:opacity-100 opacity-0 duration-700 ease-in-out active:bg-slate-300"
                        onclick="nextImage()">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M9.00005 6C9.00005 6 15 10.4189 15 12C15 13.5812 9 18 9 18" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- End Block Detail Image --}}

            {{-- Block Detail News --}}
            <div class="w-7/12  pr-3 ">
                {{-- Content for Detail News --}}
                <div class="flex flex-col justify-start items-start gap-2 pb-4">
                    <h1 class=" font-medium text-3xl">MEN'S ADIDAS COURTSMASH</h1>

                    {{-- Block Star --}}
                    <aside class="flex flex-row justify-start items-center gap-3 py-3">
                        <div class="flex flex-row justify-start items-center">
                            <svg class="w-4 h-4 text-yellow-400 fill-yellow-200 " xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            {{-- --}}
                            <svg class="w-4 h-4 text-yellow-400 fill-yellow-200 " xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            {{-- --}}
                            <svg class="w-4 h-4 text-yellow-400 fill-yellow-200 " xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            {{-- --}}
                            <svg class="w-4 h-4 text-yellow-400 fill-yellow-200 " xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            {{-- --}}
                            <svg class="w-4 h-4 text-yellow-400 fill-yellow-200 " xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <p class=" text-sm text-gray-400 text-left font-normal">50 Reviews</p>
                    </aside>

                    {{-- End Block Star --}}

                    {{-- Block Stork --}}
                    <aside class="flex flex-row justify-start items-center gap-2">
                        <h5 class="text-lg font-medium">Availability:</h5>
                        <h5 class="text-lg font-medium text-green-500">In Stock</h5>
                    </aside>
                    {{-- End Block Stork --}}

                    {{-- Block Brand:Bata --}}
                    <aside aside class="flex flex-row justify-start items-center gap-2">
                        <h5 class="text-lg font-medium">Brand:</h5>
                        <p class="text-lg">Bata</p>
                    </aside>
                    {{-- End Block Brand:Bata --}}

                    {{-- Block Category --}}
                    <aside aside class="flex flex-row justify-start items-center gap-2">
                        <h5 class="text-lg font-medium">Category:</h5>
                        <p class="text-lg">Clothing</p>
                    </aside>
                    {{-- End Block Category --}}

                    {{-- Block SKU: --}}
                    <aside aside class="flex flex-row justify-start items-center gap-2">
                        <h5 class="text-lg font-medium">SKU:</h5>
                        <p class="text-lg">BE45VGRT</p>
                    </aside>
                    {{-- End Block SKU: --}}


                    {{-- Block Price: --}}
                    <aside aside class="flex flex-row justify-start items-center gap-5">
                        <p class="text-lg font-medium text-gray-500 line-through">$5000.00</p>
                        <h5 class="text-2xl font-medium text-danger">$4500.00</h5>

                        {{-- --}}
                        <div class="p-1 bg-danger text-white text-xs relative">
                            <p>-30%</p>
                            {{-- Styles --}}
                            <span
                                class="  size-5 border-l-[0px] border-l-transparent border-t-[10px] border-t-transparent  border-r-[18px] border-r-danger border-b-[10px] border-b-transparent  absolute -left-4 top-[2px] bottom-0 z-10"></span>
                        </div>
                    </aside>
                    {{-- End Block Price: --}}

                    {{-- Block Title or description: --}}
                    <aside aside class="flex flex-row justify-start items-center gap-2">
                        <p class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quaerat cumque
                            tempora iusto non sed iure expedita unde placeat ullam odio nesciunt distinctio perspiciatis
                            illum, corporis saepe rerum consectetur vel.</p>
                    </aside>
                    {{-- End Block Title or description: --}}

                    {{-- Block SIZE: --}}
                    <aside aside class="flex flex-col justify-start items-start">
                        <h5 class="text-lg font-medium">Size</h5>
                        <p class="text-lg">BE45VGRT</p>
                    </aside>
                    {{-- End Block SIZE: --}}

                    {{-- Block Color: --}}
                    <aside aside class="flex flex-col justify-start items-start">
                        <h5 class="text-lg font-medium">Color</h5>
                        <p class="text-lg">BE45VGRT</p>
                    </aside>
                    {{-- End Block Color: --}}

                    {{-- Block Quantity: --}}
                    <aside aside class="flex flex-col justify-start items-start">
                        <h5 class="text-lg font-medium">Quantity</h5>
                        <p class="text-lg">BE45VGRT</p>
                    </aside>
                    {{-- End Block Quantity: --}}


                    {{-- Block Quantity: --}}
                    <aside aside class="flex flex-row justify-start items-center gap-4">
                        <button
                            class="flex flex-row gap-x-2 justify-center items-center uppercase text-md bg-danger rounded-sm border border-danger p-2 px-4 text-center text-white hover:bg-white hover:text-danger  duration-200 ease-in-out active:bg-danger active:text-white">
                            <svg class="fill-none w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M8 16L16.7201 15.2733C19.4486 15.046 20.0611 14.45 20.3635 11.7289L21 6"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M6 6H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <circle cx="6" cy="20" r="2" stroke="currentColor" stroke-width="1.5" />
                                <circle cx="17" cy="20" r="2" stroke="currentColor" stroke-width="1.5" />
                                <path d="M8 20L15 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M2 2H2.966C3.91068 2 4.73414 2.62459 4.96326 3.51493L7.93852 15.0765C8.08887 15.6608 7.9602 16.2797 7.58824 16.7616L6.63213 18"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <p>add to cart</p>
                        </button>


                        {{-- --}}
                        <button
                            class="flex flex-row gap-x-2 justify-center items-center uppercase text-md bg-white rounded-sm border border-danger p-2 px-4 text-center  hover:bg-danger hover:text-white text-danger  duration-200 ease-in-out active:bg-danger active:text-white">
                            <svg class="w-5 h-5 fill-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <p>wishlist</p>
                        </button>
                    </aside>
                    {{-- End Block Quantity: --}}


                    <hr class=" w-full mt-4">

                    <aside>
                        <button class="p-1 hover:bg-blue-100 rounded-full duration-150 ease-in-out">
                            <svg class="w-6 h-6 fill-none text-blue-700" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                <path
                                    d="M16.9265 8.02637H13.9816C12.9378 8.02637 12.0894 8.86847 12.0817 9.91229L11.9964 21.4268M10.082 14.0017H14.8847"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>

                        <button class="p-1 hover:bg-red-100 rounded-full duration-150 ease-in-out">
                            <svg class="w-6 h-6 text-danger fill-none" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                <path
                                    d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <path d="M17.5078 6.5L17.4988 6.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </aside>

                </div>
            </div>
            {{-- End Block Detail News --}}
        </div>
        {{-- End Block of Detail Data --}}
    </div>
</div>
{{-- End Block POP UP DATA --}}

<script>
    let currentIndex = 0;
    const productImages = @json($produc_images);

    function changeMainImage(imageUrl, index) {
        document.getElementById('mainImage').src = imageUrl;

        // Remove active class from the previous image
        document.getElementById('thumbnail-' + currentIndex).classList.remove('outline-danger');

        // Set the new active image
        currentIndex = index;
        document.getElementById('thumbnail-' + currentIndex).classList.add('outline-danger');

        // Ensure the selected thumbnail is visible
        scrollThumbnailIntoView(currentIndex);
    }

    function prevImage() {
        // Remove active class from the current image
        document.getElementById('thumbnail-' + currentIndex).classList.remove('outline-danger');

        // Navigate to previous image
        currentIndex = (currentIndex - 1 + productImages.length) % productImages.length;
        document.getElementById('mainImage').src = productImages[currentIndex];

        // Set the new active image
        document.getElementById('thumbnail-' + currentIndex).classList.add('outline-danger');

        // Ensure the selected thumbnail is visible
        scrollThumbnailIntoView(currentIndex);
    }

    function nextImage() {
        // Remove active class from the current image
        document.getElementById('thumbnail-' + currentIndex).classList.remove('outline-danger');

        // Navigate to next image
        currentIndex = (currentIndex + 1) % productImages.length;
        document.getElementById('mainImage').src = productImages[currentIndex];

        // Set the new active image
        document.getElementById('thumbnail-' + currentIndex).classList.add('outline-danger');

        // Ensure the selected thumbnail is visible
        scrollThumbnailIntoView(currentIndex);
    }

    function scrollThumbnailIntoView(index) {
        const thumbnailContainer = document.getElementById('thumbnails');
        const selectedThumbnail = document.getElementById('thumbnail-' + index);

        // Calculate the center position
        const thumbnailLeft = selectedThumbnail.offsetLeft;
        const thumbnailWidth = selectedThumbnail.offsetWidth;
        const containerWidth = thumbnailContainer.offsetWidth;
        const scrollLeft = thumbnailLeft - (containerWidth / 2) + (thumbnailWidth / 2);

        // Smooth scroll to the selected thumbnail
        thumbnailContainer.scrollTo({
            left: scrollLeft,
            behavior: 'smooth'
        });
    }

    // Hide scrollbar but allow scrolling
    document.querySelector('#thumbnails').style.scrollbarWidth = 'none'; /* For Firefox */
    document.querySelector('#thumbnails').style.msOverflowStyle = 'none'; /* For Internet Explorer and Edge */
    document.querySelector('#thumbnails').style.overflow = 'auto';
    document.querySelector('#thumbnails').style.boxShadow = 'inset 0 0 0 100px white'; /* For Webkit browsers */



    // const boTTonPoPUp = document.getElementById('buttonPopUp');

    const oVerlay = document.getElementById('overlay-pop-up');

function boTTonPoPUp(product) {
    if(oVerlay.classList.contains('hidden')) {
        oVerlay.classList.remove('hidden');
        oVerlay.classList.add('flex');
        setTimeout(() => {
            oVerlay.classList.remove('opacity-0');
            oVerlay.classList.add('opacity-100');
        }, 300);
    }
}

function boTTonClostPoPUP(){
    if(oVerlay.classList.contains('flex')){

        oVerlay.classList.add('opacity-0');
        oVerlay.classList.remove('opacity-100');

        setTimeout(()=>{
            oVerlay.classList.remove('flex');
            oVerlay.classList.add('hidden');
        }, 300)
    }
}

document.addEventListener('click', (e) => {
    const popUpContent = document.getElementById('overlay-pop-up-content');

    if (oVerlay && !popUpContent.contains(e.target) && oVerlay.contains(e.target)) {
        boTTonClostPoPUP();  // Call the function to close the pop-up
    }
});

</script>

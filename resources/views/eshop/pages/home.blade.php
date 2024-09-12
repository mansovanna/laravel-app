@extends('eshop.layouts.master')

@section('content')
    <div class="container flex items-center  justify-center">
        <div class="w-11/12  flex flex-col justify-start items-center">
            {{-- Block Header --}}
            <div class="py-4 w-full flex flex-row justify-start items-start gap-2  col-start-1 col-end-8">
                {{-- Icon --}}
                <svg class="text-danger w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="#000000"
                    fill="none">
                    <path d="M12 17H12.009" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M20 8.5V13.5C20 17.2712 20 19.1569 18.8284 20.3284C17.6569 21.5 15.7712 21.5 12 21.5C8.22876 21.5 6.34315 21.5 5.17157 20.3284C4 19.1569 4 17.2712 4 13.5V8.5"
                        stroke="currentColor" stroke-width="1.5" />
                    <path
                        d="M22 10.5L17.6569 6.33548C14.9902 3.77849 13.6569 2.5 12 2.5C10.3431 2.5 9.00981 3.77849 6.34315 6.33548L2 10.5"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>

                        {{-- End Icon --}}

                {{-- Icon arrow --}}
                <svg class="w-4 h-4 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="#000000" fill="none">
                    <path d="M9.00005 6C9.00005 6 15 10.4189 15 12C15 13.5812 9 18 9 18" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                {{-- End Icon Arrow --}}

                        {{-- --}}
                        <p class="text-base">Name</p>
                        {{-- --}}
                    </div>

                    <div class="w-full flex flex-row justify-between  items-start gap-2">
                        {{-- Block of Left --}}
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

                    {{--  --}}
                    <h1 class="uppercase font-medium text-xl">Size</h1>

                    {{--  --}}
                </div>
                {{-- End Block  Left --}}

                
                {{-- Block of Riht --}}
                <div class="w-full    col-span-5 ">
                    {{-- Block Header of Content --}}
                    <div class="flex flex-row justify-between items-center">


                        {{-- Block Option --}}
                        <!-- Defauft sorting Button -->
                        <button id="buttonSet"
                            class="flex flex-row justify-between items-center gap-16 border rounded-md p-3 relative z-[5]">
                            <p class="pl-2 text-sm">Default sorting</p>

                            <!-- Block Icon -->


                            <svg id="reteteIcon" class="w-4 text-secondary  duration-300 ease-linear"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>


                            <!-- Block Item (Dropdown List) -->
                            <ul id="listSet"
                                class="text-left bg-white boxShadows rounded-md border absolute top-8 left-0 right-0 hidden opacity-0 transform transition-all duration-300 ease-in-out scale-95 translate-y-4">
                                <li class="p-2 px-4 hover:bg-slate-100 font-medium text-sm">Default sorting</li>
                                <li class="p-2 px-4 hover:bg-slate-100  text-sm">Price low-high</li>
                                <li class="p-2 px-4 hover:bg-slate-100  text-sm">Price high-low</li>
                            </ul>
                        </button>

                        <!-- JavaScript dop-->
                        {{-- End Defauft sorting --}}


                        {{-- Block App --}}
                        <div  class="flex flex-row justify-end items-center gap-3">
                            {{-- Icon App --}}
                            <button id="shortlist"   class="text-white py-2 px-3 rounded-sm bg-danger border border-danger">
                                <svg class="w-4  font-medium" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="none">
                                    <circle cx="17.75" cy="6.25" r="4.25" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle cx="6.25" cy="6.25" r="4.25" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle cx="17.75" cy="17.75" r="4.25" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle cx="6.25" cy="17.75" r="4.25" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                            </button>

                            {{-- Icon --}}
                            <button  id="shortnonlist" class=" text-sceondary py-2 px-3 rounded-sm border  border-danger">
                                <svg class="w-4 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M11 5.5L21 5.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path
                                        d="M5.4 16.8926C6.46667 17.607 7 17.9642 7 18.5C7 19.0358 6.46667 19.393 5.4 20.1074C4.33333 20.8218 3.8 21.1789 3.4 20.9111C3 20.6432 3 19.9288 3 18.5C3 17.0712 3 16.3568 3.4 16.0889C3.8 15.8211 4.33333 16.1782 5.4 16.8926Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M5.4 3.89263C6.46667 4.60702 7 4.96421 7 5.5C7 6.03579 6.46667 6.39298 5.4 7.10737C4.33333 7.82176 3.8 8.17895 3.4 7.91105C3 7.64316 3 6.92877 3 5.5C3 4.07123 3 3.35684 3.4 3.08895C3.8 2.82105 4.33333 3.17824 5.4 3.89263Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M11 12L21 12" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path d="M11 18.5L21 18.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            {{--  --}}
                        </div>
                        {{-- End Block App --}}
                    </div>
                    {{-- -------------------------------------------------------------- --}}
                    {{-- -------------------------------------------------------------- --}}

                    {{-- Content --}}
                    {{-- Chage List Items --}}
                    <div id="list-Items" class="content mt-4 grid grid-cols-3 gap-2 ">
                        @foreach ($products as $product)
                            <div  id="changesItems"
                                class="box-father w-full min-h-80 rounded-md border flex flex-col justify-start items-center relative z-0">
                                <div
                                    class="py-8 w-full h-[6cm] rounded-t-md bg-slate-100 flex flex-row justify-center items-center">
                                    <img class="w-40 h-[6cm] object-cover"
                                        src="{{ asset('images/'.$product->image) }}"
                                        alt="">
                                </div>
                            </div>
                            {{-- End Price --}}

                            <script>
                                const slider = document.getElementById('slider');
                                const minPrice = document.getElementById('minPrice');
                                const maxPrice = document.getElementById('maxPrice');

                                        <style>
                                            .box {
                                                background-color: rgba(236, 240, 241, 0.5)
                                            }
                                        </style>
                                        {{--  --}}
                                        <button id="button-details"
                                            class="p-2 rounded-full bg-danger text-white hover:bg-sceondary ease-linear duration-150">
                                            <svg class="text-white w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                            </svg>
                                        </button>

                                        {{--  --}}
                                        <button
                                            class="p-2 rounded-full bg-danger text-white hover:bg-sceondary ease-linear duration-150">
                                            <svg class="text-white w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                {{-- End Bloci Icon --}}

                                <div class=" p-5 text-left w-full ">
                                    <h3 class="text-lg font-medium  text-left w-full text-gray-600">{{ $product->name }}
                                    </h3>
                                    {{-- Block Price --}}
                                    <div class="flex flex-row justify-start items-center gap-3 mt-1">
                                        @if ($product->discount > 0)
                                            <p class="text-danger font-medium">${{ $product->discount }}</p>
                                            <p class="font-medium text-slate-500 text-sm line-through">
                                                ${{ $product->price }}</p>
                                        @else
                                            <p class="text-danger font-medium">${{ $product->price }}</p>
                                        @endif
                                    </div>

                                    {{-- End Block Price --}}

                                    {{-- Block Star --}}
                                    <div class="flex flex-row justify-start items-center gap-2">
                                        {{-- Star 1 --}}
                                        <svg class="w-4 text-transparent fill-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        {{-- Star 2 --}}
                                        <svg class="w-4 text-transparent fill-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        {{-- Star 3 --}}
                                        <svg class="w-4 text-transparent fill-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        {{-- Star 4 --}}
                                        <svg class="w-4 text-transparent fill-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        {{-- Star 5 --}}
                                        <p class="text-slate-500 text-sm">(150)</p>
                                    </div>


                                    <svg id="reteteIcon" class="w-4 text-secondary  duration-300 ease-linear"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                {{--  --}}
                                {{-- Buttn Add to cart --}}
                                <button
                                    class="children-2 bg-danger rounded-sm text-white font-medium  hover:bg-white hover:text-slate-600 duration-300 ease-in-out px-5 py-2 border border-danger absolute bottom-0 left-4">ADD
                                    TO CART
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

    {{-- Pop UP Detail --}}
    <div id="overlay"
        class=" w-full h-screen hidden overlay fixed top-0 right-0 left-0 pop p-8 z-50 justify-center items-center">
        <div id="pop-detail" class="w-9/12 h-[14cm] bg-white rounded-sm boxShadow  overflow-y-auto">
            {{-- Icon Close --}}
            <div class="w-full flex flex-row justify-end items-center p-2">
                <button class="p-1 rounded-sm bg-danger">
                    <svg class="w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999"
                            stroke="currentColor"/><div class="container flex items-center  justify-center">
                            <div class="w-11/12  flex flex-col justify-start items-center">
                                {{-- Block Header --}}
                                <div
                                    class="py-4 w-full flex flex-row justify-start items-start gap-2  col-start-1 col-end-8">
                                    {{-- Icon --}}
                                    <svg class="text-danger w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" color="#000000" fill="none">
                                        <path d="M12 17H12.009" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M20 8.5V13.5C20 17.2712 20 19.1569 18.8284 20.3284C17.6569 21.5 15.7712 21.5 12 21.5C8.22876 21.5 6.34315 21.5 5.17157 20.3284C4 19.1569 4 17.2712 4 13.5V8.5"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path
                                            d="M22 10.5L17.6569 6.33548C14.9902 3.77849 13.6569 2.5 12 2.5C10.3431 2.5 9.00981 3.77849 6.34315 6.33548L2 10.5"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>

                                    {{-- End Icon --}}

                                    {{-- Icon arrow --}}
                                    <svg class="w-4 h-4 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        color="#000000" fill="none">
                                        <path d="M9.00005 6C9.00005 6 15 10.4189 15 12C15 13.5812 9 18 9 18"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    {{-- End Icon Arrow --}}

                                    {{--  --}}
                                    <p class="text-base">Name</p>
                                    {{--  --}}
                                </div>


                                <div class="w-full flex flex-row justify-between  items-start gap-2">
                                    {{-- Block of Left --}}
                                    <div class="w-4/12 p-4  boxShadow bg-white mb-4">
                                        <h1 class="uppercase font-medium text-xl">categories</h1>

                                        {{-- Women --}}
                                        <div class="mt-2 flex flex-row justify-between items-center">
                                            <label class="peer flex flex-row gap-4 cursor-pointer">
                                                <input type="checkbox" name="todo[1]" checked
                                                    class="w-4  appearance-auto" />
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

                                        {{--  --}}
                                        <h1 class="uppercase font-medium text-xl">Brands</h1>

                                        {{-- Adidas --}}
                                        <div class="mt-2 flex flex-row justify-between items-center">
                                            <label class="peer flex flex-row gap-4 cursor-pointer">
                                                <input type="checkbox" name="todo[1]" checked
                                                    class="w-4  appearance-auto" />
                                                <p>Adidas</p>
                                            </label>
                                            <p>(16)</p>
                                        </div>

                                        {{-- End Adidas --}}

                                        {{-- Nike --}}
                                        <div class="mt-2 flex flex-row justify-between items-center">
                                            <label class="peer flex flex-row gap-4 cursor-pointer">
                                                <input type="checkbox" name="todo[1]" checked
                                                    class="w-4  appearance-auto" />
                                                <p>Nike</p>
                                            </label>
                                            <p>(16)</p>
                                        </div>

                                        {{-- End Nike --}}

                                        {{-- Easy --}}
                                        <div class="mt-2 flex flex-row justify-between items-center">
                                            <label class="peer flex flex-row gap-4 cursor-pointer">
                                                <input type="checkbox" name="todo[1]" checked
                                                    class="w-4  appearance-auto" />
                                                <p>Easy</p>
                                            </label>
                                            <p>(16)</p>
                                        </div>

                                        {{-- End Easy --}}


                                        {{-- Arong --}}
                                        <div class="mt-2 flex flex-row justify-between items-center">
                                            <label class="peer flex flex-row gap-4 cursor-pointer">
                                                <input type="checkbox" name="todo[1]" checked
                                                    class="w-4  appearance-auto" />
                                                <p>Arong</p>
                                            </label>
                                            <p>(16)</p>
                                        </div>

                                        {{-- End Arong --}}


                                        <hr class="my-4">

                                        {{--  --}}
                                        <h1 class="uppercase font-medium text-xl">Price</h1>

                                        {{-- Price --}}
                                        <div class="mt-4">
                                            <input id="slider" type="range" min="0" max="100"
                                                value="1"
                                                class="w-full h-2 bg-gray-300 rounded-lg appearance-none cursor-pointer accent-red-500" />
                                            <div
                                                class="flex justify-start items-center text-base font-medium gap-2 text-gray-600 mt-2">
                                                <p id="minPrice">$1</p>
                                                <p>-</p>
                                                <p id="maxPrice">$50</p>
                                            </div>
                                        </div>
                                        {{-- End Price --}}

                                        {{-- <script>
                                            const slider = document.getElementById('slider');
                                            const minPrice = document.getElementById('minPrice');
                                            const maxPrice = document.getElementById('maxPrice');

                                            slider.addEventListener('input', () => {
                                                const value = slider.value;
                                                minPrice.textContent = `$${value}`;
                                                maxPrice.textContent = `$${Math.max(50, value + 50)}`; // Adjust max value as needed
                                            });
                                        </script> --}}


                                        <hr class="my-4">

                                        {{--  --}}
                                        <h1 class="uppercase font-medium text-xl">Size</h1>

                                        {{--  --}}
                                    </div>
                                    {{-- End Block  Left --}}

                                    {{-- Block of Riht --}}
                                    <div class="w-full    col-span-5 ">
                                        {{-- Block Header of Content --}}
                                        <div class="flex flex-row justify-between items-center">


                                            {{-- Block Option --}}
                                            <!-- Defauft sorting Button -->
                                            <button id="buttonSet"
                                                class="flex flex-row justify-between items-center gap-16 border rounded-md p-3 relative z-[5]">
                                                <p class="pl-2 text-sm">Default sorting</p>

                                                <!-- Block Icon -->


                                                <svg id="reteteIcon" class="w-4 text-secondary  duration-300 ease-linear"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="none">
                                                    <path d="M18 9.00005C18 9.00005 13.5811 15 12 15C10.4188 15 6 9 6 9"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>


                                                <!-- Block Item (Dropdown List) -->
                                                <ul id="listSet"
                                                    class="text-left bg-white boxShadows rounded-md border absolute top-8 left-0 right-0 hidden opacity-0 transform transition-all duration-300 ease-linear scale-95 translate-y-4">
                                                    <li class="p-2 px-4 hover:bg-slate-100 font-medium text-sm">Default
                                                        sorting</li>
                                                    <li class="p-2 px-4 hover:bg-slate-100  text-sm">Price low-high</li>
                                                    <li class="p-2 px-4 hover:bg-slate-100  text-sm">Price high-low</li>
                                                </ul>
                                            </button>
                                            <script type="text/javascript">

                                                function sortByPrice(orderDir = 'asc'){
                                                   window.location.href="{{URL::to('/')}}/eshop?orderDir="+orderDir

                                                }

                                            </script>

                                            <!-- JavaScript dop-->
                                            {{-- End Defauft sorting --}}


                                            {{-- Block App --}}
                                            <div class="flex flex-row justify-end items-center gap-3">
                                                {{-- Icon App --}}
                                                <a href="#"
                                                    class="text-white py-2 px-3 rounded-sm bg-danger border border-danger">
                                                    <svg class="w-4 text-white font-medium"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="none">
                                                        <circle cx="17.75" cy="6.25" r="4.25"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                        <circle cx="6.25" cy="6.25" r="4.25"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                        <circle cx="17.75" cy="17.75" r="4.25"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                        <circle cx="6.25" cy="17.75" r="4.25"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                    </svg>
                                                </a>

                                                {{-- Icon --}}
                                                <a href="#"
                                                    class=" py-2 px-3 rounded-sm border text-danger border-danger">
                                                    <svg class="w-4 text-sceondary" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path d="M11 5.5L21 5.5" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path
                                                            d="M5.4 16.8926C6.46667 17.607 7 17.9642 7 18.5C7 19.0358 6.46667 19.393 5.4 20.1074C4.33333 20.8218 3.8 21.1789 3.4 20.9111C3 20.6432 3 19.9288 3 18.5C3 17.0712 3 16.3568 3.4 16.0889C3.8 15.8211 4.33333 16.1782 5.4 16.8926Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path
                                                            d="M5.4 3.89263C6.46667 4.60702 7 4.96421 7 5.5C7 6.03579 6.46667 6.39298 5.4 7.10737C4.33333 7.82176 3.8 8.17895 3.4 7.91105C3 7.64316 3 6.92877 3 5.5C3 4.07123 3 3.35684 3.4 3.08895C3.8 2.82105 4.33333 3.17824 5.4 3.89263Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path d="M11 12L21 12" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path d="M11 18.5L21 18.5" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                {{--  --}}
                                            </div>
                                            {{-- End Block App --}}
                                        </div>

                                        {{-- Content --}}
                                        <div class="content mt-4 flex flex-wrap gap-5 ">
                                            @foreach ($products as $index => $product)
                                                <div
                                                    class="box-father w-[calc(33.6%-1rem)] min-h-80 rounded-md border flex flex-col justify-start items-center relative z-0">
                                                    <div
                                                        class="py-2 w-full  h-[6cm] rounded-t-md bg-slate-100 flex flex-row justify-center items-center">
                                                        <img class="h-[5cm] "
                                                            src="{{ asset('images/' . $product->image) }}" alt="">
                                                    </div>

                                                    {{-- Block Icon --}}
                                                    <div
                                                        class="children-1 py-8  h-[6cm] w-full rounded-t-md box flex flex-row justify-center items-center absolute top-0">
                                                        <div class="flex flex-row gap-3">
                                                            {{--  --}}

                                                            {{-- Block Detail ro User Icon Search  --}}
                                                            <!-- Button with corrected id attribute -->
                                                            <button id="buttonSetDefault-{{ $index }}"
                                                                type="button"
                                                                class="p-2 rounded-full bg-danger text-white hover:bg-secondary ease-linear duration-150">
                                                                <svg class="text-white w-5"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path d="M17.5 17.5L22 22" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </button>


                                                            {{--  --}}
                                                            <button
                                                                class="p-2 rounded-full bg-danger text-white hover:bg-sceondary ease-linear duration-150">
                                                                <svg class="text-white w-5"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    {{-- End Block Icon --}}

                                                    <div class=" p-5 text-left w-full ">
                                                        <h3 class="text-lg font-medium  text-left w-full text-gray-600">
                                                            {{ $product->name }}
                                                        </h3>
                                                        {{-- Block Price --}}
                                                        <div class="flex flex-row justify-start items-center gap-3  mt-1">
                                                            @if ($product->discount > 0)
                                                                <p class="text-danger font-medium">{{ $product->discount }}
                                                                </p>
                                                                <p class="font-medium text-slate-500 text-sm line-through">
                                                                    ${{ $product->price }}</p>
                                                            @else
                                                                <p class="text-danger font-medium">${{ $product->price }}
                                                                </p>
                                                            @endif

                                                        </div>
                                                        {{-- End Block Price --}}



                                                        {{-- Block Star --}}
                                                        <div class="flex flex-row justify-start items-center gap-2">
                                                            {{-- Star 1 --}}
                                                            <svg class="w-4 text-transparent fill-yellow-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            {{-- Star 2 --}}
                                                            <svg class="w-4 text-transparent fill-yellow-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            {{-- Star 3 --}}
                                                            <svg class="w-4 text-transparent fill-yellow-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            {{-- Star 4 --}}
                                                            <svg class="w-4 text-transparent fill-yellow-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            {{-- Star 5 --}}
                                                            <p class="text-slate-500 text-sm">(150)</p>
                                                        </div>


                                                    </div>

                                                    {{--  --}}
                                                    {{-- Buttn Add to cart --}}
                                                    <button
                                                        class="children-2 bg-danger rounded-sm text-white font-medium  hover:bg-white hover:text-slate-600 duration-300 ease-linear px-5 py-2 border border-danger absolute bottom-0 left-4">ADD
                                                        TO CART
                                                    </button>
                                                </div>

                                                {{-- Block POP UP START NOW  --}}
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        const button{{ $index }} = document.getElementById('buttonSetDefault-{{ $index }}');
                                                        const popup{{ $index }} = document.getElementById('popUpDetailt-{{ $index }}');
                                                        const close{{ $index }} = document.getElementById('closePopUp-{{ $index }}');
                                                        const popShow{{ $index }} = document.getElementById('pop-detail-{{ $index }}');


                                                        if (button{{ $index }} && popup{{ $index }} && close{{ $index }}) {
                                                            button{{ $index }}.addEventListener('click', () => {
                                                                popup{{ $index }}.classList.remove('hidden');
                                                                popup{{ $index }}.classList.add('flex');
                                                            });

                                                            close{{ $index }}.addEventListener('click', () => {
                                                                popup{{ $index }}.classList.remove('flex');
                                                                popup{{ $index }}.classList.add('hidden');
                                                            });
                                                        }

                                                        document.addEventListener('click', (e) => {
                                                            if (!button{{ $index }}.contains(e.target) && !popShow{{ $index }}.contains(
                                                                    e
                                                                    .target)) {
                                                                popup{{ $index }}.classList.remove('flex');
                                                                popup{{ $index }}.classList.add('hidden');
                                                            }
                                                        });
                                                    });
                                                </script>

                                                {{-- --------------------------------------------------------------------------------------- --}}
                                                {{-- Slider --}}
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        const mainImage{{ $index }} = document.getElementById('main-image-{{ $index }}');
                                                        const thumbnails{{ $index }} = document.querySelectorAll(
                                                            '#thumbnail-slider-{{ $index }} img');
                                                        let currentIndex{{ $index }} = 0;

                                                        const imageList{{ $index }} = Array.from(thumbnails{{ $index }}).map(thumbnail =>
                                                            thumbnail.src);

                                                        function updateMainImage(index) {
                                                            if (index >= 0 && index < imageList{{ $index }}.length) {
                                                                mainImage{{ $index }}.style.opacity = 0;
                                                                setTimeout(() => {
                                                                    mainImage{{ $index }}.src = imageList{{ $index }}[index];
                                                                    mainImage{{ $index }}.style.opacity = 1;
                                                                }, 500); // Match this duration to your CSS transition duration

                                                                currentIndex{{ $index }} = index;

                                                                // Remove 'active' class from all thumbnails
                                                                thumbnails{{ $index }}.forEach(thumb => thumb.classList.remove('active'));

                                                                // Add 'active' class to the current thumbnail
                                                                thumbnails{{ $index }}[index].classList.add('active');
                                                            }
                                                        }

                                                        document.getElementById('prev-btn-{{ $index }}').addEventListener('click', function() {
                                                            const newIndex = (currentIndex{{ $index }} > 0) ? currentIndex{{ $index }} -
                                                                1 : imageList{{ $index }}.length - 1;
                                                            updateMainImage(newIndex);
                                                        });

                                                        document.getElementById('next-btn-{{ $index }}').addEventListener('click', function() {
                                                            const newIndex = (currentIndex{{ $index }} < imageList{{ $index }}.length -
                                                                1) ? currentIndex{{ $index }} + 1 : 0;
                                                            updateMainImage(newIndex);
                                                        });

                                                        thumbnails{{ $index }}.forEach((thumbnail, index) => {
                                                            thumbnail.addEventListener('click', function() {
                                                                updateMainImage(index);
                                                            });
                                                        });

                                                        // Initialize with the first image
                                                        updateMainImage(currentIndex{{ $index }});
                                                    });
                                                </script>

                                                <style>
                                                    .active {
                                                        border: 2px solid blue;
                                                        /* Example styling */
                                                    }
                                                </style>

                                                {{-- Pop UP Detail --}}
                                                <div id="popUpDetailt-{{ $index }}"
                                                    class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 justify-center items-center z-50"
                                                    role="dialog" aria-hidden="true">
                                                    <div id="pop-detail-{{ $index }}"
                                                        class="w-9/12 h-[14cm] bg-white rounded-sm boxShadow  overflow-y-auto">
                                                        {{-- Icon Close --}}
                                                        <div class="w-full flex flex-row justify-end items-center p-2">
                                                            <button id="closePopUp-{{ $index }}"
                                                                class="p-1 rounded-sm bg-danger">
                                                                <svg class="w-4 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        {{-- End Icon Close --}}

                                                        {{-- Block Contents --}}
                                                        <div class="w-full flex flex-row justify-between px-6 gap-5 ">
                                                            {{-- Block Left --}}
                                                            <div class="w-[47.5%] h-[12cm]">
                                                                <!-- Main Image Container -->
                                                                <div class="relative w-full h-full overflow-hidden">
                                                                    <div id="slider-{{ $index }}"
                                                                        class="relative w-full h-full overflow-hidden">
                                                                        <img id="main-image-{{ $index }}"
                                                                            class="w-full h-full object-cover transition-opacity duration-300"
                                                                            src="{{ asset('images/' . $product->image) }}"
                                                                            alt="Main Image">
                                                                    </div>

                                                                    <!-- Navigation Buttons -->
                                                                    <div
                                                                        class="absolute inset-x-0 top-1/2 flex justify-between transform -translate-y-1/2 px-2">
                                                                        <button id="prev-btn-{{ $index }}"
                                                                            class="boxShadows bg-white p-2 rounded-full flex justify-center items-center">
                                                                            <svg class="w-6"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M15 6L9 12L15 18"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </button>

                                                                        <button id="next-btn-{{ $index }}"
                                                                            class="boxShadows bg-white p-2 rounded-full flex justify-center items-center">
                                                                            <svg class="w-6"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M9 6L15 12L9 18"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                                <!-- Thumbnails -->
                                                                @php
                                                                    $childrenImages = [
                                                                        asset('images/' . $product->image),
                                                                        'https://themes.programmingkit.xyz/rafcart/assets/images/slider-1.png',
                                                                        'https://themes.programmingkit.xyz/rafcart/assets/images/slider-2.png',
                                                                        'https://themes.programmingkit.xyz/rafcart/assets/images/slider-3.png',
                                                                        'https://themes.programmingkit.xyz/rafcart/assets/images/slider-4.png',
                                                                        'https://themes.programmingkit.xyz/rafcart/assets/images/slider-5.png',
                                                                    ];
                                                                @endphp
                                                                <div id="thumbnail-slider-{{ $index }}"
                                                                    class="bottom-0 w-full flex justify-center space-x-2 py-1">
                                                                    @foreach ($childrenImages as $thumbIndex => $image)
                                                                        <img class="w-16 h-16 cursor-pointer object-cover"
                                                                            src="{{ $image }}"
                                                                            alt="Thumbnail {{ $thumbIndex + 1 }}"
                                                                            data-index="{{ $thumbIndex }}">
                                                                    @endforeach
                                                                </div>
                                                            </div>


                                                            {{-- End Block left --}}

                                                            {{-- Block right --}}
                                                            <div
                                                                class="w-[52.5%] flex flex-col justify-start items-start gap-2">
                                                                <h1 class="text-2xl uppercase font-medium ">
                                                                    {{ $product->name }}</h1>
                                                                <div
                                                                    class="flex flex-row justify-start items-center gap-1">
                                                                    {{-- Star 1 --}}
                                                                    <svg class="w-4 h-4 fill-yellow-400 text-transparent"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    {{-- Star 2 --}}
                                                                    <svg class="w-4 h-4 fill-yellow-400 text-transparent"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    {{-- Star 3 --}}
                                                                    <svg class="w-4 h-4 fill-yellow-400 text-transparent"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    {{-- Star 4 --}}
                                                                    <svg class="w-4 h-4 fill-yellow-400 text-transparent"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    {{-- Star 5 --}}
                                                                    <svg class="w-4 h-4 fill-yellow-400 text-transparent"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M13.7276 3.44418L15.4874 6.99288C15.7274 7.48687 16.3673 7.9607 16.9073 8.05143L20.0969 8.58575C22.1367 8.92853 22.6167 10.4206 21.1468 11.8925L18.6671 14.3927C18.2471 14.8161 18.0172 15.6327 18.1471 16.2175L18.8571 19.3125C19.417 21.7623 18.1271 22.71 15.9774 21.4296L12.9877 19.6452C12.4478 19.3226 11.5579 19.3226 11.0079 19.6452L8.01827 21.4296C5.8785 22.71 4.57865 21.7522 5.13859 19.3125L5.84851 16.2175C5.97849 15.6327 5.74852 14.8161 5.32856 14.3927L2.84884 11.8925C1.389 10.4206 1.85895 8.92853 3.89872 8.58575L7.08837 8.05143C7.61831 7.9607 8.25824 7.48687 8.49821 6.99288L10.258 3.44418C11.2179 1.51861 12.7777 1.51861 13.7276 3.44418Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                    {{-- Parapgram --}}
                                                                    <p class="text-sm text-gray-500 font-[100] ml-2 ">50
                                                                        Reviews</p>
                                                                </div>

                                                                {{-- End Block Star --}}
                                                                <div
                                                                    class="flex flex-row justify-start items-center gap-2">
                                                                    <h3 class="font-medium">Availability:</h3>
                                                                    <h3 class="font-medium text-green-600">In Stock</h3>
                                                                </div>

                                                                {{--  --}}
                                                                <div
                                                                    class="flex flex-row justify-start items-center gap-2">
                                                                    <h3 class="font-medium">Brand:</h3>
                                                                    <p>Bata</p>
                                                                </div>


                                                                {{--  --}}
                                                                <div
                                                                    class="flex flex-row justify-start items-center gap-2">
                                                                    <h3 class="font-medium">Category:</h3>
                                                                    <p>{{ $product->category->name ?? 'Not' }}</p>
                                                                </div>

                                                                {{--  --}}
                                                                <div
                                                                    class="flex flex-row justify-start items-center gap-2">
                                                                    <h3 class="font-medium">SKU:</h3>
                                                                    <p>BE45VGRT</p>
                                                                </div>


                                                                {{--  --}}
                                                                <div
                                                                    class="flex flex-row justify-start items-center gap-3">
                                                                    @if (!empty($product->discount))
                                                                        <p class="line-through font-medium text-gray-500">
                                                                            ${{ $product->price }}</p>
                                                                        <h3 class="text-xl text-danger font-medium">
                                                                            ${{ $product->discount }}</h3>
                                                                        <span
                                                                            class="flex flex-row justify-center items-center bg-danger p-1 text-xs text-white relative">
                                                                            <div
                                                                                class="border-r-[16px] border-r-danger border-t-[12px] border-t-transparent  border-b-[12px] border-b-transparent  border-l-[0px] border-l-transparent absolute top-0 bottom-0 -left-3">
                                                                            </div>
                                                                            <p>-30%</p>
                                                                        </span>
                                                                    @else
                                                                        <h3 class="text-xl text-danger font-medium">
                                                                            ${{ $product->price }}</h3>
                                                                    @endif



                                                                </div>

                                                                {{-- Block Title  --}}
                                                                <p>{{ $product->description }}</p>

                                                                {{-- Block Size --}}
                                                                <div
                                                                    class=" w-full flex flex-col justify-start items-start">
                                                                    <form action="/add-to-cart" method="POST">
                                                                        <!-- Size Selection -->
                                                                        <div class="mb-4">
                                                                            <label
                                                                                class="block text-gray-700  mb-2">Size</label>
                                                                            <div class="flex space-x-2 text-xs">
                                                                                <button type="button"
                                                                                    class="px-2 py-1 border rounded-md bg-gray-100 hover:bg-gray-200 transition duration-300">XS</button>
                                                                                <button type="button"
                                                                                    class="px-2 py-1 border rounded-md bg-gray-100 hover:bg-gray-200 transition duration-300">S</button>
                                                                                <button type="button"
                                                                                    class="px-2 py-1 border rounded-md bg-gray-100 hover:bg-gray-200 transition duration-300">M</button>
                                                                                <button type="button"
                                                                                    class="px-2 py-1 border rounded-md bg-gray-100 hover:bg-gray-200 transition duration-300">L</button>
                                                                                <button type="button"
                                                                                    class="px-2 py-1 border rounded-md bg-gray-100 hover:bg-gray-200 transition duration-300">XL</button>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Color Selection -->
                                                                        <div
                                                                            class="flex flex-col justify-center items-start gap-2 mb-4">
                                                                            <h1>Color</h1>
                                                                            <div class="flex space-x-2 text-xs">
                                                                                <button type="button"
                                                                                    class="size-6 border rounded-md bg-red-500 text-white hover:bg-red-600 transition duration-300"></button>
                                                                                <button type="button"
                                                                                    class="size-6 border rounded-md bg-white text-black hover:bg-gray-100 transition duration-300"></button>
                                                                                <button type="button"
                                                                                    class="size-6 border rounded-md bg-black text-white hover:bg-gray-800 transition duration-300"></button>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Quantity Selection -->
                                                                        <div
                                                                            class="flex flex-col justify-start items-start gap-2 mb-6">
                                                                            <h1>Quantity</h1>
                                                                            <div
                                                                                class="flex flex-row justify-start items-center">
                                                                                <button type="button" id="decrease-btn"
                                                                                    class="px-2 py-1 border rounded-l-md bg-gray-100 hover:bg-gray-200 transition duration-300">-</button>
                                                                                <input type="number" id="quantity"
                                                                                    name="quantity" min="1"
                                                                                    value="1"
                                                                                    class="px-2 py-1 border-y text-gray-700 w-16 text-center">
                                                                                <button type="button" id="increase-btn"
                                                                                    class="px-2 py-1 border rounded-r-md bg-gray-100 hover:bg-gray-200 transition duration-300">+</button>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Submit Button -->
                                                                        <div
                                                                            class="flex flex-row justify-start gap-4 items-center">
                                                                            <button
                                                                                class="flex flex-row justify-center items-center  px-6 py-2 border gap-2 bg-danger text-white rounded-sm border-danger hover:bg-white duration-200 ease-linear hover:text-danger">
                                                                                {{-- Icon --}}
                                                                                <svg class="w-5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M8 16H15.2632C19.7508 16 20.4333 13.1808 21.261 9.06908C21.4998 7.88311 21.6192 7.29013 21.3321 6.89507C21.045 6.5 20.4947 6.5 19.3941 6.5H6"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round" />
                                                                                    <path
                                                                                        d="M8 16L5.37873 3.51493C5.15615 2.62459 4.35618 2 3.43845 2H2.5"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round" />
                                                                                    <path
                                                                                        d="M8.88 16H8.46857C7.10522 16 6 17.1513 6 18.5714C6 18.8081 6.1842 19 6.41143 19H17.5"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <circle cx="10.5" cy="20.5"
                                                                                        r="1.5" stroke="currentColor"
                                                                                        stroke-width="1.5" />
                                                                                    <circle cx="17.5" cy="20.5"
                                                                                        r="1.5" stroke="currentColor"
                                                                                        stroke-width="1.5" />
                                                                                </svg>
                                                                                {{--  --}}
                                                                                <p class="uppercase">Add to Cart</p>
                                                                            </button>

                                                                            {{-- Block Fovarite --}}
                                                                            <button
                                                                                class="flex flex-row justify-center items-center  px-6 py-2 border gap-2 hover:bg-danger hover:text-white rounded-sm border-danger bg-white duration-200 ease-linear text-danger ">
                                                                                {{-- Icon --}}
                                                                                <svg class="w-5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round" />
                                                                                </svg>
                                                                                {{--  --}}
                                                                                <p class="uppercase">wishlist</p>
                                                                            </button>
                                                                            {{-- End Block Fovarite --}}
                                                                        </div>
                                                                    </form>

                                                                    <hr class="my-6 w-full">

                                                                    <div
                                                                        class="mb-8 flex flex-row justify-start items-center gap-2">
                                                                        <a href="#"
                                                                            class="p-1 rounded-full border active:bg-slate-200 hover:bg-slate-100">
                                                                            <svg class="w-5  fill-sceondary"
                                                                                viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M15.1742424,5.3203125 L17,5.3203125 L17,2.140625 C16.6856061,2.09765625 15.6022727,2 14.3409091,2 C11.7083333,2 9.90530303,3.65625 9.90530303,6.69921875 L9.90530303,9.5 L7,9.5 L7,13.0546875 L9.90530303,13.0546875 L9.90530303,22 L13.4659091,22 L13.4659091,13.0546875 L16.2537879,13.0546875 L16.6969697,9.5 L13.4659091,9.5 L13.4659091,7.05078125 C13.4659091,6.0234375 13.7424242,5.3203125 15.1742424,5.3203125 Z" />
                                                                            </svg>
                                                                        </a>

                                                                        {{-- Twitter --}}
                                                                        <a href="#"
                                                                            class="p-1 rounded-full border active:bg-slate-200 hover:bg-slate-100">
                                                                            <svg class="w-5 text-sceondary"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 18.5C3.76504 19.521 5.81428 20 8 20C14.4808 20 19.7617 14.8625 19.9922 8.43797L22 4.5L18.6458 5C17.9407 4.37764 17.0144 4 16 4C13.4276 4 11.5007 6.51734 12.1209 8.98003C8.56784 9.20927 5.34867 7.0213 3.48693 4.10523C2.25147 8.30185 3.39629 13.3561 6.5 16.4705C6.5 17.647 3.5 18.3488 2 18.5Z"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </a>

                                                                        {{-- Block Instagram --}}
                                                                        <a href="#"
                                                                            class="p-1 rounded-full border active:bg-slate-200 hover:bg-slate-100">
                                                                            <svg class="w-5 text-sceondary"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M17.5078 6.5L17.4988 6.5"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>


                                                        {{-- End Block right --}}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                    {{-- End Block of Riht --}}
                                </div>
                            </div>
            </div>


            {{-- End Block Items image list --}}

            <style>
                #thumbnail-slider img.active {
                    border: 2px solid #007bff;
                    /* Change this to your desired active border color */
                }

                #main-image {
                    transition: opacity 0.5s ease-out;
                }

                .box {
                    background-color: rgba(77, 219, 255, 0.137)
                }
            </style>



            <style>
                .pop {
                    background-color: rgba(0, 0, 0, 0.4)
                }

                /*  */
                .box-father>.children-1 {
                    opacity: 0;
                    transition: all 0.4s ease-in-out;
                    /* transform: translateY(-20px); */
                }

                .box-father:hover>.children-1 {
                    opacity: 1;
                    /* transform: translateY(0px); */
                }

                .box-father>.children-2 {
                    opacity: 0;
                    transition: all 0.4 ease-in-out;
                    transform: translateY(0px);
                }

                .box-father:hover>.children-2 {
                    opacity: 1;
                    transform: translateY(-20px);
                }

                .pop-detail {
                    opacity: 0;
                    transition: all 0.4sease-linear;
                    transform: scale3d(1.09);
                }
            </style>
        @endsection

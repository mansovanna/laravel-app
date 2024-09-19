@extends('eshop.layouts.master')

@section('content')
<div class="container flex items-center  justify-center">
    <div class="w-11/12  flex flex-col justify-start items-center">
        {{-- Block Header --}}
        <div class="py-4 w-full flex flex-row justify-start items-start gap-2  col-start-1 col-end-8">
            {{-- Icon --}}
            <a href="{{ route('eshop.home') }}">
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
            </a>

            {{-- End Icon --}}

            {{-- Icon arrow --}}
            <svg class="w-4 h-4 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="#000000" fill="none">
                <path d="M9.00005 6C9.00005 6 15 10.4189 15 12C15 13.5812 9 18 9 18" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            {{-- End Icon Arrow --}}

            {{-- --}}
            <p class="text-base">Wish List</p>
            {{-- --}}
        </div>
        {{-- End Block Headrt --}}

        <div class="w-full flex flex-row justify-between  items-start gap-4 ">
            {{-- Block Side Bar --}}
            <div class="w-4/12 flex flex-col justify-start items-start gap-4">
                {{-- section 1 --}}
                <div
                    class="w-full px-3 py-2 flex flex-row justify-start items-center bg-white shadow-md gap-2 rounded-sm">
                    <div class=" border p-1 rounded-full">
                        <img class=" w-10 h-10 rounded-full object-cover"
                            src="https://img.freepik.com/free-photo/portrait-man-laughing_23-2148859448.jpg?size=338&ext=jpg&ga=GA1.1.386372595.1726531200&semt=ais_hybrid"
                            alt="">
                    </div>
                    {{-- Block Name --}}
                    <div>
                        <h1>Hello!</h1>
                        <p class="font-medium">Russell Ahmed</p>
                    </div>
                    {{-- Block Name --}}
                </div>
                {{-- End section 1 --}}

                {{-- section 2 --}}
                <div class="w-full p-3 bg-white shadow-md flex flex-col justify-start items-start gap-2">
                    {{-- Icon --}}
                    <a href="#"
                        class="flex flex-row justify-start items-start gap-2 hover:text-danger duration-150 ease-in-out ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                            <path
                                d="M14 3.5H10C6.22876 3.5 4.34315 3.5 3.17157 4.67157C2 5.84315 2 7.72876 2 11.5V12.5C2 16.2712 2 18.1569 3.17157 19.3284C4.34315 20.5 6.22876 20.5 10 20.5H14C17.7712 20.5 19.6569 20.5 20.8284 19.3284C22 18.1569 22 16.2712 22 12.5V11.5C22 7.72876 22 5.84315 20.8284 4.67157C19.6569 3.5 17.7712 3.5 14 3.5Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path d="M5 16C6.03569 13.4189 9.89616 13.2491 11 16" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M9.75 9.75C9.75 10.7165 8.9665 11.5 8 11.5C7.0335 11.5 6.25 10.7165 6.25 9.75C6.25 8.7835 7.0335 8 8 8C8.9665 8 9.75 8.7835 9.75 9.75Z"
                                stroke="currentColor" stroke-width="1.5" />
                            <path d="M14 8.5H19M14 12H19M14 15.5H16.5" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <p class="font-bold">Manage My Account</p>
                    </a>
                    {{-- End Icon --}}

                    {{-- Block Name --}}
                    <ul class="w-full pl-8 flex flex-col gap-1">
                        <li><a href="#" class="hover:text-danger duration-150 ease-in-out ">Profile Information</a></li>
                        <li><a href="#" class="hover:text-danger duration-150 ease-in-out">Manage Address</a></li>
                        <li><a href="#" class="hover:text-danger duration-150 ease-in-out">Change Password</a></li>
                    </ul>
                    {{-- End Block Name --}}

                    <hr class="w-full my-2">

                    {{-- Items 2 --}}
                    <a href="#"
                        class="flex flex-row justify-start items-start gap-2 hover:text-danger duration-150 ease-in-out ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                            <path
                                d="M4 11V15C4 18.2998 4 19.9497 5.02513 20.9749C6.05025 22 7.70017 22 11 22H13C16.2998 22 17.9497 22 18.9749 20.9749C20 19.9497 20 18.2998 20 15V11"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M3 9C3 8.25231 3 7.87846 3.20096 7.6C3.33261 7.41758 3.52197 7.26609 3.75 7.16077C4.09808 7 4.56538 7 5.5 7H18.5C19.4346 7 19.9019 7 20.25 7.16077C20.478 7.26609 20.6674 7.41758 20.799 7.6C21 7.87846 21 8.25231 21 9C21 9.74769 21 10.1215 20.799 10.4C20.6674 10.5824 20.478 10.7339 20.25 10.8392C19.9019 11 19.4346 11 18.5 11H5.5C4.56538 11 4.09808 11 3.75 10.8392C3.52197 10.7339 3.33261 10.5824 3.20096 10.4C3 10.1215 3 9.74769 3 9Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path
                                d="M6 3.78571C6 2.79949 6.79949 2 7.78571 2H8.14286C10.2731 2 12 3.7269 12 5.85714V7H9.21429C7.43908 7 6 5.56091 6 3.78571Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path
                                d="M18 3.78571C18 2.79949 17.2005 2 16.2143 2H15.8571C13.7269 2 12 3.7269 12 5.85714V7H14.7857C16.5609 7 18 5.56091 18 3.78571Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path d="M12 11L12 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <p class="font-bold">My Order History</p>
                    </a>
                    {{-- End Icon --}}

                    {{-- Block Name --}}
                    <ul class="w-full pl-8 flex flex-col gap-1">
                        <li><a href="#" class="hover:text-danger duration-150 ease-in-out ">My Returns</a></li>
                        <li><a href="#" class="hover:text-danger duration-150 ease-in-out">My Cancellations</a></li>
                        <li><a href="#" class="hover:text-danger duration-150 ease-in-out"> My Reviews</a></li>
                    </ul>
                    {{-- End Block Name --}}

                    <hr class="w-full my-2">

                    {{-- Items 2 --}}
                    <a href="#"
                        class="flex flex-row justify-start items-start gap-2 hover:text-danger duration-150 ease-in-out ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                            <path
                                d="M2 12C2 8.46252 2 6.69377 3.0528 5.5129C3.22119 5.32403 3.40678 5.14935 3.60746 4.99087C4.86213 4 6.74142 4 10.5 4H13.5C17.2586 4 19.1379 4 20.3925 4.99087C20.5932 5.14935 20.7788 5.32403 20.9472 5.5129C22 6.69377 22 8.46252 22 12C22 15.5375 22 17.3062 20.9472 18.4871C20.7788 18.676 20.5932 18.8506 20.3925 19.0091C19.1379 20 17.2586 20 13.5 20H10.5C6.74142 20 4.86213 20 3.60746 19.0091C3.40678 18.8506 3.22119 18.676 3.0528 18.4871C2 17.3062 2 15.5375 2 12Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 16H11.5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14.5 16L18 16" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 9H22" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        </svg>

                        <p class="font-bold">Payments Methods</p>
                    </a>
                    {{-- End Icon --}}

                    {{-- Block Name --}}
                    <ul class="w-full pl-8 flex flex-col gap-1">
                        <li><a href="#" class="hover:text-danger duration-150 ease-in-out ">Voucher</a></li>
                    </ul>
                    {{-- End Block Name --}}


                    <hr class="w-full my-2">

                    {{-- Items 2 --}}
                    <a href="#"
                        class="flex flex-row justify-start items-start gap-2 hover:text-danger duration-150 ease-in-out ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                            <path
                                d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>

                        <p class="font-bold">My Wishlist</p>
                    </a>

                    {{-- End Block Name --}}

                    <hr class="w-full my-2">

                    {{-- Items 2 --}}
                    <a href="#"
                        class="flex flex-row justify-start items-start gap-2 hover:text-danger duration-150 ease-in-out ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                            <path
                                d="M6 6.50006C4.15875 8.14802 3 10.3345 3 13C3 17.9706 7.02944 22 12 22C16.9706 22 21 17.9706 21 13C21 10.3345 19.8412 8.14802 18 6.50006"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M12 2V11M12 2C11.2998 2 9.99153 3.9943 9.5 4.5M12 2C12.7002 2 14.0085 3.9943 14.5 4.5"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <p class="font-bold">My Wishlist</p>
                    </a>

                    {{-- End Block Name --}}


                    {{-- End Icon --}}
                </div>
                {{-- End section 2 --}}

            </div>
            {{-- End Block Side Bar --}}

            {{-- Block Content --}}
            <div class="w-full flex flex-col justify-start items-start gap-3">
                @forelse ($wishs as $wish)
                <div class="w-full p-4 border rounded-md flex flex-row justify-between items-center">
                    <div class="flex flex-row gap-2">
                        @php
                        // Decode the JSON string into an array
                        $images = json_decode($wish['image'], true);
                        @endphp

                        @if (!empty($images) && isset($images[0]))
                        <img class="w-20 h-20 object-cover" src="{{ asset('images/' . $images[0]) }}" alt="Image">
                        @else
                        <p>No images available.</p>
                        @endif


                        <div>
                            <p class="font-medium text-lg">{{ $wish['name'] }}</p>
                            <div class="flex flex-row justify-start items-center text-sm">
                                <p>Availability: </p>
                                <p class=" text-green-500"> In Stock</p>
                            </div>
                        </div>
                    </div>

                    {{-- --}}
                    <div class="flex flex-row items-center gap-8">
                        {{-- --}}
                        <p class="font-semibold text-danger text-lg">$45.00</p>
                        {{-- --}}

                        {{-- --}}
                        <a href="{{ route('add_to_cart', $wish['id']) }}"
                            class=" h-9 bg-danger px-3 gap-2 hover:bg-red-400 active:bg-danger rounded-sm flex flex-row justify-center items-center">

                            <svg class="w-5 h-5  text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M3 2H4.30116C5.48672 2 6.0795 2 6.4814 2.37142C6.88331 2.74285 6.96165 3.36307 7.11834 4.60351L8.24573 13.5287C8.45464 15.1826 8.5591 16.0095 9.09497 16.5048C9.63085 17 10.4212 17 12.002 17H22"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <circle cx="11.5" cy="19.5" r="1.5" stroke="currentColor" stroke-width="1.5" />
                                <circle cx="18.5" cy="19.5" r="1.5" stroke="currentColor" stroke-width="1.5" />
                                <path
                                    d="M18 14H16C14.1144 14 13.1716 14 12.5858 13.4142C12 12.8284 12 11.8856 12 10V8C12 6.11438 12 5.17157 12.5858 4.58579C13.1716 4 14.1144 4 16 4H18C19.8856 4 20.8284 4 21.4142 4.58579C22 5.17157 22 6.11438 22 8V10C22 11.8856 22 12.8284 21.4142 13.4142C20.8284 14 19.8856 14 18 14Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16.5 7L17.5 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            {{-- --}}
                            <p class="text-md text-white">Add to Cart</p>
                        </a>

                        {{-- Button Delete --}}
                        <form action="{{ route('wish.remove', $wish['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 rounded-full hover:bg-slate-100">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                                    color="#000000" fill="none">
                                    <path
                                        d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M9.5 16.5L9.5 10.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path d="M14.5 16.5L14.5 10.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                        </form>

                        {{-- End Delete --}}
                    </div>
                </div>


                @empty
                <p class="w-full p-4 bg-white rounded-md shadow-md">Not foun Product!</p>
                @endforelse
                {{-- End Block Content --}}
            </div>
        </div>
    </div>



    @endsection

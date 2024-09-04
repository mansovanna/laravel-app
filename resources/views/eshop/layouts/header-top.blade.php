<div class="w-full flex flex-row justify-center items-center shadow font-Roboto">
    <div class="w-11/12 px-8 py-6 flex flex-row justify-between items-center font-[500]">
        <!-- Logo of App -->
        <div class="flex flex-row items-center justify-start gap-20 text-center">
            <!-- Logo -->
            <img src="https://themes.programmingkit.xyz/rafcart/assets/images/svg/logo.svg" alt="">
            <!-- End Logo -->

            <!-- Menu -->
            <ul class="flex flex-row justify-start items-center gap-6">
                <li
                    class="father flex flex-row hover:text-red-500 justify-center items-center text-center cursor-pointer relative">
                    <p>Home</p>
                    <!-- Icon -->
                    <div class="icon-tran">
                        <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path fill="#231F20"
                                d="M15.563,40.836c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l15-15c0.391-0.391,0.391-1.023,0-1.414l-15-15c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14.293,14.293L15.563,39.422C15.172,39.813,15.172,40.446,15.563,40.836z" />
                        </svg>
                    </div>
                    <!-- End Icon -->

                    <!-- Dropdown -->
                    <ul
                        class="px-4 py-2 text-black child rounded-lg absolute -left-6 top-16 flex flex-col justify-start items-start w-[4.5cm] bg-white">
                        <li class="p-1 hover:text-red-500 duration-200 ease-linear"><a href="#">Home Page 1</a>
                        </li>
                        <li class="p-1 hover:text-red-500 duration-200 ease-linear"><a href="#">Home Page 2</a>
                        </li>
                        <li class="p-1 hover:text-red-500 duration-200 ease-linear"><a href="#">Home Page 3</a>
                        </li>
                    </ul>
                    <!-- End Dropdown -->
                </li>

                {{-- Shop --}}
                <li
                    class="father flex flex-row hover:text-red-500 justify-center items-center text-center cursor-pointer relative">
                    <p>Shop</p>
                    <!-- Icon -->
                    <div class="icon-tran">
                        <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path fill="#231F20"
                                d="M15.563,40.836c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l15-15c0.391-0.391,0.391-1.023,0-1.414l-15-15c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14.293,14.293L15.563,39.422C15.172,39.813,15.172,40.446,15.563,40.836z" />
                        </svg>
                    </div>
                    <!-- End Icon -->

                    <!-- Dropdown -->
                    <ul
                        class="px-4 py-2 text-black child rounded-lg absolute -left-6 top-16 flex flex-col justify-start items-start w-[4.5cm] bg-white">
                        <li class="p-1 hover:text-red-500 duration-200 ease-linear"><a href="#">List view</a>
                        </li>
                        <li class="p-1 hover:text-red-500 duration-200 ease-linear"><a href="#">Grid view</a>
                        </li>
                        <li class="p-1 hover:text-red-500 duration-200 ease-linear"><a href="#">Grid view 2</a>
                        <li class="p-1 hover:text-red-500 duration-200 ease-linear"><a href="#">Shopping cart</a>
                        <li class="p-1 hover:text-red-500 duration-200 ease-linear"><a href="#">Product view</a>

                    </ul>
                    <!-- End Dropdown -->
                </li>
                {{-- End Shop --}}

                {{-- Page --}}
                <li
                    class="father flex flex-row hover:text-red-500 justify-center items-center text-center cursor-pointer relative">
                    <p>Page</p>
                    <!-- Icon -->
                    <div class="icon-tran">
                        <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path fill="#231F20"
                                d="M15.563,40.836c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l15-15c0.391-0.391,0.391-1.023,0-1.414l-15-15c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14.293,14.293L15.563,39.422C15.172,39.813,15.172,40.446,15.563,40.836z" />
                        </svg>
                    </div>
                    <!-- End Icon -->

                    <!-- Dropdown -->
                    <ul
                        class="px-4 py-2 text-black child rounded-lg absolute -left-6 top-16  flex flex-row justify-start items-start gap-4 bg-white w-[14cm]">
                        <li class="p-1 duration-200 ease-linear w-full">
                            <a href="#" class="text-left w-full">Others pages</a>
                            <ul class="w-full flex-col justify-center text-left items-start font-[400] pl-4 gap-8">
                                <li class="hover:text-red-500 text-left ">About us</li>
                                <li class="hover:text-red-500 text-left ">Contact us</li>
                                <li class="hover:text-red-500 text-left ">Track order</li>
                                <li class="hover:text-red-500 text-left ">FAQ</li>
                                <li class="hover:text-red-500 text-left ">404</li>
                            </ul>
                        </li>
                        <li class="p-1 duration-200 ease-linear w-full">
                            <a href="#" class="text-left w-full">Account pages</a>
                            {{--  --}}
                            <ul class="w-full flex-col justify-center text-left items-start font-[400] pl-4 gap-8">
                                <li class="hover:text-red-500 text-left ">My Account</li>
                                <li class="hover:text-red-500 text-left ">Login</li>
                                <li class="hover:text-red-500 text-left ">Register</li>
                                <li class="hover:text-red-500 text-left ">Forgot password</li>
                            </ul>
                            {{--  --}}
                        </li>
                        <li class="p-1 duration-200 ease-linear w-full">
                            <a href="#" class="text-left w-full">Checkout page</a>
                            <ul class="w-full flex-col justify-center text-left items-start font-[400] pl-4 gap-8">
                                <li class="hover:text-red-500 text-left ">Checkout</li>
                                <li class="hover:text-red-500 text-left ">Payment</li>
                                <li class="hover:text-red-500 text-left ">Wishlist</li>
                                <li class="hover:text-red-500 text-left ">Order complete</li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Dropdown -->

                </li>
                {{-- End Page --}}

                {{-- Contact --}}
                <li><a href="#" class="hover:text-red-500 duration-150">Contact</a></li>
            </ul>
        </div>
        <!-- End Logo of App -->

        <!-- Menu of App -->
        <ul class="flex flex-row justify-end items-center gap-8">
            <li><a href="#" class="hover:text-red-500 duration-200 ease-in-out">Login</a>/ <a href="#"
                    class="hover:text-red-500  duration-200  ease-in-out">Register</a></li>

            {{-- Language --}}
            <li
                class="father flex flex-row hover:text-red-500 justify-center items-center text-center cursor-pointer relative">
                <p>Language</p>
                <!-- Icon -->
                <div class="icon-tran">
                    <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                        <path fill="#231F20"
                            d="M15.563,40.836c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l15-15c0.391-0.391,0.391-1.023,0-1.414l-15-15c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14.293,14.293L15.563,39.422C15.172,39.813,15.172,40.446,15.563,40.836z" />
                    </svg>
                </div>
                <!-- End Icon -->

                <!-- Dropdown -->
                <ul
                    class="px-4 py-2 text-black child rounded-lg absolute -left-6 top-16 flex flex-col justify-start items-start w-[4.5cm] bg-white">
                    <li class="p-1 hover:bg-slate-100 w-full text-left duration-200 ease-linear"><a
                            href="#">Language</a>
                    </li>
                    <li class="p-1 hover:bg-slate-100 w-full text-left duration-200 ease-linear"><a
                            href="#">English</a>
                    </li>
                    <li class="p-1 hover:bg-slate-100 w-full text-left duration-200 ease-linear"><a
                            href="#">Franch</a>
                    </li>


                </ul>
                <!-- End Dropdown -->
            </li>
            {{-- End Language --}}


            {{--  --}}
             {{-- Currency --}}
             <li
             class="father flex flex-row hover:text-red-500 justify-center items-center text-center cursor-pointer relative">
             <p>Currency</p>
             <!-- Icon -->
             <div class="icon-tran">
                 <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                     <path fill="#231F20"
                         d="M15.563,40.836c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l15-15c0.391-0.391,0.391-1.023,0-1.414l-15-15c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14.293,14.293L15.563,39.422C15.172,39.813,15.172,40.446,15.563,40.836z" />
                 </svg>
             </div>
             <!-- End Icon -->

             <!-- Dropdown -->
             <ul
                 class="px-4 py-2 text-black child rounded-lg absolute -left-6 top-16 flex flex-col justify-start items-start w-[4.5cm] bg-white">
                 <li class="p-1 hover:bg-slate-100 w-full text-left duration-200 ease-linear"><a
                         href="#">Language</a>
                 </li>
                 <li class="p-1 hover:bg-slate-100 w-full text-left duration-200 ease-linear"><a
                         href="#">Dollar</a>
                 </li>
                 <li class="p-1 hover:bg-slate-100 w-full text-left duration-200 ease-linear"><a
                         href="#">Euro</a>
                 </li>


             </ul>
             <!-- End Dropdown -->
         </li>
         {{-- End Language --}}
        </ul>
        <!-- End Menu of App -->
    </div>
</div>



<style>
    .father>.icon-tran {
        transform: rotate(90deg);
        transition: transform 0.4s ease-in-out;
    }

    .father:hover>.icon-tran {
        transform: rotate(-90deg);
    }

    .father>.child {
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s ease-in-out;
        transform: translateY(30px);
        cursor: pointer;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
    }

    .father:hover>.child {
        opacity: 1;
        visibility: visible;
        transform: translateY(-30px);
    }
</style>

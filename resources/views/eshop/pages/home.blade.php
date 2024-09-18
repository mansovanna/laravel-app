@extends('eshop.layouts.master')

@section('content')
<div class="container flex items-center  justify-center">
    <div class="w-11/12  flex flex-col justify-start items-center">
        {{-- Block Header --}}
        <div class="py-4 w-full flex flex-row justify-start items-start gap-2  col-start-1 col-end-8">
            {{-- Icon --}}
            <a href="/eshop">
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
            <p class="text-base">Name</p>
            {{-- --}}
        </div>
        {{-- End Block Headrt --}}

        <div class="w-full flex flex-row justify-between  items-start gap-4">
            {{-- Block of Left --}}
            @include('eshop.pages.home.sidebar')
            {{-- End Block Left --}}

            {{-- ====================================================================================== --}}

            {{-- Block of Riht --}}
            <div class="w-full    col-span-5 ">
                {{-- Block Header of Content --}}

                @include('eshop.pages.home.header')
                {{-- -------------------------------------------------------------- --}

                {{-- Content --}}
                @include('eshop.pages.home.content')
                {{-- Chage List Items --}}

            </div>
        </div>
    </div>
</div>



@endsection
@extends('eshop.pages.auth.mainl-master')

@section('title', 'Register user')

@section('content')
    <div class="w-full h-screen flex flex-row justify-center items-center ">
        <div class="w-4/12 p-4 rounded-sm shadow-md">
            <form action="{{ route('register') }}" method="POST">

                @csrf
                <h1 class="text-center font-bold text-2xl">Register User</h1>

                <div class="relative mt-6">
                    <input type="text" name="name"
                        class="w-full p-2 border border-sky-500 rounded-md outline-none focus:ring-1 focus:ring-sky-600 peer placeholder-transparent"
                        placeholder=" ">
                    <label for="name"
                        class="absolute left-2 -top-1 bg-white p-1 text-gray-500 transition-all duration-300 ease-in-out peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:-top-4 peer-focus:text-sm peer-focus:text-sky-600">
                        Enter your name</label>

                    {{-- Message --}}
                    @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

            <div class="relative mt-6">
                <input type="email" name="email"
                    class="w-full p-2 border border-sky-500 rounded-md outline-none focus:ring-1 focus:ring-sky-600 peer placeholder-transparent"
                    placeholder=" ">
                <label for="email"
                    class="absolute left-2 -top-1 bg-white p-1 text-gray-500 transition-all duration-300 ease-in-out peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:-top-4 peer-focus:text-sm peer-focus:text-sky-600">
                    Enter your email</label>

                {{-- Message --}}
                @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative mt-6">
                <input type="text" name="password"
                    class="w-full p-2 border border-sky-500 rounded-md outline-none focus:ring-1 focus:ring-sky-600 peer placeholder-transparent"
                    placeholder=" ">
                <label for="password"
                    class="absolute left-2 -top-1 bg-white p-1 text-gray-500 transition-all duration-300 ease-in-out peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:-top-4 peer-focus:text-sm peer-focus:text-sky-600">
                    Create your password!</label>

                {{-- Message --}}
                @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>


            <button class="bg-blue-600 text-white p-2 w-full rounded-md mt-6 hover:bg-blue-500 active:bg-blue-600">Register now!</button>

            </form>
        </div>
    </div>
@endsection

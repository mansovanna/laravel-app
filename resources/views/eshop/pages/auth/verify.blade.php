@extends('eshop.pages.auth.mainl-master')

@section('title', 'Verify Code')

@section('content')
    <div class="w-full h-screen flex flex-row justify-center items-center ">
        <div class="w-4/12 p-4 rounded-sm shadow-md">
            <form action="{{ route('verify') }}" method="POST">

                @csrf
                <h1 class="text-center font-bold text-2xl">Please Verification</h1>
                <p class="text-xs text-center">Enter your 6-digit verification code that was sent to your email. Please check code in your message fo email</p>

            <div class="relative mt-6">
                <input type="email" name="email" value="{{ $user }}"
                    class="w-full p-2 border hidden border-sky-500 rounded-md outline-none focus:ring-1 focus:ring-sky-600 peer placeholder-transparent"
                    placeholder=" ">
                <label for="email"
                    class="absolute left-2 -top-1 bg-white p-1 text-gray-500 transition-all duration-300 ease-in-out peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:-top-4 peer-focus:text-sm peer-focus:text-sky-600">
                    Email</label>

                {{-- Message --}}
                @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative mt-6">
                <input type="text" name="otp"
                    class="w-full p-2 border border-sky-500 rounded-md outline-none focus:ring-1 focus:ring-sky-600 peer placeholder-transparent"
                    placeholder=" ">
                <label for="otp"
                    class="absolute left-2 -top-1 bg-white p-1 text-gray-500 transition-all duration-300 ease-in-out peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:-top-4 peer-focus:text-sm peer-focus:text-sky-600">
                    Enter code 6</label>

                {{-- Message --}}
                @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>


            <button class="bg-blue-600 text-white p-2 w-full rounded-md mt-6 hover:bg-blue-500 active:bg-blue-600">Verify now!</button>

            </form>
        </div>
    </div>
@endsection

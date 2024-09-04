@extends('Clients.layouts.screenUser')

@section('content')
    {{-- <div class="w-full   p-2 flex flex-row justify-end items-center">

    <button class="p-2 bg-red-500  rounded-md text-white hover:bg-red-600 active:bg-red-500 ease-linear duration-200">Back</button>
</div> --}}
    <div class="w-full  flex flex-col  2xl:flex-row xl:flex-row lg:flex-row gap-2">
        {{-- Block Profile --}}
        <div class="2xl:w-7/12 xl:w-7/12 lg:w-6/12 w-full shadow-lg bg-white rounded-md p-4">
            <h2 class="font-bold font-Poppins">Your Profile</h2>

            <div class="w-full h-[4cm] border flex justify-center items-end bg-center"
                style="background-image: url('https://allthings.how/content/images/wordpress/2022/05/allthings.how-how-to-make-a-collage-on-instagram-story-ath-featured-image-7.png');">
                {{-- /* {{ asset('storage/cover.png') }}'); */ --}}
                <div class="w-[3cm] h-[3cm] rounded-full border border-sky-400">
                    @if (Auth::user()->profile_image)
                        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profile Image"
                            class="w-full h-full rounded-full object-cover">
                    @else
                        <img src="{{ asset('../../../../../storage/app/public/app.jpg') }}" alt="Default Profile Image"
                            class="w-full h-full rounded-full object-cover">
                    @endif
                </div>
            </div>

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="mt-2">
                @csrf
                @method('POST')

                <label for="profile_image" class="block text-sm font-medium text-gray-700">Change Profile Image</label>
                <input type="file" name="profile_image" id="profile_image"
                    class="w-full p-4 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">

                @if ($errors->has('profile_image'))
                    <div class="text-red-600 text-sm mt-2">
                        {{ $errors->first('profile_image') }}
                    </div>
                @endif

                <div class="flex justify-end items-center gap-8 mt-4">
                    <button type="submit"
                        class="p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 active:bg-blue-400">
                        Change
                    </button>
                </div>
            </form>

        </div>
        {{-- End Block Profile --}}

        <nav class="w-full shadow-lg bg-white rounded-md p-4">
            <h1 class="font-bold">Your Personal Information</h1>
            <hr class="my-2">

            <form class="flex flex-col justify-between" action="{{ route('personal', ['id' => Auth::user()->id]) }}"
                method="POST">
                @method('PUT')
                @csrf <!-- Laravel CSRF token for security -->

                <div class="flex flex-col space-y-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name) }}"
                        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-sky-200 focus:border-sky-300"
                        placeholder="Enter your name">

                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}"
                        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-sky-200 focus:border-sky-300"
                        placeholder="Enter your email">
                </div>

                <div class="flex justify-end items-center gap-8 mt-14">
                    <button type="reset"
                        class="p-2 bg-red-500 text-white rounded-full hover:bg-red-600 active:bg-red-400">
                        Cancel
                    </button>
                    <button type="submit"
                        class="p-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 active:bg-blue-400">
                        Change
                    </button>
                </div>
            </form>
        </nav>


    </div>
@endsection

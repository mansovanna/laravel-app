<div id="drop-Pop" class="w-[7cm]  ">
    <div class="w-full h-30 border p-2 flex flex-row justify-center items-end relative">

        {{-- Block Profile --}}
        <div class="w-20 h-20 bg-sky-300 rounded-full translate-y-10 flex flex-row justify-center items-center">


            @if (Auth::user()->profile_image)
                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profile Image"
                    class="w-full h-full rounded-full object-cover">
            @else
                <img src="{{ asset('../../../../storage/app/public/app.jpg') }}" alt="Default Profile Image"
                    class="w-[1.9cm] h-[1.9cm] bg-cover bg-current bg-center rounded-full">
            @endif


        </div>

        {{-- Block --}}
        <button
            class="p-1 hover:bg-slate-200 ease-linear duration-200 rounded-full active:bf-slate-300 absolute right-2">
            <div class='flex flex-row justify-center items-center'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                </svg>

            </div>
        </button>
        {{-- End Block Edit --}}


    </div>

    {{-- Block Icon Items --}}
    <div class="w-full mt-8">
        <h1 class  ="text-center text-lg lowercase font-semibold">{{ Auth::user()->name }}!</h1>
        <p class="text-center text-xs hover:underline ease-linear duration-200">{{ Auth::user()->email }}</p>

        <hr class="my-4">
        {{-- Block Menu --}}
        <a href="{{ route('profile') }}"
            class="w-full p-2 hover:bg-slate-200 flex justify-start items-center rounded-lg gap-2">
            {{-- Icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
            {{-- End Icon --}}

            {{-- Block Edite --}}
            <p>Edtie Profile</p>

        </a>

        {{-- Block Logout --}}
        <div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit"
                    class="w-full p-2 hover:bg-slate-200 flex justify-start items-center rounded-lg gap-2">
                    {{-- Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                    </svg>
                    {{-- End Icon --}}
                    {{-- Logout --}}
                    <p>Logout</p>
                </button>
            </form>
        </div>
    </div>
</div>

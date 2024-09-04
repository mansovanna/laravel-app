<nav class="flex flex-row justify-between items-center">
    {{-- Block Menu --}}
    <button id="menuList" class="p-2 hover:bg-slate-200 active:bg-slate-300 rounded-lg ease-in-out duration-200">
        <div class="flex flex-row justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </button>

    {{-- Block Menu of App --}}
    <div class="flex flex-row justify-end items-center gap-2">
        {{-- Block Notification --}}
        <div
            class="w-10 h-10 rounded-full hover:bg-slate-200 active:bg-slate-300 ease-linear duration-200 flex justify-center items-center">
            <button class="w-8 h-8 bg-green-500 rounded-full"></button>
        </div>
        {{-- Block Notification --}}


        {{-- Block Profile of App --}}
        <div
            class="relative w-10 h-10 rounded-full hover:bg-slate-200 active:bg-slate-300 ease-linear duration-200 flex justify-center items-center">
            <button id="profileButton" class="w-8 h-8 bg-cover bg-center rounded-full flex justify-end items-end"
            style="background-image: url(
                @if (Auth::user()->profile_image)
                    '{{ asset('storage/' . Auth::user()->profile_image) }}'
                @else
                    '{{ asset('../../../../storage/app/public/app.jpg') }}'
                @endif
            );">



                {{-- Status --}}
                <span class="relative flex h-3 w-3 translate-x-1">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                </span>
            </button>
        </div>
        {{-- Block Profile --}}
        <div class="absolute right-3  top-14 z-50 border ease-linear duration-200 hidden bg-white shadow-lg rounded-lg p-4"
            id="profilePopup">
            @include('Clients.components.profieApp')
        </div>
        {{-- End Block Profile of App --}}
    </div>

    {{-- End Block Menu of App --}}
</nav>

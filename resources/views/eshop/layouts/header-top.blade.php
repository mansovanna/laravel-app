<header class="w-full flex justify-center items-center bg-white shadow text-sceondary text-base">
    <div class=" py-6 px-5 w-[90%] flex flex-row justify-between items-center">
        <div class="flex flex-row justify-start items-center gap-14">
            {{-- Block Image --}}
            <img class="w-[120px]" src="https://themes.programmingkit.xyz/rafcart/assets/images/svg/logo.svg"
                alt="">
            {{-- End Block Image --}}

            {{-- Block Menu of App --}}
            <ul class="flex flex-row justify-start items-center font-medium gap-8">


                @foreach ($menus as $key => $menu)
                    <li
                        class=" father flex flex-row justify-start items-center gap-2 relative hover:text-danger z-20 cursor-pointer">
                        <p>{{ $menu->name }}</p>

                        {{-- List Down to Up --}}

                        @if (count($menu->children))
                            {{-- Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>

                            {{-- End Icon --}}
                            <ul
                                class="p-4 text-sceondary boxShadow rounded-md bg-white min-w-40 absolute top-8 -left-4 font-normal text-sm flex flex-col justify-start items-start gap-2 ">
                                @foreach ($menu->children as $child)
                                    <li><a href="#" class="w-full hover:text-danger">{{ $child->name }}</a></li>
                                @endforeach

                            </ul>
                        @endif
                        {{-- End List Down to Up --}}
                    </li>
                @endforeach
                {{-- End Block --}}

                {{-- End Bock Page --}}
                {{-- <li><a href="#" class="hover:text-danger duration-200 ease-in-out">Contact</a></li> --}}
            </ul>
        </div>



        {{-- Block Menu of right --}}
        <ul class="flex flex-row justify-end items-center font-medium gap-8 z-30">
            <li>
                <a href="#" class="hover:text-danger duration-150 ease-in-out">Login</a>
                /
                <a href="#"class="hover:text-danger duration-150 ease-in-out">Register</a>
            </li>
            {{--  --}}
            <li class="flex flex-row justify-start items-center gap-2 hover:text-danger cursor-pointer relative">

                <div onclick="clickHere()" id="button" class="flex flex-row justify-center items-center gap-2">
                    <p>Language</p>
                    {{-- Icon --}}
                    <svg id="arrows" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-4 ease-in-out duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>

                {{-- End Icon --}}
                <ul id="overlay"
                    class="hidden  flex-col justify-center bg-white rounded-md border  items-start absolute top-8 text-sceondary duration-300 ease-in-out ">
                    <li class="font-semibold hover:bg-slate-200 px-4 py-2  rounded-t-md">Language</li>
                    <li class="hover:bg-slate-200 px-4 py-2 text-center w-full">English</li>
                    <li class="hover:bg-slate-200 px-4 py-2 text-center w-full rounded-b-md">Franch</li>
                </ul>
                {{-- List Down to Up --}}
            </li>
            {{--  --}}



            <li class="flex flex-row justify-start items-center gap-2 hover:text-danger cursor-pointer relative">

                <div onclick="clickHeres()" id="buttons" class="flex flex-row justify-center items-center gap-2">
                    <p>Currency</p>
                    {{-- Icon --}}
                    <svg id="arrowss" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-4 ease-in-out duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>

                {{-- End Icon --}}
                <ul id="overlays"
                    class="hidden flex-col  justify-center bg-white rounded-md border  items-start absolute top-8 text-sceondary duration-300 ease-in-out ">
                    <li class="font-semibold hover:bg-slate-200 px-4 py-2  rounded-t-md">Currency</li>
                    <li class="hover:bg-slate-200 px-4 py-2 text-center w-full">Dollar</li>
                    <li class="hover:bg-slate-200 px-4 py-2 text-center w-full rounded-b-md">Euro</li>
                </ul>
                {{-- List Down to Up --}}
            </li>
            {{--  --}}
        </ul>

    </div>
</header>



<style>
    .boxShadow {
        box-shadow: 0px -1px 10px rgba(204, 209, 209, 0.4)
    }


    .father>svg {
        transition: all 0.4s ease-in-out;
        transform: rotate(0deg);
    }

    .father:hover>svg {
        transform: rotate(180deg);
    }

    .father>ul {
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s ease-in-out;
        transform: translateY(30px);
        cursor: pointer;
    }

    .father:hover>ul {
        opacity: 1;
        visibility: visible;
        transform: translateY(0px);

    }
</style>

{{-- --------------- --}}


<script>
    // Functions defined globally
    function clickHere() {
        const aRRow = document.getElementById('arrows');
        const overlay = document.getElementById('overlay');
        if (aRRow && overlay) {
            aRRow.classList.toggle('rotate-180');
            overlay.classList.toggle('hidden');
        }
    }

    function clickHeres() {
        const aRRows = document.getElementById('arrowss');
        const overlays = document.getElementById('overlays');
        if (aRRows && overlays) {
            aRRows.classList.toggle('rotate-180');
            overlays.classList.toggle('hidden');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('button');
        const buttons = document.getElementById('buttons');
        const overlay = document.getElementById('overlay');
        const overlays = document.getElementById('overlays');
        const aRRow = document.getElementById('arrows');
        const aRRows = document.getElementById('arrowss');

        document.addEventListener('click', (e) => {
            if (overlay && button && !overlay.contains(e.target) && !button.contains(e.target)) {
                overlay.classList.add('hidden');
                aRRow.classList.remove('rotate-180');
            }

            if (overlays && buttons && !overlays.contains(e.target) && !buttons.contains(e.target)) {
                overlays.classList.add('hidden');
                aRRows.classList.remove('rotate-180');
            }
        });
    });
</script>

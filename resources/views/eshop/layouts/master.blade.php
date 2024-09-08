<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Shop</title>
    @vite('resources/css/app.css')

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">

</head>

<body class="font-system min-h-screen flex flex-col ">

    {{-- ScrollTop --}}
    <button id="scrollTop"
        class="p-1 flex justify-center animate-bounce items-center hover:bg-purple-500 duration-200 ease-linear active:bg-yellow-400 size-8 rounded-full fixed bottom-14 right-8  bg-danger boxShadow  z-[100] opacity-0">
        <svg class="w-6 h-6  text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
            <path d="M9.5 10.5C9.99153 9.9943 11.2998 8 12 8M14.5 10.5C14.0085 9.9943 12.7002 8 12 8M12 8V16"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
    {{-- * --}}


    @include('eshop.layouts.header-top')

    @include('eshop.layouts.header-bottom')


    <div class="container mx-auto flex-grow mb-4">
        @yield('content')
    </div>

    @include('eshop.layouts.footer')

    @vite('resources/js/app.js')

</body>

</html>

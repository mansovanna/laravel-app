<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@100..900&family=Noto+Serif+Khmer:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Varela+Round&display=swap" rel="stylesheet">
    <title>@yield('title', 'Default Title')</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full flex min-h-screen font-Roboto bg-gray-100">
    <div class="w-full flex flex-row">
        @include('Clients.components.sidebar')

        <div class="flex-1 flex flex-col w-full">
            <div class="w-full p-2 bg-white shadow rounded-lg2 sticky top-0 ">
                @include('Clients.layouts.navbar')
            </div>

            <main class="flex-1  overflow-auto p-2">
                @yield('content')
            </main>
        </div>
    </div>

    @vite('resources/js/main.js')
</body>
</html>

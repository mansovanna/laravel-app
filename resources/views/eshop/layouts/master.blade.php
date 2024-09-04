<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Shop</title>
    @vite('resources/css/app.css')
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen font-sans">
    @include('eshop.layouts.header-top')
    @include('eshop.layouts.header-bottom')

    @yield('content')

    @include('eshop.layouts.footer')

</body>
</html>

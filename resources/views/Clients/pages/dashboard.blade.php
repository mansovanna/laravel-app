@extends('Clients.layouts.screenUser')

@section('title', 'Home')

@section('content')
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-2xl">Home Page</h1>
        <!-- Add any additional navigation links here if needed -->
    </div>
</nav>

<main class="p-6">
    <div class="container mx-auto">
        <!-- Example content section -->
        <section class="bg-white p-4 rounded-lg shadow-md mb-6">
            <h2 class="text-xl font-semibold mb-4">Welcome to the Home Page</h2>
            <p>This is your dashboard where you can manage your content.</p>
            <!-- Add more content or components here -->
        </section>

        <!-- Example grid layout for additional content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Section 1</h3>
                <p>Details for section 1</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Section 2</h3>
                <p>Details for section 2</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Section 3</h3>
                <p>Details for section 3</p>
            </div>
        </div>
    </div>
</main>
@endsection

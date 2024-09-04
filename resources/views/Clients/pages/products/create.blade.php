@extends('Clients.layouts.screenUser')

@section('title', 'Product Add')

@section('content')
<div class="w-full container mx-auto p-6 bg-white rounded-lg shadow-md">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Create Product</h1>
        <a href="{{ route('products') }}" class="px-4 py-2 bg-danger text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 ease-linear duration-150">
            Back
        </a>
    </div>
</div>
@endsection

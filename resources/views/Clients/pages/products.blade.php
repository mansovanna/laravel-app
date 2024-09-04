@extends('Clients.layouts.screenUser')

@section('title', 'Product Details')

@section('content')
<div class="w-full container mx-auto p-6 bg-white rounded-lg shadow-md">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Product Details</h1>
        <a href="{{ route('product_create') }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 ease-linear duration-150">
            Add Product
        </a>
    </div>

    <!-- Product Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Image</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Description</th>
                    <th class="py-3 px-6 text-left">Price</th>
                    <th class="py-3 px-6 text-left">Quantity</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm font-light">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">1</td>
                    <td class="py-3 px-6 text-left">
                        <img src="path_to_image.jpg" alt="Product Image" class="w-16 h-16 object-cover rounded-md">
                    </td>
                    <td class="py-3 px-6 text-left">Example Product</td>
                    <td class="py-3 px-6 text-left">This is a description of the product.</td>
                    <td class="py-3 px-6 text-left">$99.99</td>
                    <td class="py-3 px-6 text-left">100</td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center space-x-2">
                            <!-- Detail Button -->
                            <a class="w-4 transform hover:text-blue-500 hover:scale-110">
                                {{-- href="{{ route('products.show', 1) }}"  --}}
                                <i class="fas fa-eye"></i>
                            </a>
                            <!-- Edit Button -->
                            <a   href="{{ route('product_update') }}"  class="w-4 transform hover:text-purple-500 hover:scale-110">

                                <i class="fas fa-edit"></i>
                            </a>
                            <!-- Delete Button -->
                            <form  class="inline-block">
                                {{-- action="{{ route('products.destroy', 1) }}" method="POST" --}}
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-4 transform hover:text-red-500 hover:scale-110">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <!-- Additional rows here -->
            </tbody>
        </table>
    </div>
</div>
@endsection

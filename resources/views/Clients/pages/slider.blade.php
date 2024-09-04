@extends('Clients.layouts.screenUser')

@section('title', 'Slider')

<!-- Example Blade Template: resources.blade.php -->


@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-4">Manage Resources</h1>

    <!-- Success Message -->
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Create Resource Form -->
    <form action="" method="POST" class="mb-6">
        {{-- {{ route('resource.store') }} --}}
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
            @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create Resource</button>
    </form>

    <!-- Resource List -->
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            {{-- @foreach ($resources as $resource) --}}
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{-- {{ $resource->name }} --}}
                        Hell

                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right">
                        <form onsubmit="return confirm('Are you sure you want to delete this resource?');">
                            {{-- action="{{ route('resource.destroy', $resource->id) }}" method="POST"  --}}
                            @csrf
                            {{-- @method('DELETE') --}}
                            <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                        </form>
                    </td>
                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection


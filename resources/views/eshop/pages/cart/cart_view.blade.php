@extends('eshop.layouts.master')

@section('content')
<div class="container flex items-center justify-center">
    <div class="w-11/12 flex flex-col justify-start items-center">
        {{-- Block Header --}}
        <div class="py-4 w-full flex flex-row justify-start items-start gap-2 col-start-1 col-end-8">
            {{-- Icon --}}
            <a href="{{ route('eshop.home') }}">
                <svg class="text-danger w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="#000000"
                    fill="none">
                    <path d="M12 17H12.009" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M20 8.5V13.5C20 17.2712 20 19.1569 18.8284 20.3284C17.6569 21.5 15.7712 21.5 12 21.5C8.22876 21.5 6.34315 21.5 5.17157 20.3284C4 19.1569 4 17.2712 4 13.5V8.5"
                        stroke="currentColor" stroke-width="1.5" />
                    <path
                        d="M22 10.5L17.6569 6.33548C14.9902 3.77849 13.6569 2.5 12 2.5C10.3431 2.5 9.00981 3.77849 6.34315 6.33548L2 10.5"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </a>
            {{-- End Icon --}}

            {{-- Icon arrow --}}
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="#000000" fill="none">
                <path d="M9.00005 6C9.00005 6 15 10.4189 15 12C15 13.5812 9 18 9 18" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            {{-- End Icon Arrow --}}

            <p class="text-base">Shopping Cart</p>
        </div>
        {{-- End Block Header --}}

        <div class="w-full flex flex-row justify-between items-start gap-4">
            {{-- Block Content of Cart --}}
            <div class="w-11/12 flex flex-col gap-4">
                {{-- Block Header --}}
                <div class="flex flex-row gap-4 bg-slate-200 justify-between items-center px-8">
                    <p class="p-2 font-medium w-4/12">Product</p>
                    <div class="flex flex-row">
                        <p class="p-2 font-medium mr-8">Quantity</p>
                        <p class="p-2 font-medium">Total Price</p>
                    </div>
                </div>

                {{-- Content of Cart --}}
                @if (!session('cart'))
                <p>No Product Added</p>
                @else

                @foreach (session('cart') as $id => $item)
                <div class="w-full p-4 border rounded-lg flex flex-row justify-between items-center gap-4">

                    {{-- Block Image --}}
                    @php
                    // Decode the JSON string into an array
                    $images = json_decode($item['image'], true);
                    @endphp

                    @if (!empty($images) && isset($images[0]))
                    <img class="w-20 h-20 object-cover" src="{{ asset('images/' . $images[0]) }}" alt="Image">
                    @else
                    <p>No images available.</p>
                    @endif
                    {{-- End Block Image --}}

                    {{-- Block Title --}}
                    <div class="flex flex-col items-start justify-center">
                        <h2 class="font-medium text-secondary text-lg">{{ $item['name'] }}</h2>
                        <p class="font-[600] text-danger text-base">${{ $item['price'] }}</p>
                        <p>Size: M</p>
                    </div>
                    {{-- End Block Title --}}

                    {{-- Block Quantity --}}
                    <form action="{{ route('cart.update', $id) }}" method="POST">
                        @csrf
                        <div class="flex flex-row justify-center items-center">
                            <!-- Decrement Button -->
                            <button class="decrement p-2 border border-r-0 active:bg-slate-100" data-id="{{ $id }}">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path d="M20 12L4 12" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>

                            <!-- Quantity Input -->
                            <input type="number" name="quantity" id="quantity-{{ $id }}"
                                class="border p-1 w-20 text-center" value="{{ $item['quantity'] }}" min="1">

                            <!-- Increment Button -->
                            <button class="increment p-2 border border-l-0 active:bg-slate-100" data-id="{{ $id }}">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path d="M12 4V20M20 12H4" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    {{-- End Block Quantity --}}

                    {{-- Block remove or delete --}}
                    <div class="flex flex-row justify-end items-center gap-3">
                        <p class="font-[600] text-danger text-lg">${{ $item['price'] * $item['quantity'] }}</p>

                        <form action="{{ route('cart.remove', $id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to remove this item?');">
                            @csrf
                            @method('DELETE')
                            <button
                                class="size-8 rounded-full hover:bg-slate-100 hover:text-danger active:bg-purple-200 duration-200 ease-in-out flex flex-row justify-center items-center">
                                <svg class="fill-none w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M9.5 16.5L9.5 10.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path d="M14.5 16.5L14.5 10.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    {{-- End Block remove or delete --}}
                </div>
                @endforeach
                @endif
                {{-- End Content of Cart --}}
            </div>
            {{-- End Block Content of Cart --}}

            <div class="w-4/12 border p-4 col-span-5 flex flex-col gap-2 justify-center items-start">
                @include('eshop.pages.cart.sidebar')
            </div>
        </div>
    </div>
</div>

<script>
    // Handle increment and decrement
    document.querySelectorAll('.increment').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const input = document.getElementById(`quantity-${id}`);
            input.value = parseInt(input.value) + 1;


        });
    });

    document.querySelectorAll('.decrement').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const input = document.getElementById(`quantity-${id}`);
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;
            }
        });
    });
</script>
@endsection

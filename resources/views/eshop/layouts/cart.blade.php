@php
$subtotal = 0;
@endphp

<div class="text-white flex flex-col justify-center items-center relative father cursor-pointer z-10">
    <div>
        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
            <path
                d="M8 16H15.2632C19.7508 16 20.4333 13.1808 21.261 9.06908C21.4998 7.88311 21.6192 7.29013 21.3321 6.89507C21.045 6.5 20.4947 6.5 19.3941 6.5H6"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            <path d="M8 16L5.37873 3.51493C5.15615 2.62459 4.35618 2 3.43845 2H2.5" stroke="currentColor"
                stroke-width="1.5" stroke-linecap="round" />
            <path d="M8.88 16H8.46857C7.10522 16 6 17.1513 6 18.5714C6 18.8081 6.1842 19 6.41143 19H17.5"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <circle cx="10.5" cy="20.5" r="1.5" stroke="currentColor" stroke-width="1.5" />
            <circle cx="17.5" cy="20.5" r="1.5" stroke="currentColor" stroke-width="1.5" />
        </svg>
    </div>

    {{-- Cart Count --}}
    <p class="text-xs">Cart</p>
    <span class="px-[6px] rounded-full bg-sceondary text-center text-sm absolute -top-1 left-6 z-0">
        {{ session('cart') ? count(session('cart')) : 0 }}
    </span>

    {{-- Cart Items --}}
    <ul class="p-4 absolute top-14 right-0 bg-white rounded-md boxShadows flex flex-col justify-center items-start min-w-max text-sceondary text-nowrap cursor-default">
        <h1 class="p-2 border-b w-full text-left cursor-auto">{{ session('cart') ? count(session('cart')) : 0 }} Item</h1>

        {{-- Cart Items List --}}
        <ul class="w-full flex flex-col justify-start items-start my-1">
            @if(session('cart'))
                @foreach(session('cart') as $id => $item)
                    @php
                    $subtotal += $item['price'] * $item['quantity'];
                    $image = json_decode($item['image'], true);
                    @endphp
                    <li class="w-full flex flex-row justify-start items-center gap-4 mt-1">
                        <a href="#" class="flex flex-row justify-start items-center gap-4 w-full">
                            @if(is_array($image) && isset($image[0]))
                            <img class="w-[70px] h-[70px] overflow-hidden" src="{{ asset('images/' . $image[0]) }}"
                                alt="{{ $item['name'] }}">
                            @else
                            <img class="w-[70px] h-[70px] overflow-hidden" src="{{ asset('images/default.jpg') }}"
                                alt="Default Image">
                            @endif
                            <aside class="flex flex-col justify-start items-start">
                                <h3 class="hover:text-danger font-medium">{{ $item['name'] }}</h3>
                                <div class="flex flex-row justify-start items-center gap-4">
                                    <p>{{ $item['quantity'] }}x</p>
                                    <p>${{ number_format($item['price'], 2) }}</p>
                                </div>
                            </aside>
                        </a>

                        {{-- Remove Button --}}
                        <form action="{{ route('cart.remove', $id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to remove this item?');">
                            @csrf
                            @method('DELETE')
                            <button class="hover:text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </form>
                    </li>
                @endforeach
            @endif
        </ul>

        {{-- Sub Total --}}
        <hr class="my-3 w-full">
        <div class="flex flex-row justify-between items-center w-full font-medium text-base cursor-default">
            <p>SUB TOTAL:</p>
            <p>${{ number_format($subtotal, 2) }}</p>
        </div>

        {{-- Buttons --}}
        <div class="w-full flx flex-row justify-between items-center text-white mt-2 gap-8">
            <a href="{{ route('cart.view') }}"
                class="min-w-max px-8 text-sm py-2 mr-8 bg-danger border hover:bg-white border-danger text-white hover:text-danger rounded-sm duration-200 ease-linear">VIEW
                CART</a>
            <button
                class="min-w-max px-8 text-sm py-2 hover:bg-danger bg-white hover:text-white text-danger border border-danger hover:border-danger rounded-sm duration-500 ease-linear">CHECKOUT</button>
        </div>
    </ul>
</div>

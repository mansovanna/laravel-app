<h4 class="font-[500] text-sceondary text-lg uppercase">Order Summary</h4>

{{-- Subtotal --}}
<div class="flex flex-row  w-full  font-medium justify-between">
    <p>Subtotal</p>
    <p>$45.00</p>
</div>
{{-- Subtotal --}}


{{-- Delivery --}}
<div class="flex flex-row  w-full  justify-between">
    <p>Delivery</p>
    <p>Free</p>
</div>
{{-- Delivery --}}


{{-- Tax --}}
<div class="flex flex-row  w-full justify-between">
    <p>Tax</p>
    <p>Free</p>
</div>
{{-- Tax --}}

<hr class="w-full my-4">
{{-- Total --}}
<div class="flex flex-row  w-full justify-between font-medium">
    <p >Total</p>
    <p class="text-danger">$45.00</p>
</div>
{{-- Total --}}


{{-- Code --}}
<div class="flex flex-row justify-between items-center my-4">
    <input type="text" class="w-full p-2  border rounded-md rounded-r-none outline-slate-300" placeholder="Enter coupon">
    <button class="bg-danger text-white py-2 uppercase px-4 rounded-r-md">Apply</button>
</div>
{{-- Code --}}

<button class="uppercase text-base w-full bg-danger text-white p-2 hover:bg-white hover:text-danger duration-200 ease-in-out rounded-md border-danger border ">porccees to checkout</button>
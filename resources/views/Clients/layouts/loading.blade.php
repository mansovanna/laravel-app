
<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="flex space-x-2">
        <div class="w-6 h-6 bg-yellow-500 rounded-full animate-bounce"></div>
        <div class="w-6 h-6 bg-green-500 rounded-full animate-bounce animation-delay-150"></div>
        <div class="w-6 h-6 bg-red-500 rounded-full animate-bounce animation-delay-300"></div>
    </div>
</div>

<style>
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-1rem);
        }
    }
    .animate-bounce {
        animation: bounce 1s infinite;
    }
    .animation-delay-150 {
        animation-delay: 0.15s;
    }
    .animation-delay-300 {
        animation-delay: 0.3s;
    }
</style>




<div class="flex flex-col items-center justify-center h-screen bg-gray-100">
<div class="w-16 h-16 border-4 border-t-4 border-blue-500 border-solid rounded-full animate-spin ring"></div>
<p class="text-sm font-mono mt-3">Please waiting ...</p>
</div>

<style>
.ring {
    border-left-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
}
</style>



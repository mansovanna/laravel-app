<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-200">
    <div class="bg-gray-50 p-6 rounded-lg shadow-md w-full">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Contact Us</h1>
        <form id="contactForm">
            <div class="mb-4">
                <label for="name" class="block text-gray-800 font-medium">Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-800 font-medium">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-800 font-medium">Message</label>
                <textarea id="message" name="message" rows="5" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-2 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <!-- Message Modal -->
    <div id="popupModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Thank You for your message!</h2>
            <p class="text-gray-600 text-center">We will get back to you soon.</p>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Show Message
            document.getElementById('popupModal').classList.remove('hidden');
            
            // Redirect to eshop
            setTimeout(function() {
                window.location.href = '/eshop';
            }, 2000);
        });
    </script>
</body>

</html>

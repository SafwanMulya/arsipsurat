<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-gray-100">

    <!-- Overlay mobile -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden md:hidden"></div>

    <!-- Mobile sidebar -->
    <div id="mobile-sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-800 transform -translate-x-full transition-transform duration-300 md:hidden">
        <div class="flex items-center justify-center h-16 bg-gray-900">
            <span class="text-white font-bold uppercase">Sidebar</span>
        </div>
        <nav class="flex-1 px-2 py-4 overflow-y-auto bg-gray-800">
            <a href="#" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                Dashboard
            </a>
            <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                Messages
            </a>
            <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                Settings
            </a>
        </nav>
    </div>

    <!-- Desktop sidebar -->
    <div class="hidden md:flex flex-col w-64 bg-gray-800">
        <div class="flex items-center justify-center h-16 bg-gray-900">
            <span class="text-white font-bold uppercase">Sidebar</span>
        </div>
        <nav class="flex-1 px-2 py-4 overflow-y-auto bg-gray-800">
            <a href="#" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                Dashboard
            </a>
            <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                Messages
            </a>
            <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                Settings
            </a>
        </nav>
    </div>

    <!-- Main content -->
    <div class="flex flex-col flex-1 overflow-y-auto">
        <!-- Navbar -->
        <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200 px-4">
            <div class="flex items-center">
                <!-- Toggle mobile sidebar button -->
                <button id="toggle-sidebar" class="text-gray-500 focus:outline-none focus:text-gray-700 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <input class="ml-4 w-full border rounded-md px-4 py-2" type="text" placeholder="Search">
            </div>
            <div class="flex items-center">
                <button class="ml-4 text-gray-500 hover:text-gray-700 focus:outline-none">
                    Profile
                </button>
            </div>
        </div>

        <!-- Content -->
        <div class="p-4">
            @yield('content')
        </div>
    </div>

    <!-- JS Toggle Sidebar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('mobile-sidebar');
            const toggleBtn = document.getElementById('toggle-sidebar');
            const overlay = document.getElementById('overlay');

            toggleBtn.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            });

            overlay.addEventListener('click', function() {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            });
        });
    </script>
</body>
</html>

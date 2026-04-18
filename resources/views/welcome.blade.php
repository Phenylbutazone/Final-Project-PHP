<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-xl font-bold text-indigo-600">
                School System
            </h1>

            <div>
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                        Login
                    </a>
                @endauth
            </div>

        </div>
    </nav>

    <!-- HERO SECTION -->
    <div class="flex items-center justify-center min-h-[80vh]">

        <div class="text-center max-w-2xl">

            <h1 class="text-4xl font-bold mb-4">
                Welcome to the School Management System
            </h1>

            <p class="text-gray-600 text-lg mb-8">
                Manage Subjects, Programs, Users, and Account Settings
                in one centralized academic management platform.
            </p>

            @auth
                <a href="{{ route('dashboard') }}"
                   class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Get Started
                </a>
            @endauth

        </div>

    </div>

    <!-- FOOTER -->
    <footer class="text-center text-gray-500 pb-6">
        © {{ date('Y') }} School System
    </footer>

</body>
</html>
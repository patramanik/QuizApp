<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <title>My Laravel App</title> --}}
    <title>@yield('title', '| Quiz Admin')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- google font cdn --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=collapse_content" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Hide elements until Alpine processes them */
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-800 flex flex-col" x-data="{ sidebarOpen: true }">
    <div class="flex flex-1 relative">

        <!-- Fixed Sidebar -->
        @include('layouts.sidebar')

        <!-- Right Side Container: Includes Header, Main Content, and Footer -->
        <div :class="sidebarOpen ? 'ml-64' : 'ml-16'" class="flex flex-col flex-1 transition-all duration-180" x-cloak>

            <!-- Modified Header (now within the shifted container) -->
            @include('layouts.header')

            <!-- Main Content -->
            <main class="flex-1 bg-white p-6">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('layouts.footer')
        </div>
    </div>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @yield('scripts')
</body>

</html>





{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col h-screen overflow-hidden bg-gray-100">

    @include('layouts.header')

    <div class="flex flex-1 overflow-hidden">
        @include('layouts.sidebar')

        <!-- Main content takes remaining space and scrolls only if needed -->
        <main class="flex-1 p-6 overflow-y-auto bg-gray-50">
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    @yield('scripts')

</body>

</html> --}}

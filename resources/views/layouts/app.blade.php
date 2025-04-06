    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>My Laravel App</title>
        <!-- Add this to your <head> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="flex flex-col min-h-screen">

        @include('layouts.header')

        <div class="flex flex-1">
            @include('layouts.sidebar')

            <main class="flex-1 p-6 bg-gray-50">
                @yield('content')
            </main>


        </div>

        @include('layouts.footer')
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

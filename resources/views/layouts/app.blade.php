<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
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
   
    @yield('scripts')
    

</body>
</html>

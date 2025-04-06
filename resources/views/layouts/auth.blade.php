<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Login')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex flex-col justify-between">

  <!-- Content Centered -->
  <div class="flex-grow flex items-center justify-center">
    @yield('content')
  </div>

  <!-- Beautiful black footer -->
  <footer class="bg-black text-white text-center py-4 w-full">
    © {{ date('Y') }} YourAppName. All rights reserved.
  </footer>

  @yield('scripts')
</body>
</html>

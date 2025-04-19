<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizMaster - Test Your Knowledge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-50 to-purple-50">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-purple-600">QuizMaster</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <div class="group relative">
                        <button class="text-gray-600 hover:text-purple-600 px-3 py-2 rounded-md transition-all">
                            Categories
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 w-48">
                            <a href="#" class="block px-4 py-3 hover:bg-purple-50 text-gray-700">Science</a>
                            <a href="#" class="block px-4 py-3 hover:bg-purple-50 text-gray-700">History</a>
                            <a href="#" class="block px-4 py-3 hover:bg-purple-50 text-gray-700">Technology</a>
                        </div>
                    </div>
                    <a href="#" class="text-gray-600 hover:text-purple-600 px-3 py-2 rounded-md">Leaderboard</a>
                    <a href="#" class="text-gray-600 hover:text-purple-600 px-3 py-2 rounded-md">About</a>
                </div>

                <!-- CTA Button -->
                <button class="bg-gradient-to-r from-purple-600 to-blue-500 text-white px-6 py-2 rounded-full
                       hover:scale-105 transition-transform shadow-lg">
                    Sign In
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-32 pb-20 px-4">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">
            <!-- Left Content -->
            <div class="md:w-1/2 mb-12 md:mb-0 animate-fade-in-up">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
                    Test Your Knowledge,
                    <span class="bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent">
                        Level Up!
                    </span>
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Join millions of players worldwide in our daily trivia challenges.
                    Compete, learn, and climb the leaderboards!
                </p>
                <div class="flex space-x-4">
                    <button class="bg-purple-600 text-white px-8 py-4 rounded-full text-lg
                            hover:scale-105 transition-transform shadow-lg hover:shadow-xl">
                        Start Quiz Now
                    </button>
                    <button class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-full text-lg
                            hover:bg-purple-50 transition-colors">
                        How It Works
                    </button>
                </div>
            </div>

            <!-- Right Image -->
            <div class="md:w-1/2 flex justify-center">
                <img src="https://cdn-icons-png.flaticon.com/512/4478/4478292.png"
                     alt="Quiz Illustration"
                     class="w-96 h-96 float-animation">
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow
                    animate-slide-in-left delay-100">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                    🎯
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Daily Challenges</h3>
                <p class="text-gray-600">New questions every day across multiple categories</p>
            </div>

            <!-- Feature 2 -->
            <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow
                    animate-slide-in-left delay-200">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    ⚡
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Live Competitions</h3>
                <p class="text-gray-600">Real-time battles with players worldwide</p>
            </div>

            <!-- Feature 3 -->
            <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow
                    animate-slide-in-left delay-300">
                <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mb-4">
                    🏆
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Achievements</h3>
                <p class="text-gray-600">Unlock badges and climb the global leaderboard</p>
            </div>
        </div>
    </div>

    <script>
        // Example event listener for buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                alert('Action triggered!'); // Replace with actual functionality
            });
        });
    </script>
</body>
</html>

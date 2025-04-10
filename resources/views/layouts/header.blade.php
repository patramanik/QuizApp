<header
    class="relative h-[55px] bg-gradient-to-r from-purple-500 to-pink-600 text-white px-6 flex justify-between items-center shadow-md">
    
    <!-- Centered Title -->
    <h1 class="absolute left-1/2 transform -translate-x-1/2 text-2xl font-semibold tracking-wide">
        Welcome to Quiz Admin Panel!
    </h1>

    <!-- Spacer to push profile dropdown to the right -->
    <div></div>

    <!-- Profile Dropdown -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="focus:outline-none flex items-center space-x-2">
            <i class="fas fa-user-circle text-white text-3xl"></i>
            <i class="fas fa-chevron-down text-white text-sm"></i>
        </button>

        <!-- Dropdown -->
        <div x-show="open" @click.away="open = false" x-transition
            class="absolute right-0 mt-3 w-52 bg-white rounded-xl shadow-lg z-50 py-2 text-sm text-gray-700">
            <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 transition-colors duration-150">
                <i class="fas fa-user mr-2 text-gray-500"></i> Profile
            </a>
            <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 transition duration-150">
                <i class="fas fa-key mr-2 text-gray-500"></i> Change Password
            </a>
            <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 transition-colors duration-150">
                <i class="fas fa-cog mr-2 text-gray-500"></i> Settings
            </a>
            <div class="border-t my-1"></div>
            <!-- Logout Form -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left flex items-center px-4 py-2 text-red-600 hover:bg-red-100 transition duration-150">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </button>
            </form>
        </div>
    </div>
</header>

<div class="fixed top-0 bottom-0 left-0 h-screen bg-gray-800 text-gray-100 transition-all duration-150 flex flex-col z-20"
    :class="sidebarOpen ? 'w-64' : 'w-16'" x-cloak>

    <!-- Sidebar Header -->
    <div class="h-[60px] px-3 flex items-center justify-between border-b border-gray-700">
        <span x-show="sidebarOpen" x-cloak class="text-3xl font-extrabold tracking-widest cursor-pointer"
            onclick="location.reload()"> 
            Quiz Admin
        </span>
        <button @click="sidebarOpen = !sidebarOpen" class="text-white text-2xl focus:outline-none">
            <i :class="sidebarOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="mt-4 flex-1">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="flex items-center p-3 mx-2 rounded-r-lg transition-all duration-150 hover:bg-gray-700
              {{ request()->routeIs('dashboard') ? 'bg-blue-500 text-white border-l-4 border-blue-300 shadow-sm' : 'text-gray-300' }}">
            <i class="fas fa-home w-6 text-lg mr-3"></i>
            <span x-show="sidebarOpen" x-cloak>Dashboard</span>
        </a>

        <!-- Quiz Menu -->
        @php
          $isReports = request()->routeIs('quizentry') || request()->routeIs('quizlist');
        @endphp

        <div class="mx-2" x-data="{ showReports: {{ $isReports ? 'true' : 'false' }} }">
            <button @click="showReports = !showReports"
                class="w-full flex items-center p-3 rounded-r-lg mt-1 focus:outline-none transition-all duration-150 hover:bg-gray-700
                       {{ $isReports ? 'bg-blue-500 text-white border-l-4 border-blue-300 shadow-md' : 'text-gray-300' }}">
                <i class="fas fa-chart-line w-6 text-lg mr-3"></i>
                <span x-show="sidebarOpen" x-cloak class="flex-1 text-left">Reports</span>
                <i x-show="sidebarOpen" :class="showReports ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
                    class="text-sm ml-auto"></i>
            </button>

            <!-- Sub Reports -->
            <div x-show="showReports && sidebarOpen" x-cloak x-transition class="ml-5 mt-1 space-y-1">
                <!-- Today Reports -->
                <a href="{{ route('quizentry') }}"
                    class="flex items-center text-sm px-4 py-1 pl-6 rounded-r-lg transition-all duration-150
                      {{ request()->routeIs('quizentry') ? 'bg-blue-200 text-gray-900 font-semibold shadow-sm' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <span class="text-white text-2xl mr-2">•</span>
                    <span>Today Reports</span>
                </a>

                <!-- Previous Reports -->
                <a href="{{ route('quizlist') }}"
                    class="flex items-center text-sm px-4 py-1 pl-6 rounded-r-lg transition-all duration-150
                      {{ request()->routeIs('quizlist') ? 'bg-blue-200 text-gray-900 font-semibold shadow-sm' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <span class="text-white text-2xl mr-2">•</span>
                    <span>Today Reports</span>
                </a>
            </div>
        </div>
    </nav>

</div>

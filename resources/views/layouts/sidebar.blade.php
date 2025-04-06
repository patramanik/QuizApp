<div x-data="{ open: true }" class="h-screen bg-gray-800 text-gray-100 transition-all duration-300 flex flex-col"
    :class="open ? 'w-64' : 'w-16'">

    <!-- Header with Toggle -->
    <div class="p-3 flex items-center justify-between border-b border-gray-700">
        <span x-show="open" x-cloak class="text-3xl font-bold leading-snug">
            <strong class="tracking-widest block">Quiz Admin</strong>
        </span>
        
        <button @click="open = !open" class="text-white text-xl focus:outline-none">
            <i :class="open ? 'fas fa-times' : 'fas fa-bars'"></i>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="mt-4 flex-1" x-data="{ active: 'dashboard', showReports: true, subActive: '' }">

        <!-- Dashboard -->
        <a href="#" @click.prevent="active = 'dashboard'; subActive = '';"
            :class="active === 'dashboard'
                ?
                'bg-blue-700 text-white border-l-4 border-blue-300 shadow-sm' :
                'text-gray-300'"
            class="flex items-center p-3 hover:bg-gray-700 transition-all duration-200 rounded-r-lg mx-2">
            <i class="fas fa-home w-6 text-lg mr-3 min-w-[24px]"></i>
            <span x-show="open" x-cloak class="transition-opacity duration-300">Dashboard</span>
        </a>

        <!-- Reports Parent -->
        <div class="mx-2">
            <button @click="showReports = !showReports; active = 'reports'"
                :class="active === 'reports'
                    ?
                    'bg-blue-700 text-white border-l-4 border-blue-300 shadow-md' :
                    'text-gray-300'"
                class="w-full flex items-center p-3 hover:bg-gray-700 transition-all duration-200 rounded-r-lg mt-1 focus:outline-none">
                <i class="fas fa-chart-line w-6 text-lg mr-3 min-w-[24px]"></i>
                <span x-show="open" x-cloak class="flex-1 text-left">Reports</span>
                <i x-show="open" :class="showReports ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
                    class="text-sm"></i>
            </button>

            <!-- Submenu -->
            <div x-show="showReports && open" x-cloak x-transition class="ml-5 mt-1 space-y-1 relative overflow-hidden">
                <!-- Today Reports -->
                <a href="#" @click.prevent="active = 'reports'; subActive = 'today'"
                    :class="subActive === 'today'
                        ?
                        'bg-blue-300 text-gray-900 font-semibold shadow-sm' :
                        'text-gray-300 hover:bg-gray-700 hover:text-white'"
                    class="flex items-center text-sm px-4 py-1 pl-6 rounded-r-lg transition-all duration-200">
                    <span class="text-white text-2xl mr-2" style="text-shadow: 1px 1px 3px #000000;">•</span>

                    <span x-show="open" x-cloak>Today Reports</span>
                </a>

                <!-- Previous Reports -->
                <a href="#" @click.prevent="active = 'reports'; subActive = 'previous'"
                    :class="subActive === 'previous'
                        ?
                        'bg-blue-300 text-gray-900 font-semibold shadow-sm' :
                        'text-gray-300 hover:bg-gray-700 hover:text-white'"
                    class="flex items-center text-sm px-4 py-1 pl-6 rounded-r-lg transition-all duration-200">
                    <span class="text-white text-2xl mr-2" style="text-shadow: 1px 1px 3px #000000;">•</span>

                    <span x-show="open" x-cloak>Previous Reports</span>
                </a>
            </div>




        </div>


        <!-- Add more nav items if needed -->

    </nav>
</div>

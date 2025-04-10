<div class="fixed top-0 bottom-0 left-0 h-screen bg-gray-800 text-gray-100 transition-all duration-150 flex flex-col z-20"
     :class="sidebarOpen ? 'w-64' : 'w-16'" x-cloak>
  
  <!-- Sidebar header with toggle -->
  <div class="h-[60px] px-3 flex items-center justify-between border-b border-gray-700">
    <span x-show="sidebarOpen" x-cloak class="text-3xl font-extrabold tracking-widest ">
      Quiz Admin
    </span>
    <button @click="sidebarOpen = !sidebarOpen" class="text-white text-2xl focus:outline-none">
      <i :class="sidebarOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
    </button>
  </div>
  
  
  <!-- Navigation -->
  <nav class="mt-4 flex-1" x-data="{ active: 'dashboard', showReports: false, subActive: '' }">
    <a href="#" @click.prevent="active = 'dashboard'; subActive = ''"
       :class="active === 'dashboard'
                ? 'bg-blue-700 text-white border-l-4 border-blue-300 shadow-sm'
                : 'text-gray-300'"
       class="flex items-center p-3 hover:bg-gray-700 transition-all duration-150 rounded-r-lg mx-2">
      <i class="fas fa-home w-6 text-lg mr-3"></i>
      <span x-show="sidebarOpen" x-cloak>Dashboard</span>
    </a>
    
    <div class="mx-2">
      <button @click="showReports = !showReports; active = 'reports'"
              :class="active === 'reports'
                       ? 'bg-blue-700 text-white border-l-4 border-blue-300 shadow-md'
                       : 'text-gray-300'"
              class="w-full flex items-center p-3 hover:bg-gray-700 transition-all duration-150 rounded-r-lg mt-1 focus:outline-none">
        <i class="fas fa-chart-line w-6 text-lg mr-3"></i>
        <span x-show="sidebarOpen" x-cloak class="flex-1 text-left">Reports</span>
        <i x-show="sidebarOpen" :class="showReports ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-sm ml-auto"></i>
      </button>
      
      <div x-show="showReports && sidebarOpen" x-cloak x-transition class="ml-5 mt-1 space-y-1">
        <a href="#" @click.prevent="subActive = 'today'"
           :class="subActive === 'today'
                    ? 'bg-blue-300 text-gray-900 font-semibold shadow-sm'
                    : 'text-gray-300 hover:bg-gray-700 hover:text-white'"
           class="flex items-center text-sm px-4 py-1 pl-6 rounded-r-lg transition-all duration-150">
          <span class="text-white text-2xl mr-2">•</span>
          <span>Today Reports</span>
        </a>
        <a href="#" @click.prevent="subActive = 'previous'"
           :class="subActive === 'previous'
                    ? 'bg-blue-300 text-gray-900 font-semibold shadow-sm'
                    : 'text-gray-300 hover:bg-gray-700 hover:text-white'"
           class="flex items-center text-sm px-4 py-1 pl-6 rounded-r-lg transition-all duration-150">
          <span class="text-white text-2xl mr-2">•</span>
          <span>Previous Reports</span>
        </a>
      </div>
    </div>
  </nav>
</div>

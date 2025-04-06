<header class="bg-gradient-to-r from-purple-600 to-pink-600 text-white p-4 flex justify-between items-center shadow-md">
    <h1 class="text-2xl font-semibold">My App Header</h1>
    <!-- Profile Dropdown -->
    <div x-data="{ open: false }" class="relative">
      <button @click="open = !open" class="focus:outline-none flex items-center">
        <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full w-10 h-10 border-2 border-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg overflow-hidden z-30">
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Settings</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</a>
      </div>
    </div>
  </header>
  
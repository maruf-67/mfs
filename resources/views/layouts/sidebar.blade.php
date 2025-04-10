<!-- Replace your existing sidebar include with this -->
<div x-data="{ sidebarOpen: false }" class="flex-shrink-0">
    <!-- Desktop Sidebar -->
    <div class="hidden sm:flex sm:flex-col bg-white text-gray-900 w-64 min-h-screen">
        <div class="p-4 text-center font-semibold text-xl border-b">Admin Dashboard</div>
        <nav class="space-y-2 p-2">
            <a href="{{ route('dashboard') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200">
                <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
            </a>
            <a href="{{ route('user.index') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200">
                <i class="fas fa-users mr-3"></i> Users
            </a>
            <a href="{{ route('transaction.index') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200">
                <i class="fas fa-exchange-alt mr-3"></i> Transactions
            </a>
            <a href="{{ route('blocked.index') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200">
                <i class="fas fa-ban mr-3"></i> Blocked Numbers
            </a>
            <a href="{{ route('method.index') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200">
                <i class="fas fa-mobile-alt mr-3"></i> MFS
            </a>
        </nav>
    </div>

    <!-- Mobile Hamburger Button -->
    <div class="sm:hidden p-4 bg-white border-b">
        <button @click="sidebarOpen = !sidebarOpen"
                class="p-2 text-gray-600 hover:text-gray-900 focus:outline-none"
                aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!sidebarOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"></path>
                <path x-show="sidebarOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Sidebar -->
    <div x-show="sidebarOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="transform -translate-x-full"
         x-transition:enter-end="transform translate-x-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="transform translate-x-0"
         x-transition:leave-end="transform -translate-x-full"
         class="fixed inset-y-0 left-0 w-64 bg-white z-50 sm:hidden">
        <div class="p-4 text-center font-semibold text-xl border-b">Admin Dashboard</div>
        <nav class="space-y-2 p-2">
            <a href="{{ route('dashboard') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200"
               @click="sidebarOpen = false">
                <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
            </a>
            <a href="{{ route('user.index') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200"
               @click="sidebarOpen = false">
                <i class="fas fa-users mr-3"></i> Users
            </a>
            <a href="{{ route('transaction.index') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200"
               @click="sidebarOpen = false">
                <i class="fas fa-exchange-alt mr-3"></i> Transactions
            </a>
            <a href="{{ route('blocked.index') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200"
               @click="sidebarOpen = false">
                <i class="fas fa-ban mr-3"></i> Blocked Numbers
            </a>
            <a href="{{ route('method.index') }}"
               class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center transition-colors duration-200"
               @click="sidebarOpen = false">
                <i class="fas fa-mobile-alt mr-3"></i> MFS
            </a>
        </nav>
    </div>

    <!-- Overlay for mobile -->
    <div x-show="sidebarOpen"
         @click="sidebarOpen = false"
         class="fixed inset-0 bg-gray-500 bg-opacity-50 z-40 sm:hidden"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
    </div>
</div>

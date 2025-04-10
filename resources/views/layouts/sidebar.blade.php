<div x-data="{ open: false }" class="flex-shrink-0 bg-white text-gray-900 w-64 min-h-screen">
    <div class="p-4 text-center font-semibold text-xl">Admin Dashboard</div>
    <nav class="space-y-2">
        <!-- Dashboard Link -->
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
        </a>
        <!-- Users Link -->
        <a href="{{ route('user.index') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-users mr-3"></i> Users
        </a>
        <!-- Transactions Link -->
        <a href="{{ route('transaction.index') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-exchange-alt mr-3"></i> Transactions
        </a>
        <!-- Blocked Numbers Link -->
        <a href="{{ route('blocked.index') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-ban mr-3"></i> Blocked Numbers
        </a>
        <!-- MFS Link -->
        <a href="{{ route('method.index') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-mobile-alt mr-3"></i> MFS
        </a>
    </nav>

    <!-- Mobile Hamburger Menu -->
    <div class="block sm:hidden">
        <button @click="open = ! open" class="p-2 text-gray-500 hover:bg-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Off-canvas sidebar (for mobile) -->
    <div x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-50 sm:hidden" @click="open = false"></div>
    <div x-show="open" class="fixed top-0 left-0 w-64 bg-gray-100 p-4 space-y-2 sm:hidden">
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
        </a>
        <a href="{{ route('user.index') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-users mr-3"></i> Users
        </a>
        <a href="{{ route('transaction.index') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-exchange-alt mr-3"></i> Transactions
        </a>
        <a href="{{ route('blocked.index') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-ban mr-3"></i> Blocked Numbers
        </a>
        <a href="{{ route('method.index') }}" class="block px-4 py-2 hover:bg-gray-300 rounded flex items-center">
            <i class="fas fa-mobile-alt mr-3"></i> MFS
        </a>
    </div>
</div>


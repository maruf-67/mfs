<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <div x-data="{ open: false }" class="flex-shrink-0 bg-gray-800 text-white w-64 min-h-screen">
            <div class="p-4 text-center font-semibold text-xl">Admin Dashboard</div>
            <nav class="space-y-2">
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                </a>
                <a href="{{ route('user.index') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">
                    <i class="fas fa-users mr-2"></i> Users
                </a>
                <a href="{{ route('transaction.index') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">
                    <i class="fas fa-exchange-alt mr-2"></i> Transactions
                </a>
                <a href="{{ route('blocked.index') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">
                    <i class="fas fa-ban mr-2"></i> Blocked Numbers
                </a>
                <a href="{{ route('method.index') }}" class="block px-4 py-2 hover:bg-gray-700 rounded">
                    <i class="fas fa-mobile-alt mr-2"></i> MFS
                </a>
            </nav>
        </div>
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            @include('layouts.navigation')

            <!-- Main Content Area -->
            <div class="flex-1 p-6">
                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow mb-6 p-4 rounded-lg">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset


                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

</body>

</html>

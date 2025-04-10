<x-app-layout>

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Today's Orders Card -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="text-blue-500 text-3xl mr-4">
                    <i class="fas fa-box"></i>
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Today's Orders</h2>
                    <p class="text-gray-600">Total: 120</p>
                </div>
            </div>
        </div>

        <!-- Weekly Orders Card -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="text-green-500 text-3xl mr-4">
                    <i class="fas fa-calendar-week"></i>
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Weekly Orders</h2>
                    <p class="text-gray-600">Total: 850</p>
                </div>
            </div>
        </div>

        <!-- Pending Transactions Card -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="text-yellow-500 text-3xl mr-4">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Pending Transactions</h2>
                    <p class="text-gray-600">Total: 45</p>
                </div>
            </div>
        </div>

        <!-- Blocked Numbers Card -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="text-red-500 text-3xl mr-4">
                    <i class="fas fa-ban"></i>
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Blocked Numbers</h2>
                    <p class="text-gray-600">Total: 20</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

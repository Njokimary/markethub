<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            
            <!-- Logo -->
            <!-- <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                MarketHub
            </a> -->
            
            <!-- Search Bar -->
            <div class="hidden md:flex flex-1 mx-8">
                <input 
                    type="text" 
                    placeholder="Search products..." 
                    class="w-full px-4 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <button class="bg-blue-600 text-white px-6 py-2 rounded-r-lg hover:bg-blue-700">
                    Search
                </button>
            </div>
            
            <!-- Navigation Links -->
            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-blue-600">Products</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600">About</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">Contact</a>
                
                <!-- Cart Icon -->
                <a href="#" class="relative text-gray-700 hover:text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                </a>
                
                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-700 hover:text-blue-600">Login</a>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Register</a>
                </div>
            </div>
        </div>
    </div>
</nav>
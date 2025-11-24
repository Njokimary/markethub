<footer class="bg-gray-800 text-white mt-12">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <!-- About Section -->
            <div>
                <h3 class="text-lg font-bold mb-4">MarketHub</h3>
                <p class="text-gray-400 text-sm">
                    Your trusted multi-vendor marketplace. Connect with sellers worldwide.
                </p>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Become a Seller</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Help Center</a></li>
                </ul>
            </div>
            
            <!-- Categories -->
            <div>
                <h3 class="text-lg font-bold mb-4">Categories</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-white">Electronics</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Fashion</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Home & Garden</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Books</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-bold mb-4">Contact Us</h3>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li>Email: support@markethub.com</li>
                    <li>Phone: +1 234 567 8900</li>
                    <li>Address: 123 Market St, City</li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} MarketHub. All rights reserved.</p>
        </div>
    </div>
</footer>
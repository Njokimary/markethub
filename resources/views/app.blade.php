<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MarketHub - Multi-Vendor Marketplace')</title>
    
    <!-- Tailwind CSS CDN (we'll use this for quick styling) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    @stack('styles')
</head>
<body class="bg-gray-50">
    
    <!-- Navigation -->
    @include('navigation')
    
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('layouts.footer')
    
    @stack('scripts')
</body>
</html>
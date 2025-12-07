<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Charging E-Bike Charging Station</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-white font-sans">

    {{-- Hero Section --}}
    <section class="min-h-screen flex flex-col justify-center items-center text-center bg-black">
        <h1 class="text-6xl md:text-7xl font-extrabold mb-6 tracking-tight uppercase">Fast Charging E-Bike Charging Station</h1>
        <p class="text-xl md:text-2xl mb-8 text-gray-300">Fast. Reliable. Smart. Charge your e-bike with confidence.</p>
        <a href="/download" class="px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-black transition-all duration-300">Download App</a>
    </section>

    {{-- Features Section --}}
    <section class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-gray-800 rounded-xl shadow-lg hover:scale-105 transition-transform">
                <svg class="w-12 h-12 text-white mb-4" fill="currentColor" viewBox="0 0 20 20"><path d="M..."/></svg>
                <h3 class="text-xl font-bold mb-2">Fast Charging</h3>
                <p class="text-gray-400">Get your e-bike charged in record time with our advanced technology.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-xl shadow-lg hover:scale-105 transition-transform">
                <svg class="w-12 h-12 text-white mb-4" fill="currentColor" viewBox="0 0 20 20"><path d="M..."/></svg>
                <h3 class="text-xl font-bold mb-2">Payment Methods</h3>
                <p class="text-gray-400">Pay with coins, bills and e-wallets.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-xl shadow-lg hover:scale-105 transition-transform">
                <svg class="w-12 h-12 text-white mb-4" fill="currentColor" viewBox="0 0 20 20"><path d="M..."/></svg>
                <h3 class="text-xl font-bold mb-2">Diagnostic Tools</h3>
                <p class="text-gray-400">Built with diagnostic tools for identifying problems immediately.</p>
            </div>
        </div>
    </section>

    {{-- Screenshots / App Preview Section --}}
    <section class="py-20 bg-black">
        <div class="max-w-5xl mx-auto px-4">
            <div id="screenshotCarousel" class="relative">
                <div class="overflow-hidden relative rounded-lg bg-gray-900" style="height: 600px;">
                    <div class="hidden duration-700 ease-in-out absolute inset-0" data-carousel-item>
                        <img src="/screenshots/1.png" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-h-full max-w-full object-contain" alt="Screenshot 1">
                    </div>
                    <div class="hidden duration-700 ease-in-out absolute inset-0" data-carousel-item>
                        <img src="/screenshots/2.png" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-h-full max-w-full object-contain" alt="Screenshot 2">
                    </div>
                    <div class="hidden duration-700 ease-in-out absolute inset-0" data-carousel-item>
                        <img src="/screenshots/3.png" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-h-full max-w-full object-contain" alt="Screenshot 3">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" data-carousel-prev class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white/10 rounded-full p-3 m-2 text-white hover:bg-white/30 z-10">&#8592;</button>
                <button type="button" data-carousel-next class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white/10 rounded-full p-3 m-2 text-white hover:bg-white/30 z-10">&#8594;</button>
            </div>
        </div>
    </section>

    {{-- Download CTA Section --}}
    <section class="py-16 bg-gray-900 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Charge Smarter Today</h2>
        <p class="text-gray-400 mb-6">Download the companion app and control your charging experience.</p>
        <a href="/download" class="btn btn-lg btn-primary">Download APK</a>
    </section>

    {{-- Footer --}}
    <footer class="bg-black text-white p-6 flex flex-col md:flex-row justify-between items-center border-t border-gray-800">
        <p>© 2025 Fast Charging E-Bike Charging Station. All rights reserved.</p>
        <div class="flex gap-4 mt-4 md:mt-0">
            <a href="https://github.com/Dan-Delvo" class="hover:text-gray-400">GitHub</a>
            <a href="https://www.linkedin.com/in/dan-jaspher-delvo" class="hover:text-gray-400">LinkedIn</a>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>

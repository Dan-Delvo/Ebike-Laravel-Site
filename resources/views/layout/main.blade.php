<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Charging E-Bike Charging Station</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-white font-sans">

    {{-- Navigation Bar --}}
    <nav class="fixed top-0 w-full bg-black/90 backdrop-blur-sm z-50 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <svg class="w-8 h-8 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"/>
                </svg>
                <span class="text-xl font-bold">E-Charge</span>
            </div>
            <div class="flex gap-6">
                <a href="#features" class="hover:text-green-400 transition-colors">Features</a>
                <a href="#how-it-works" class="hover:text-green-400 transition-colors">How It Works</a>
                <a href="#download" class="hover:text-green-400 transition-colors">Download</a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="min-h-screen flex flex-col justify-center items-center text-center bg-gradient-to-b from-black via-gray-900 to-black px-4 pt-20">
        <div class="mb-6 relative">
            <div class="absolute inset-0 blur-3xl bg-green-500/20 rounded-full"></div>
            <svg class="w-24 h-24 text-green-400 relative z-10 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"/>
            </svg>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight leading-tight">
            Fast Charging<br/>
            <span class="bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent">E-Bike Station</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-gray-300 max-w-2xl">Fast. Reliable. Smart. Charge your e-bike with confidence and get back on the road in minutes.</p>
        <div class="flex gap-4 flex-wrap justify-center">
            <a href="/download" class="px-8 py-4 text-lg font-semibold bg-green-500 text-black rounded-lg hover:bg-green-400 transition-all duration-300 shadow-lg shadow-green-500/50">Download App</a>
            <a href="#how-it-works" class="px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-black transition-all duration-300">Learn More</a>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-3 gap-8 mt-16 max-w-3xl w-full">
            <div class="text-center">
                <div class="text-4xl font-bold text-green-400">45min</div>
                <div class="text-gray-400 mt-2">Avg. Charge Time</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-green-400">24/7</div>
                <div class="text-gray-400 mt-2">Always Available</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-green-400">1</div>
                <div class="text-gray-400 mt-2">Station</div>
            </div>
        </div>
    </section>

    {{-- How It Works Section --}}
    <section id="how-it-works" class="py-20 bg-gradient-to-b from-black to-gray-900">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-4">How It Works</h2>
            <p class="text-gray-400 text-center mb-16 max-w-2xl mx-auto">Get charged in 3 simple steps</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center relative">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center text-2xl font-bold shadow-lg shadow-green-500/50">1</div>
                    <h3 class="text-2xl font-bold mb-4">Pay with Coins, Bills, E-wallets</h3>
                    <p class="text-gray-400">Insert money or Pay with E-wallet on the charging station to start</p>
                </div>
                <div class="text-center relative">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-2xl font-bold shadow-lg shadow-blue-500/50">2</div>
                    <h3 class="text-2xl font-bold mb-4">Plug & Pay</h3>
                    <p class="text-gray-400">Connect your e-bike and choose your payment method - coins, bills, or e-wallet</p>
                </div>
                <div class="text-center relative">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center text-2xl font-bold shadow-lg shadow-purple-500/50">3</div>
                    <h3 class="text-2xl font-bold mb-4">Get Notified</h3>
                    <p class="text-gray-400">Receive email notifications when charging starts and when it's complete</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-4">Why Choose Us?</h2>
            <p class="text-gray-400 text-center mb-16 max-w-2xl mx-auto">Advanced features for the modern rider</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-xl hover:scale-105 transition-transform border border-gray-700">
                    <div class="w-16 h-16 bg-green-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Fast Charging</h3>
                    <p class="text-gray-400">Get your e-bike charged in record time with our advanced fast-charging technology. Full charge in just 45 minutes.</p>
                </div>

                <div class="p-8 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-xl hover:scale-105 transition-transform border border-gray-700">
                    <div class="w-16 h-16 bg-blue-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Flexible Payment</h3>
                    <p class="text-gray-400">Pay with coins, bills, or digital wallets. We accept all major payment methods for your convenience.</p>
                </div>

                <div class="p-8 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-xl hover:scale-105 transition-transform border border-gray-700">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Smart Diagnostics</h3>
                    <p class="text-gray-400">Built-in diagnostic tools identify charging issues immediately and ensure optimal battery health.</p>
                </div>

                <div class="p-8 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-xl hover:scale-105 transition-transform border border-gray-700">
                    <div class="w-16 h-16 bg-yellow-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Email Notifications</h3>
                    <p class="text-gray-400">Receive instant email alerts when your charging starts and when it's complete. Never miss a beat.</p>
                </div>

                <div class="p-8 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-xl hover:scale-105 transition-transform border border-gray-700">
                    <div class="w-16 h-16 bg-red-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Secure & Safe</h3>
                    <p class="text-gray-400">Industrial-grade hardware with multiple safety features ensures your e-bike charges safely every time.</p>
                </div>

                <div class="p-8 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-xl hover:scale-105 transition-transform border border-gray-700">
                    <div class="w-16 h-16 bg-green-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">24/7 Availability</h3>
                    <p class="text-gray-400">Our stations are always open, ready to serve you anytime, day or night, whenever you need a charge.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Screenshots / App Preview Section --}}
    <section id="download" class="py-20 bg-gradient-to-b from-gray-900 to-black">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-4">See It In Action</h2>
            <p class="text-gray-400 text-center mb-16 max-w-2xl mx-auto">Experience the future of e-bike charging</p>

            <div id="screenshotCarousel" class="relative max-w-4xl mx-auto">
                <div class="overflow-hidden relative rounded-2xl bg-gradient-to-br from-gray-800 to-gray-900 shadow-2xl border border-gray-700" style="height: 600px;">
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
                <button type="button" data-carousel-prev class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-green-500/20 backdrop-blur-sm rounded-full p-4 text-white hover:bg-green-500/40 z-10 transition-all border border-green-500/30">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button type="button" data-carousel-next class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-green-500/20 backdrop-blur-sm rounded-full p-4 text-white hover:bg-green-500/40 z-10 transition-all border border-green-500/30">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </section>

    {{-- Download CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-green-900/20 via-black to-blue-900/20 text-center border-y border-gray-800">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-gray-300 text-lg mb-8">Download the app today and experience the future of e-bike charging</p>
            <a href="/download" class="inline-block px-10 py-5 text-xl font-semibold bg-gradient-to-r from-green-500 to-green-600 text-black rounded-xl hover:from-green-400 hover:to-green-500 transition-all duration-300 shadow-2xl shadow-green-500/50 transform hover:scale-105">
                Download APK Now
            </a>
            <p class="text-gray-400 text-sm mt-6">Available for Android devices</p>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-black text-white py-12 border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-8 h-8 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"/>
                        </svg>
                        <span class="text-xl font-bold">E-Charge</span>
                    </div>
                    <p class="text-gray-400">Powering the future of sustainable transportation, one charge at a time.</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#features" class="hover:text-green-400 transition-colors">Features</a></li>
                        <li><a href="#how-it-works" class="hover:text-green-400 transition-colors">How It Works</a></li>
                        <li><a href="#download" class="hover:text-green-400 transition-colors">Download</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Connect With Us</h3>
                    <div class="flex gap-4">
                        <a href="https://github.com/Dan-Delvo" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-green-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.840 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/dan-jaspher-delvo" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-green-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>© 2025 Fast Charging E-Bike Station. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>

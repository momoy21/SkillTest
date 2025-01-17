<!-- File: resources/views/pages/home.blade.php -->
@extends('layouts.app')
@section('content')
<!-- Language Bar -->
<div class="fixed w-full z-50">
    <div class="bg-blue-1000 h-8 sm:h-10">
        <div class="flex items-center justify-end px-4 sm:pr-20 pt-1 sm:pt-2 space-x-2">
            <a href="?lang=id" class="text-sm sm:text-base text-white hover:text-gray-900 font-semibold">ID</a>
            <span class="text-gray-300 font-semibold">|</span>
            <a href="?lang=en" class="text-sm sm:text-base text-white hover:text-gray-900 font-semibold">EN</a>
        </div>
    </div>

    <!-- Logo Header -->
    <div class="bg-white">
        <header class="w-full bg-white opacity-90 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-3 sm:py-4">
                    <!-- Logo Container -->
                    <div class="flex items-center space-x-2 sm:space-x-4">
                        <!-- Helios Logo -->
                        <img src="{{ asset('images/Helios.png') }}"
                             alt="Helios Logo"
                             class="h-6 sm:h-8 md:h-10 lg:h-12 w-auto object-contain transition-all duration-300">
                        <!-- Sangfor Logo -->
                        <img src="{{ asset('images/Sangfor.png') }}"
                             alt="Sangfor Image"
                             class="h-6 sm:h-8 md:h-10 lg:h-12 w-auto object-contain transition-all duration-300">
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>

<section class="relative min-h-screen pt-32">
    <div class="absolute inset-0">
        <img src="{{ asset('images/bg6.png') }}" alt="Background" class="w-full h-full object-cover">
    </div>

    <!-- Content -->
    <div class="relative flex flex-col items-center justify-center min-h-[500px] space-y-6 md:space-y-8 px-4">
        <img src="{{ asset('images/thanks.png') }}" alt="Thank You" class="w-[200px] md:w-[500px] h-auto">

        <div class="text-center pb-2">
            <h1 class="text-2xl md:text-3xl font-semibold text-blue-950">Thank You for Your Interest</h1>
            <p class="text-base md:text-lg font-semibold text-gray-500 mt-2">Our team will contact you within 5 working days.</p>
        </div>

        <div class="pb-5">
            <a href="{{ url('/') }}"
                class="mt-5 bg-green-500 hover:bg-green-600 text-white px-6 md:px-8 py-2 md:py-3 rounded-lg font-semibold transition duration-300 text-sm md:text-base">
                Back to Homepage
            </a>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="relative bg-gradient-to-r from-blue-900 to-green-600 overflow-hidden bottom-0">
    <!-- Grid Container -->
    <div class="grid grid-cols-1 md:grid-cols-2 relative z-10 container mx-auto px-4 md:px-8 py-8 md:py-12 gap-8">
        <!-- Company Information -->
        <div class="text-white max-w-md pt-4 md:pt-10 px-4 md:pl-20">
            <h2 class="text-xl font-semibold mb-4">PT. Helios Informatika Nusantara</h2>
            <div class="text-lg space-y-1">
                <p>Centennial Tower, 12th Floor,</p>
                <p>Jl. Jendral Gatot Subroto</p>
                <p>No. Kav 24-25, Jakarta</p>
                <p>12930 Indonesia</p>

                <div class="pt-4 mt-4 space-y-1">
                    <p><span class="inline-block w-16"><b>Phone:</b></span> +62 21 8062 2220</p>
                    <p><span class="inline-block w-16"><b>Email:</b></span> Tencent@helios.id</p>
                </div>
            </div>

            <!-- Social Media Icons -->
            <div class="flex gap-4 pt-4 mt-8">
                <a href="#" class="bg-white p-2 rounded-full w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                    <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="w-4 h-4">
                </a>
                <a href="#" class="bg-white p-2 rounded-full w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-4 h-4">
                </a>
                <a href="#" class="bg-white p-2 rounded-full w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                    <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="w-4 h-4">
                </a>
                <a href="#" class="bg-white p-2 rounded-full w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                    <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="w-4 h-4">
                </a>
                <a href="#" class="bg-white p-2 rounded-full w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                    <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="w-4 h-4">
                </a>
            </div>
        </div>

        <!-- Background Image -->
        <div class="relative h-full md:h-auto">
            <img src="{{ asset('images/map.png') }}" alt="World Map" class="h-full w-full object-cover opacity-90">
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bg-blue-1000 py-4 w-full bottom-0 margin-0">
        <div class="container mx-auto px-4">
            <p class="text-white text-sm text-center m-0">© 2023 - PT. Helios Informatika Nusantara - All Right Reserved</p>
        </div>
    </div>
</footer>

@endsection

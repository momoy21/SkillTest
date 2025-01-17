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

<!-- Hero Section with Padding Top to Account for Fixed Header -->
<section class="relative h-[500px] md:h-[700px] pt-32">
    <div class="absolute inset-0">
        <img src="{{ asset('images/bg1.png') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-green-900/80"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 py-10 md:py-20">
        <div class="text-white space-y-4 md:space-y-6 px-4 md:pl-10">
            <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                Cybersecurity Made Simple<br class="hidden md:block">
                with Sangfor Cyber Command
            </h1>
            <p class="text-lg md:text-xl text-gray-200">
                Simplify your cybersecurity with Sangfor Cyber<br class="hidden md:block">
                Command's user-friendly interface and<br class="hidden md:block">
                comprehensive threat protection
            </p>
            <div class="flex items-center">
                <button onclick="document.getElementById('form-section').scrollIntoView({ behavior: 'smooth' });"
                class="bg-green-500 hover:bg-green-600 text-white px-4 md:px-8 py-2 md:py-3 rounded-l-lg font-semibold transition duration-300 text-sm md:text-base">
                FREE TRIAL
                </button>

                <button onclick="document.getElementById('form-section').scrollIntoView({ behavior: 'smooth' });"
                class="bg-green-700 hover:bg-green-600 text-white p-2.5 md:p-3 rounded-r-lg transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            </div>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="relative bg-gray-100">
    <div class="absolute inset-0">
        <img src="{{ asset('images/bg2.png') }}" alt="Background Pattern" class="w-full h-full object-cover">
    </div>

    <div class="relative max-w-6xl mx-auto px-4 py-8 md:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12">
            <!-- Left Column - About Content -->
            <div class="space-y-4 md:space-y-7 py-8 md:py-20 px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-blue-950">About Sangfor<br>Cyber Command</h2>
                <p class="text-gray-600 text-sm md:text-base">
                    Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.
                </p>
                <p class="text-gray-600 text-sm md:text-base">
                    It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.
                </p>
                <p class="text-gray-600 text-sm md:text-base">
                    The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.
                </p>
                <p class="text-gray-600 text-sm md:text-base">
                    Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.
                </p>
            </div>

 <!-- Right Column - Form -->
 <div id="form-section" class="bg-white p-4 md:p-8 rounded-lg shadow-lg">
    <h3 class="text-lg md:text-xl font-semibold text-blue-950">
        Dapatkan Free Trial selama 1 bulan,
    </h3>

    <h3 class="text-lg md:text-xl font-semibold text-gray-600 mb-10">
        analisa keamanan network anda dan lihat hasilnya!
    </h3>

    <form action="{{ route('thank-you') }}" method="POST" class="space-y-4">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">First Name <span class="text-red-600">*</span></label>
                <input type="text" name="first_name" required
                    class="mt-1 block w-full px-3 py-2 border-2 border-gray-300 rounded-md shadow-sm
                    placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500
                    focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Last Name <span class="text-red-600">*</span></label>
                <input type="text" name="last_name" required
                    class="mt-1 block w-full px-3 py-2 border-2 border-gray-300 rounded-md shadow-sm
                    placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500
                    focus:border-blue-500">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Corporate Email <span class="text-red-600">*</span></label>
            <input type="email" name="email" required
                class="mt-1 block w-full px-3 py-2 border-2 border-gray-300 rounded-md shadow-sm
                placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500
                focus:border-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Job Title <span class="text-red-600">*</span></label>
            <input type="text" name="job_title" required
                class="mt-1 block w-full px-3 py-2 border-2 border-gray-300 rounded-md shadow-sm
                placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500
                focus:border-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Company Name <span class="text-red-600">*</span></label>
            <input type="text" name="company_name" required
                class="mt-1 block w-full px-3 py-2 border-2 border-gray-300 rounded-md shadow-sm
                placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500
                focus:border-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Industry <span class="text-red-600">*</span></label>
            <select name="industry" required
                class="mt-1 block w-full px-3 py-2 border-2 border-gray-300 rounded-md shadow-sm
                placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500
                focus:border-blue-500">
                <option value="">Select Industry</option>
                <option value="technology">Technology</option>
                <option value="finance">Finance</option>
                <option value="healthcare">Healthcare</option>
                <option value="manufacturing">Manufacturing</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Phone Number <span class="text-red-600">*</span></label>
            <input type="tel" name="phone" required
                class="mt-1 block w-full px-3 py-2 border-2 border-gray-300 rounded-md shadow-sm
                placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-500
                focus:border-blue-500">
        </div>

        <div class="flex items-center">
            <input type="checkbox" name="consent" required class="h-4 w-4 rounded border-2 border-gray-300 text-blue-600 focus:ring-blue-500">
            <label class="ml-2 block text-sm text-gray-600">
                Click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!
            </label>
        </div>

        <button type="submit" class="w-full bg-green-500 text-white py-3 px-4 rounded-md hover:bg-green-600 transition duration-300 font-semibold">
            SEND
        </button>
    </form>
</div>
        </div>
    </div>
</section>
<!-- Advantages Section -->
<section class="relative">
    <div class="absolute inset-0">
        <img src="{{ asset('images/bg3.png') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/40 to-green-900/40"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 py-20">
        <h2 class="text-4xl font-bold text-white text-center mb-16">Sangfor Cyber Command Advantages</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Virus Scan Card -->
            <div class="bg-white rounded-lg p-8 shadow-lg transform hover:scale-105 transition duration-300">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/virusscan.png') }}" alt="Virus Scan" class="h-20 w-20">
                </div>
                <h3 class="text-xl font-semibold text-blue-950 text-center mb-4">Advanced Threat Detection</h3>
                <p class="text-gray-600 text-center">
                    Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.
                </p>
            </div>

            <!-- Antivirus Card -->
            <div class="bg-white rounded-lg p-8 shadow-lg transform hover:scale-105 transition duration-300">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/antivirus.png') }}" alt="Antivirus" class="h-20 w-20">
                </div>
                <h3 class="text-xl font-semibold text-blue-950 text-center mb-4">Network Visibility and Control</h3>
                <p class="text-gray-600 text-center">
                    Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.
                </p>
            </div>

            <!-- Upload Card -->
            <div class="bg-white rounded-lg p-8 shadow-lg transform hover:scale-105 transition duration-300">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/upload.png') }}" alt="Cloud Upload" class="h-20 w-20">
                </div>
                <h3 class="text-xl font-semibold text-blue-950 text-center mb-4">Cloud Security</h3>
                <p class="text-gray-600 text-center">
                    Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.
                </p>
            </div>

            <!-- Cybersecurity Card -->
            <div class="bg-white rounded-lg p-8 shadow-lg transform hover:scale-105 transition duration-300">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/cybersecurity.png') }}" alt="Cybersecurity" class="h-20 w-20">
                </div>
                <h3 class="text-xl font-semibold text-blue-950 text-center mb-4">Comprehensive Security Management</h3>
                <p class="text-gray-600 text-center">
                    Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="relative bg-white py-20">
    <div class="relative z-10 max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#1e2f5c] text-center mb-16">Sangfor Cyber Command Features</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Threat Intelligence -->
            <div class="bg-white rounded-lg p-6">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/retina.png') }}" alt="Threat Intelligence" class="h-16 w-16">
                </div>
                <h3 class="text-xl font-semibold text-[#1e2f5c] text-center mb-3">Threat Intelligence</h3>
                <p class="text-gray-600 text-center text-sm">
                    Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.
                </p>
            </div>

            <!-- Real-Time Detections -->
            <div class="bg-white rounded-lg p-6">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/online.png') }}" alt="Real-Time Detections" class="h-16 w-16">
                </div>
                <h3 class="text-xl font-semibold text-[#1e2f5c] text-center mb-3">Real-Time Detections</h3>
                <p class="text-gray-600 text-center text-sm">
                    Real-time alert system provides instant notification of potential security incidents.
                </p>
            </div>

            <!-- Threats Investigation -->
            <div class="bg-white rounded-lg p-6">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/spyware.png') }}" alt="Threats Investigation" class="h-16 w-16">
                </div>
                <h3 class="text-xl font-semibold text-[#1e2f5c] text-center mb-3">Threats Investigation</h3>
                <p class="text-gray-600 text-center text-sm">
                    In-depth threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Comprehensive Security Solutions -->
            <div class="bg-white rounded-lg p-6">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/hacker.png') }}" alt="Comprehensive Security" class="h-16 w-16">
                </div>
                <h3 class="text-xl font-semibold text-[#1e2f5c] text-center mb-3">Comprehensive Security Solutions</h3>
                <p class="text-gray-600 text-center text-sm">
                    In-depth threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.
                </p>
            </div>

            <!-- Rapid Response -->
            <div class="bg-white rounded-lg p-6">
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/safechat.png') }}" alt="Rapid Response" class="h-16 w-16">
                </div>
                <h3 class="text-xl font-semibold text-[#1e2f5c] text-center mb-3">Rapid Response</h3>
                <p class="text-gray-600 text-center text-sm">
                    Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any breaches.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Value to Customers Section -->
<section class="relative pb-48"> <!-- Added padding bottom for overlap -->
    <img src="{{ asset('images/bg4.png') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover">
    <div class="relative z-10 max-w-6xl mx-auto px-4 pt-20">
        <!-- Value Proposition -->
        <div class="text-center mb-16">
            <h2 class="text-[#1e2f5c] text-4xl font-bold mb-2">Sangfor Cyber Command's</h2>
            <h2 class="text-[#1e2f5c] text-4xl font-bold">Value to Customers</h2>
        </div>

        <!-- Value Points -->
        <div class="max-w-3xl mx-auto">
            <div class="space-y-4">
                <div class="flex items-start gap-3">
                    <img src="{{ asset('images/checkmark.png') }}" alt="Check" class="w-6 h-6 mt-1">
                    <p class="text-gray-700">Detect known dan unknown threats</p>
                </div>
                <div class="flex items-start gap-3">
                    <img src="{{ asset('images/checkmark.png') }}" alt="Check" class="w-6 h-6 mt-1">
                    <p class="text-gray-700">Much better visibility of security posture of the entire infrastructure</p>
                </div>
                <div class="flex items-start gap-3">
                    <img src="{{ asset('images/checkmark.png') }}" alt="Check" class="w-6 h-6 mt-1">
                    <p class="text-gray-700">Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
                </div>
                <div class="flex items-start gap-3">
                    <img src="{{ asset('images/checkmark.png') }}" alt="Check" class="w-6 h-6 mt-1">
                    <p class="text-gray-700">Faster Response to improve overall security control</p>
                </div>
                <div class="flex items-start gap-3">
                    <img src="{{ asset('images/checkmark.png') }}" alt="Check" class="w-6 h-6 mt-1">
                    <p class="text-gray-700">Much more cost effective than other solutions such as SIEM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blue Rectangle Section -->
<section class="relative z-20 -mt-32">
    <div class="max-w-xl mx-auto px-4">
        <div class="bg-[#1e2f5c] shadow-xl mb-10 max-w-xl mx-auto">
            <h2 class="text-white text-xl sm:text-2xl font-bold text-center py-3 sm:py-4">
                Cyber Command Customers Reference
            </h2>
        </div>
    </div>
</section>

<!-- Customer References Section -->
<section class="relative bg-gray-100"><section class="relative bg-gray-100 py-10 sm:py-16">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Section Title -->
        <div class="bg-[#1e2f5c] shadow-xl mb-10 max-w-xl mx-auto">
            <h2 class="text-white text-xl sm:text-2xl font-bold text-center py-3 sm:py-4">
                Cyber Command Customers Reference
            </h2>
        </div>

        <!-- Logo Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 md:gap-16 items-center justify-items-center py-8 sm:py-10">
            <!-- Customer Logos -->
            <img src="{{ asset('images/jnt.png') }}"
                 alt="J&T"
                 class="h-8 sm:h-12 md:h-16 w-auto object-contain">
            <img src="{{ asset('images/jrp.png') }}"
                 alt="Jasa Raharja Putera"
                 class="h-8 sm:h-12 md:h-16 w-auto object-contain">
            <img src="{{ asset('images/bank.png') }}"
                 alt="OK Bank"
                 class="h-8 sm:h-12 md:h-16 w-auto object-contain">
            <img src="{{ asset('images/si.png') }}"
                 alt="Samudra Indonesia"
                 class="h-8 sm:h-12 md:h-16 w-auto object-contain">
        </div>
    </div>
</section>


<!-- Explore Section with Icons -->
<section class="bg-white pb-20 pt-10"> <!-- Removed top padding -->
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center">
            <h2 class="text-[#1e2f5c] text-3xl font-bold mb-4">Explore Sangfor Cyber Command with Helios</h2>
            <p class="text-gray-600 mb-12">Helios Informatika Nusantara as Sangfor Distributor will provide</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="bg-white rounded-lg p-8 text-center shadow-lg">
                    <img src="{{ asset('images/ndr.png') }}" alt="NDR" class="w-16 h-16 mx-auto mb-4">
                    <p class="text-[#1e2f5c] font-semibold">NDR Implementation</p>
                </div>
                <div class="bg-white rounded-lg p-8 text-center shadow-lg">
                    <img src="{{ asset('images/hand.png') }}" alt="Incident Response" class="w-16 h-16 mx-auto mb-4">
                    <p class="text-[#1e2f5c] font-semibold">Incident Response<br>and Threat Hunting</p>
                </div>
                <div class="bg-white rounded-lg p-8 text-center shadow-lg">
                    <img src="{{ asset('images/maintenance.png') }}" alt="Device Security" class="w-16 h-16 mx-auto mb-4">
                    <p class="text-[#1e2f5c] font-semibold">Device Security<br>Maintenance</p>
                </div>
            </div>
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

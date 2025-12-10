<header class="sticky top-0 z-50 transition-colors duration-300 backdrop-blur-md border-b border-gray-200">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img id="mainLogo"
                src="{{ asset('images/logo-icon.webp') }}"
                data-light="{{ asset('images/logo-icon.webp') }}"
                data-dark="{{ asset('images/logo-icon-white.webp') }}"
                class="h-8 w-8">
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-6 text-sm font-medium">

                <a href="{{ route('home') }}"
                   class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                   Home
                </a>

                <a href="{{ route('about') }}"
                   class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                   About
                </a>

                <a href="{{ route('layoutskill') }}"
                   class="nav-item {{ request()->is('skill') ? 'active' : '' }}">
                   Skills
                </a>

                <a href="{{ route('certification') }}"
                   class="nav-item {{ request()->is('certification') ? 'active' : '' }}">
                   Certification
                </a>

                <a href="{{ route('portofolio') }}"
                   class="nav-item {{ request()->is('portofolio') ? 'active' : '' }}">
                   Portfolio
                </a>
            </nav>

            <!-- Dark Mode Toggle -->
            <button id="toggleDarkMode" 
                class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                <span id="themeIconWrapper">
                    <i data-feather="moon" class="w-5 h-5"></i>
                </span>
            </button>
        </div>
    </div>
</header>

<script src="{{ asset('js/darkmode.js') }}"></script>
<!-- ============================
     DESKTOP TOPBAR (SELALU MUNCUL)
============================= -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="relative container mx-auto px-6 md:px-12 lg:px-20">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo-icon.png') }}" alt="Logo" class="h-8 w-8">
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
                <a href="{{ route('home') }}"
                    class="{{ request()->is('/') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">
                    Home
                </a>

                <a href="{{ route('about') }}"
                    class="{{ request()->is('about') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">
                    About
                </a>

                <a href="{{ route('layoutskill') }}"
                    class="{{ request()->is('skill') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">
                    Skills
                </a>

                <a href="{{ route('certification') }}"
                    class="{{ request()->is('certification') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">
                    Certification
                </a>

                <a href="{{ route('portofolio') }}"
                    class="{{ request()->is('portofolio') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">
                    Portfolio
                </a>
            </nav>

        </div>
    </div>
</header>



<!-- ============================
     FLOATING BUTTON (MOBILE ONLY)
============================= -->
<button id="openMobileMenu"
    class="fixed bottom-5 right-5 z-50 bg-cyan-600 hover:bg-cyan-700 text-white p-4 rounded-full shadow-xl md:hidden">
    <i data-feather="menu"></i>
</button>



<!-- ============================
     FLOATING BOTTOM MENU (MOBILE)
============================= -->
<div id="mobileMenu"
    class="fixed bottom-0 left-0 w-full bg-white rounded-t-2xl shadow-2xl z-50 transform translate-y-full transition-transform duration-300 md:hidden">

    <div class="p-6">

        <div class="grid grid-cols-3 gap-6 text-center">

            <a href="{{ route('home') }}"
                class="flex flex-col items-center {{ request()->is('/') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="home" class="w-6 h-6 mb-1"></i>
                <span class="text-sm">Home</span>
            </a>

            <a href="{{ route('about') }}"
                class="flex flex-col items-center {{ request()->is('about') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="user" class="w-6 h-6 mb-1"></i>
                <span class="text-sm">About</span>
            </a>

            <a href="{{ route('layoutskill') }}"
                class="flex flex-col items-center {{ request()->is('skill') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="activity" class="w-6 h-6 mb-1"></i>
                <span class="text-sm">Skills</span>
            </a>

            <a href="{{ route('certification') }}"
                class="flex flex-col items-center {{ request()->is('certification') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="award" class="w-6 h-6 mb-1"></i>
                <span class="text-sm">Certification</span>
            </a>

            <a href="{{ route('portofolio') }}"
                class="flex flex-col items-center {{ request()->is('portofolio') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="image" class="w-6 h-6 mb-1"></i>
                <span class="text-sm">Portfolio</span>
            </a>

        </div>

        <!-- Close Button -->
        <div class="text-right mt-6">
            <button id="closeMobileMenu" class="text-cyan-500 hover:text-red-500">
                <i data-feather="x" class="w-6 h-6"></i>
            </button>
        </div>

    </div>
</div>



<!-- ============================
     TOGGLE SCRIPT
============================= -->
<script>
    const openBtn = document.getElementById('openMobileMenu');
    const closeBtn = document.getElementById('closeMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');

    openBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-y-full');
    });

    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.add('translate-y-full');
    });

    feather.replace();
</script>

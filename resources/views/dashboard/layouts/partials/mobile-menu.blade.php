<button id="openMobileMenu"
    class="fixed bottom-5 right-5 z-50 bg-cyan-600 hover:bg-cyan-700 text-white p-4 rounded-full shadow-xl md:hidden">
    <i data-feather="menu"></i>
</button>

<div id="mobileMenu"
    class="fixed bottom-0 left-0 w-full bg-white rounded-t-2xl shadow-2xl z-50 
           transform translate-y-full transition-transform duration-300 md:hidden">

    <div class="p-6">
        <div class="grid grid-cols-3 gap-6 text-center">
            <a href="{{ route('home') }}" 
            class="menu-link flex flex-col items-center {{ request()->is('/') ? 'active-mobile' : '' }}">
                <i data-feather="home"></i>
                <span class="text-sm">Home</span>
            </a>

            <a href="{{ route('about') }}" 
            class="menu-link flex flex-col items-center {{ request()->is('about') ? 'active-mobile' : '' }}">
                <i data-feather="user"></i>
                <span class="text-sm">About</span>
            </a>

            <a href="{{ route('layoutskill') }}" 
            class="menu-link flex flex-col items-center {{ request()->is('skill') ? 'active-mobile' : '' }}">
                <i data-feather="activity"></i>
                <span class="text-sm">Skills</span>
            </a>

            <a href="{{ route('certification') }}" 
            class="menu-link flex flex-col items-center {{ request()->is('certification') ? 'active-mobile' : '' }}">
                <i data-feather="award"></i>
                <span class="text-sm">Certification</span>
            </a>

            <a href="{{ route('portofolio') }}" 
            class="menu-link flex flex-col items-center {{ request()->is('portofolio') ? 'active-mobile' : '' }}">
                <i data-feather="image"></i>
                <span class="text-sm">Portfolio</span>
            </a>
        </div>
        <div class="text-right mt-6">
            <button id="closeMobileMenu" class="text-cyan-500 hover:text-red-500">
                <i data-feather="x"></i>
            </button>
        </div>
    </div>
</div>

<script src="{{ asset('js/mobile-menu.js') }}"></script>

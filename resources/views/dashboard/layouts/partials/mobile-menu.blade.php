<button id="openMobileMenu"
    class="fixed bottom-5 right-5 z-50 bg-cyan-600 hover:bg-cyan-700 text-white p-4 rounded-full shadow-xl md:hidden">
    <i data-feather="menu"></i>
</button>

<div id="mobileMenu"
    class="fixed bottom-0 left-0 w-full bg-white rounded-t-2xl shadow-2xl z-50 
           transform translate-y-full transition-transform duration-300 md:hidden">

    <div class="p-6">
        <div class="grid grid-cols-3 gap-6 text-center">

            <a href="{{ route('home') }}" class="flex flex-col items-center {{ request()->is('/') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="home"></i>
                <span class="text-sm">Home</span>
            </a>

            <a href="{{ route('about') }}" class="flex flex-col items-center {{ request()->is('about') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="user"></i>
                <span class="text-sm">About</span>
            </a>

            <a href="{{ route('layoutskill') }}" class="flex flex-col items-center {{ request()->is('skill') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="activity"></i>
                <span class="text-sm">Skills</span>
            </a>

            <a href="{{ route('certification') }}" class="flex flex-col items-center {{ request()->is('certification') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
                <i data-feather="award"></i>
                <span class="text-sm">Certification</span>
            </a>

            <a href="{{ route('portofolio') }}" class="flex flex-col items-center {{ request()->is('portofolio') ? 'text-cyan-600 font-semibold' : 'text-gray-700' }}">
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

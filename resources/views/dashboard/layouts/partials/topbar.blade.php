<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="flex items-center justify-between h-16">

            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logo-icon.png') }}" class="h-8 w-8">
            </a>

            <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
                <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">About</a>
                <a href="{{ route('layoutskill') }}" class="{{ request()->is('skill') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">Skills</a>
                <a href="{{ route('certification') }}" class="{{ request()->is('certification') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">Certification</a>
                <a href="{{ route('portofolio') }}" class="{{ request()->is('portofolio') ? 'text-cyan-500 font-semibold' : 'hover:text-cyan-500' }}">Portfolio</a>
            </nav>

        </div>
    </div>
</header>
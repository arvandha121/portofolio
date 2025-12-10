@extends('errors.app')

@section('title', '404 Not Found')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center 
            bg-gray-100 dark:bg-slate-900 text-gray-800 dark:text-gray-200
            px-6 relative">

    {{-- Decorative Blur Circles --}}
    <div class="absolute top-16 right-16 w-48 h-48 rounded-full 
                bg-indigo-400/20 dark:bg-indigo-500/10 blur-3xl"></div>

    <div class="absolute bottom-20 left-16 w-64 h-64 rounded-full 
                bg-blue-400/20 dark:bg-blue-500/10 blur-3xl"></div>

    {{-- Main Content --}}
    <div class="text-center relative z-10">
        <h1 class="text-9xl font-extrabold animate-pulse 
                   bg-gradient-to-r from-indigo-500 to-blue-600
                   bg-clip-text text-transparent">
            404
        </h1>

        <p class="mt-4 text-xl text-gray-700 dark:text-gray-300">
            Oops! Halaman yang kamu cari tidak ditemukan.
        </p>

        <p class="mt-2 text-gray-500 dark:text-gray-400">
            Mungkin URL salah atau halaman sudah dipindahkan.
        </p>

        <a href="{{ url('/') }}"
           class="mt-8 inline-block px-6 py-3 rounded-xl text-white font-semibold 
                  bg-indigo-600 hover:bg-indigo-700 transition-all duration-200 
                  shadow-none">

            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection

@extends('errors.app')

@section('title', 'Server Error')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center 
            bg-red-50 dark:bg-slate-900 text-red-800 dark:text-red-300 px-6">

    <h1 class="text-8xl font-extrabold">500</h1>

    <p class="mt-4 text-xl">
        Terjadi kesalahan pada server.
    </p>

    <p class="mt-2 text-red-600 dark:text-red-400">
        Coba lagi beberapa saat lagi.
    </p>

    <a href="{{ url('/') }}"
       class="mt-8 px-6 py-3 rounded-xl text-white font-semibold 
              bg-red-600 hover:bg-red-700 transition shadow-none">
        Kembali ke Beranda
    </a>
</div>
@endsection

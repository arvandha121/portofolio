@extends('errors.app')

@section('title', 'Access Denied')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center 
            bg-yellow-50 dark:bg-slate-900 text-yellow-700 dark:text-yellow-300 px-6">

    <h1 class="text-8xl font-extrabold">403</h1>

    <p class="mt-4 text-xl">
        Kamu tidak memiliki izin untuk mengakses halaman ini.
    </p>

    <a href="{{ url('/') }}"
       class="mt-8 px-6 py-3 rounded-xl text-white font-semibold 
              bg-yellow-600 hover:bg-yellow-700 transition shadow-none">
        Kembali ke Beranda
    </a>
</div>
@endsection

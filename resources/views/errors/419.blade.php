@extends('errors.app')

@section('title', 'Page Expired')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center 
            bg-orange-50 dark:bg-slate-900 text-orange-700 dark:text-orange-300 px-6">

    <h1 class="text-8xl font-extrabold">419</h1>

    <p class="mt-4 text-xl">
        Sesi telah berakhir atau token tidak valid.
    </p>

    <a href="{{ url()->previous() }}"
       class="mt-8 px-6 py-3 rounded-xl text-white font-semibold 
              bg-orange-600 hover:bg-orange-700 transition shadow-none">
        Kembali
    </a>
</div>
@endsection

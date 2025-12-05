@extends('dashboard.layouts.index')

@section('content')
    <section class="hero bg-gray-50">
        <div class="hero-container">
            {{-- Image - mobile di atas, desktop di kanan --}}
            <div class="hero-img">
                <img src="{{ asset($home->gambar) }}" alt="{{ $home->nama }}"
                    class="cursor-pointer transition duration-300 ease-in-out hover:scale-105"
                    onclick="openImageModal('{{ asset($home->gambar) }}')">
            </div>

            {{-- Text --}}
            <div class="hero-text">
                <h2>Hi, I'm</h2>
                <h1>{{ $home->nama }}</h1>
                <h3 class="whitespace-pre-line text-gray-700 font-medium">
                    {{ str_replace('\n', "\n", $home->latarbelakang) }}
                </h3>
                <p>
                    {{ $home->teks }}
                </p>
                <a href="{{ route('contact.create') }}" class="btn-contact">
                    Contact Me <i data-feather="arrow-right"></i>
                </a>
            </div>
        </div>

        {{-- Modal --}}
        @include('dashboard.layouts.partials.modal-home-image')
        
    </section>

    <script src="{{ asset('js/home-modal-image.js') }}"></script>
@endsection

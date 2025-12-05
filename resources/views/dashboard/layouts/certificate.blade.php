@extends('dashboard.layouts.index')

@section('content')
    <section class="flex justify-center pt-8 pb-16 px-4" x-data="{ selectedCert: null }">
        <div class="w-full max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-6 mt-10">My Certifications</h2>
            <p class="text-center text-gray-600 text-base md:text-lg mb-8 leading-relaxed">
                Below are my certifications with related details.
            </p>

            <div class="space-y-6">
                @forelse ($certificates as $cert)
                    <div class="bg-white rounded-2xl shadow-md p-6 cursor-pointer hover:shadow-lg transition h-[150px]"
                        @click="selectedCert = {{ $cert->toJson() }}">
                        <h3 class="text-xl font-semibold text-cyan-700 mb-2">{{ $cert->title }}</h3>
                        <p class="text-sm text-gray-500">Click to see details</p>
                    </div>
                @empty
                    <div class="text-center text-gray-500 text-lg">
                        No certifications available at the moment.
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Modal Popup --}}
        @include('dashboard.layouts.partials.modal-certificate')
    </section>
@endsection

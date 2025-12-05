@extends('dashboard.admin.index')

@section('page-title', 'Tambah Profil')

@section('content')

    <style>
        .modal-bg {
            background: rgba(0, 0, 0, 0.65);
        }
    </style>

    <div class="max-w-5xl mx-auto px-4 py-8">

        {{-- JUDUL --}}
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 tracking-tight">
                Tambah Profil Baru
            </h1>
            <p class="text-gray-500 mt-1">Isi informasi profil dan unggah foto baru.</p>
        </div>

        {{-- FORM WRAPPER --}}
        <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">

            <form id="formCreateProfil"
                action="{{ route('homes.store') }}"
                method="POST" enctype="multipart/form-data"
                class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">

                @csrf

                {{-- NAMA --}}
                <div class="col-span-2">
                    <label class="block text-gray-700 font-semibold mb-1">Nama</label>
                    <input type="text" name="nama" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-400 transition">
                </div>

                {{-- TEKS --}}
                <div class="col-span-2">
                    <label class="block text-gray-700 font-semibold mb-1">Teks</label>
                    <textarea name="teks" rows="3" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-400 resize-none transition">{{ old('teks') }}</textarea>
                </div>

                {{-- FOTO PROFIL --}}
                <div class="col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">Foto Profil</label>

                    <div class="flex flex-col gap-6">

                        {{-- INPUT FILE --}}
                        <div>
                            <input type="file" id="gambar" name="gambar" accept="image/*"
                                class="w-full border border-gray-300 rounded-xl p-2 shadow-sm focus:ring-2 focus:ring-indigo-400 transition">
                            <p class="text-sm text-gray-500 mt-1"></p>
                            <span id="previewPlaceholder" class="text-gray-400 text-sm">Unggah foto profil baru</span>
                        </div>

                        {{-- PREVIEW FOTO BARU --}}
                        <div class="flex flex-col items-center">
                            <div class="w-48 h-48 rounded-xl border bg-gray-50 overflow-hidden shadow-inner flex items-center justify-center">
                                <img id="preview" class="hidden w-full h-full object-cover">
                            </div>
                            <span id="previewPlaceholder" class="text-gray-400 text-sm">Preview Foto Baru</span>
                            <p class="text-sm text-gray-500 mt-2"></p>
                        </div>

                    </div>
                </div>

                {{-- LATAR BELAKANG --}}
                <div class="col-span-2">
                    <label class="block text-gray-700 font-semibold mb-1">Latar Belakang</label>
                    <textarea name="latarbelakang" rows="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-indigo-400 transition">{{ old('latarbelakang') }}</textarea>
                    <p class="text-sm text-gray-500 mt-1">Gunakan <code>\n</code> untuk membuat baris baru.</p>
                </div>

                {{-- BUTTON --}}
                <div class="col-span-2 flex justify-between items-center mt-4 pt-4 border-t">
                    <a href="{{ route('homes.index') }}"
                        class="text-gray-600 hover:text-gray-800 transition font-medium">
                        Batal
                    </a>

                    <button type="submit"
                        class="px-7 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl shadow-md transition">
                        Simpan Profil
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- MODAL CROPPER (JIKA DIPAKAI) --}}
    @include('dashboard.admin.partials.cropper-modal')

    <script src="{{ asset('js/cropper-image.js') }}"></script>

@endsection

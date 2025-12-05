<div id="cropModal" class="fixed inset-0 hidden modal-bg flex items-center justify-center z-50">
    <div class="bg-white w-full max-w-2xl rounded-lg p-4 shadow-xl">
        <h2 class="text-lg font-semibold mb-3">Atur Pemotongan Gambar</h2>
        {{-- PILIH ASPECT RATIO --}}
        <div class="mb-3">
            <label class="font-semibold text-gray-700">Aspect Ratio</label>
            <select id="ratioSelect" class="w-full border rounded-lg p-2 mt-1">
                <option value="1">Square (1:1)</option>
                <option value="1.777">Rectangle (16:9)</option>
                <option value="0.8">Portrait (4:5)</option>
                <option value="NaN">Free (Bebas)</option>
            </select>
        </div>
        {{-- IMAGE AREA --}}
        <div class="w-full h-96 bg-gray-100 overflow-hidden border rounded-lg">
            <img id="cropImage" class="w-full">
        </div>
        {{-- BUTTON --}}
        <div class="flex justify-end gap-3 mt-4">
            <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded-lg">Batal</button>
            <button id="applyCrop" class="px-4 py-2 bg-indigo-600 text-white rounded-lg">Crop</button>
        </div>
    </div>
</div>
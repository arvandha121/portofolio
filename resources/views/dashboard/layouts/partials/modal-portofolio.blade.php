<div class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center" x-show="selectedProject" x-transition @click.self="selectedProject = null">
    <template x-if="selectedProject">
        <div class="bg-white rounded-2xl shadow-xl w-full max-w-2xl p-6 overflow-auto max-h-[90vh]" x-transition>
            <div class="flex justify-between items-start mb-4">
                <h3 class="porto text-2xl font-bold text-gray-800" x-text="selectedProject.title"></h3>
                <button class="text-gray-500 hover:text-red-600" @click="selectedProject = null">✖</button>
            </div>
            <img :src="'/storage/' + selectedProject.image" alt="" class="w-full rounded-lg mb-4">
            <p class="porto text-sm text-indigo-600 font-medium" x-text="selectedProject.tipe"></p>
            <p class="porto text-gray-700 mt-3 text-sm" x-text="selectedProject.description"></p>
            <template x-if="selectedProject.link">
                <a :href="selectedProject.link" target="_blank" rel="noopener noreferrer" class="inline-block mt-4 text-blue-600 hover:underline text-sm font-medium">
                    Visit Project →
                </a>
            </template>
        </div>
    </template>
</div>
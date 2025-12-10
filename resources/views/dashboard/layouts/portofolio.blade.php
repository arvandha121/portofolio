@extends('dashboard.layouts.index')

@section('content')
<link rel="stylesheet" href="/css/portfolio.css">

<section 
    class="portfolio-section flex justify-center px-4"
    x-data="{
        selectedProject: null,
        selectedType: 'all',
        projects: {{ $projects->toJson() }},
        get filteredProjects() {
            return this.selectedType === 'all'
                ? this.projects
                : this.projects.filter(p => p.tipe === this.selectedType)
        },
        uniqueTypes() {
            const t = this.projects.map(p => p.tipe);
            return ['all', ...new Set(t)];
        }
    }"
>
    <div class="w-full max-w-7xl mx-auto">

        {{-- Title --}}
        <h2 class="portfolio-title text-3xl md:text-4xl font-bold text-center mb-4 mt-10">
            My Portfolios
        </h2>
        <p class="portfolio-subtitle text-center text-base md:text-lg mb-8 leading-relaxed">
            Below are some of my personal or professional portfolio projects.
        </p>

        {{-- Filter --}}
        <div class="portfolio-filter flex flex-wrap justify-center gap-3 mb-10 px-2">
            <template x-for="type in uniqueTypes()" :key="type">
                <button
                    class="px-4 py-2 rounded-full text-sm font-medium transition duration-200 whitespace-nowrap"
                    :class="selectedType === type ? 'active' : ''"
                    x-text="type === 'all' ? 'Semua' : type"
                    @click="selectedType = type"
                ></button>
            </template>
        </div>

        {{-- Empty State --}}
        <template x-if="filteredProjects.length === 0">
            <div class="text-center text-gray-500 text-lg">
                No portfolio projects available.
            </div>
        </template>

        {{-- Portfolio Cards --}}
        <div class="flex justify-center">
            <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 w-full px-2 sm:px-0">

                <template x-for="project in filteredProjects" :key="project.id">
                    <div class="portfolio-card rounded-xl shadow-md p-4 cursor-pointer"
                        @click="selectedProject = project">

                        <div class="aspect-[3/2] overflow-hidden rounded-lg mb-3">
                            <img :src="'/storage/' + project.image" alt=""
                                class="w-full h-full object-cover">
                        </div>

                        <div class="space-y-2">
                            <h3 class="porto text-lg font-semibold" x-text="project.title"></h3>
                            <p class="porto-tipe text-sm text-indigo-600 font-medium" x-text="project.tipe"></p>
                            <p class="porto text-sm line-clamp-3" x-text="project.description"></p>
                        </div>

                    </div>
                </template>

            </div>
        </div>

    </div>

    {{-- Modal --}}
    @include('dashboard.layouts.partials.modal-portofolio')
</section>
@endsection

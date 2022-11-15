<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <button class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    {{$sous_categories[0]->nom}}
                </div>
            </button>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <button class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    Nos Plats / Boissons
                </div>
            </button>
        </div>
    </div>
</x-app-layout>

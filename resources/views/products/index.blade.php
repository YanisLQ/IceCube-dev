<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Espace administrateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <button class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    Nos catégories
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

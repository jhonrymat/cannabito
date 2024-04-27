<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>

    <div class="py-12" style="height: 100vh;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="height: 100%;">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="height: 100%;">
                <iframe src="https://cannabito-ia-front-production.up.railway.app/" style="width: 100%; height: 100%; border: 0;"></iframe>
            </div>
        </div>
    </div>
</x-app-layout>

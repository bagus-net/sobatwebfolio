<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-28 ">
                
                    <a href="{{route('admin.projects.create')}}" class="w-fit py-4 px-10 text-indigo bg-white rounded-full font-bold">
                    Add New Project
                    </a>
            </div>
        </div>
    </div>
</x-app-layout>

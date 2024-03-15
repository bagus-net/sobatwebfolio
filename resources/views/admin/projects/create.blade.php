<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10">

                {{-- alert --}}
                @if ($errors->any())
                    <div class="text-red-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="py-5 font-bold">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route('admin.projects.store') }}"enctype="multipart/form-data" method="POST">
                    @csrf

                    
                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-white font-bold">
                            Add New Project
                        </h1>

                        <div class="flex flex-col gap-y-2">
                            <label for="name" class="text-gray-300">Name</label>
                            <input type="text" id="name" name="name"
                                class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300">
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-5">
                        <div class="flex flex-col gap-y-2">
                            <label for="category" class="text-gray-300">Category</label>
                            <select id="category" name="category"
                                class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300">
                                <option value="">Choose category below</option>
                                <option value="Web Development">Web Development</option>
                                <option value="App Development">App Development</option>
                                <option value="Graphic Design">Graphic Design</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-5">
                        <div class="flex flex-col gap-y-2">
                            <label for="cover" class="text-gray-300">Cover Image</label>
                            <input type="file" id="cover" cover="cover"
                                class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300">
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-5">
                        <div class="flex flex-col gap-y-2">
                            <label for="about" class="text-gray-300">About</label>
                            <textarea name="about" id="about" cols="30"
                                rows="10"class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300"></textarea>
                        </div>
                    </div>
                    <br>
                    <button type="submit"class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">Upload
                        Project</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Tools') }}
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


                <form action="{{ route('admin.tools.update',$tool)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-white font-bold">Add New tool</h1>

                        <div class="flex flex-col gap-y-2">
                            <label for="name" class="text-gray-300">Name</label>
                            <input type="text" id="name" name="name" value="{{$tool->name}}"
                                class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300">
                        </div>

                       

                        <div class="flex flex-col gap-y-2">
                            <label for="logo" class="text-gray-300">Logo Image</label>
                            <img src="{{Storage::url($tool->logo)}}" alt="" class="object logo w-[120px] h-[90px] rounded-2xl">
                            <input type="file" id="logo" name="logo"
                                class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300">
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <label for="tagline" class="text-gray-300">Tagline</label>
                            <textarea name="tagline" id="tagline"  cols="30" rows="10"
                                class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300">{{$tool->tagline}}</textarea>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">
                        Update tool</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

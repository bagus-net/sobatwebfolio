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


                <form action="{{ route('admin.project_screenshot.store',$project) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                   

                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-white font-bold">Add Project Screenshot</h1>
                        <div class="item-project flex flex-row items-center gap-x-5"> 
                            <img src="{{Storage::url($project->cover)}}" alt="" class="object cover w-[120px] h-[90px] rounded-2xl">
                            <div class="flex flex-col gap-y-1">
                               <h3 class ="font-bold text-xl text-white">{{$project->name}}</h3>
                               <p class ="text-sm text slate-400 text-gray-500"> {{$project->category}}</p> </div>
                        </div>
                        

                        <div class="flex flex-col gap-y-2">
                            <label for="screenshot" class="text-gray-300">Screenshot</label>
                            <input type="file" id="screenshot" name="screenshot"
                                class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300">
                        </div>
                        {{-- <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">Add
                            Screenshot</button> --}}

                        

                       

                    
                    <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">Add Screenshots</button>
                </form>

                <hr class="my-10">
                <h3 class = "text-white font-bold" >
                    existing screenshots
                </h3>

                <div class="item-tool grid grid-cols-2 gap-x-5 items-center"></div>
                    @forelse ($project->screenshots as $screenshot)
                    {{-- melakukan foreach data di table project --}}
                    <div class="item-project flex flex-row items-center justify-between">
                        <div class="item-tool flex flex-row items-center gap-x-5"> 
                            <img src="{{Storage::url($screenshot->screenshot)}}" alt="" class="object-cover w-[120px] h-[90px] rounded-2xl">
                        </div>
                        
                        <div class="flex flex-row items-center justify-end">
                            <form action="{{route('admin.project_screenshots.destroy',$screenshot->id)}}" method="POST">
                                @csrf
                                @method ('DELETE')
                                <button type="submit" class="py-3 px-5 rounded-full bg-red-500 text-white">Delete</button>
                            </form>
                        </div>
                    </div>   
                    @empty
                    <p class="text-white">Belum ada Screenshot tersedia</p>
                    @endforelse
                </div>
        </div>
    </div>
</x-app-layout>

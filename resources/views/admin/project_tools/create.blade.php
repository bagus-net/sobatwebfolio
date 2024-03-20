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


                <form action="{{ route('admin.project.assign.tool.store',$project) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                   

                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-white font-bold">Assign Tool</h1>
                        <div class="item-project flex flex-row items-center gap-x-5"> 
                            <img src="{{Storage::url($project->cover)}}" alt="" class="object cover w-[120px] h-[90px] rounded-2xl">
                            <div class="flex flex-col gap-y-1">
                               <h3 class ="font-bold text-xl text-white">{{$project->name}}</h3>
                               <p class ="text-sm text slate-400 text-gray-500"> {{$project->category}}</p> </div>
                        </div>
                        

                        <div class="flex flex-col gap-y-2">
                            <label for="tool_id" class="text-gray-300">Tools</label>
                            <select id="tool_id" name="tool_id"
                                class="border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300">
                                <option value="">Choose tool below</option>
                                @forelse($tools as $tool)
                                
                                <option value="{{$tool->id}}">{{$tool->name}}</option>
                               @empty
                               <option value="">Choose tool below</option>
                               @endforelse
                            </select>
                        </div>

                        

                       

                    <br>
                    <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">Assign Tools</button>
                </form>

                <hr class="my-10">
                <h3 class = text-white >
                    existing tools
                </h3>

                                <div class="flex flex-col gap-y-5">
                                    @forelse ($project->tools as $tool)
                                        
            
                                    {{-- melakukan foreach data di table project --}}
                                    <div class="item-project flex flex-row  items-center justify-between">
            
                                   <div class="item-tool flex flex-row items-center gap-x-5"> 
                                    <img src="{{Storage::url($tool->logo)}}" alt="" class="object cover w-[120px] h-[90px] rounded-2xl">
                                    <div class="flex flex-col gap-y-1">
                                       <h3 class ="font-bold text-xl text-white">{{$tool->name}}</h3>
                                       <p class ="text-sm text slate-400 text-gray-500"> {{$tool->tagline}}</p> </div>
                                </div>
                                {{-- <div class="flex flex-row items-center gap-x-2"> 
                                    <a href="#" class="py-3 px-5 rounded-full bg-white text-indigo">Add Tools</a>
                                    <a href="#" class="py-3 px-5 rounded-full bg-white text-indigo">Add Screenshots</a>
                                </div> --}}
                                {{-- {{$tool->pivot->id}} --}}
                                    <div class="flex flex-row items-center gap-x-2">
                                    <form action="{{route('admin.project_tools.destroy',$tool->pivot->id)}}" method="POST">
                                        @csrf
                                        @method ('DELETE')
                                        <button type="submit" class="py-3 px-5 rounded-full bg-red-500 text-white">Delete</button>
                                    </form>
                                </div> </div>       
                        
                        @empty
                            <p class = text-white>
                                Belum ada tool tersedia
                            </p>
                            @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

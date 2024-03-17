<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Tools') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10 flex-col ">
                
                    <a href="{{route('admin.tools.create')}}" class="w-fit py-4 px-10 text-indigo bg-white rounded-full font-bold">
                    Add New Tool
                    </a>
                    <hr class="my-10">
                    <div class="flex flex-col gap-y-5">
                        @forelse ($tools as $tool)
                            

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
                        <div class="flex flex-row items-center gap-x-2">
                     
                        <a href="{{route('admin.tools.edit',$tool)}}" class="py-3 px-5 rounded-full bg-yellow-500 text-white">Edit</a>
                        <a href="#" class="py-3 px-5 rounded-full bg-red-500 text-white">Delete</a>
                    </div> </div>       
            
            @empty
                <p class = text-white>
                    Belum ada tool tersedia
                </p>
                @endforelse
            
        </div>
    </div>
</x-app-layout>

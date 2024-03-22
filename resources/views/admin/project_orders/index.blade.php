<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10 flex-col ">
                
                    {{-- <a href="{{route('admin.projects.create')}}" class="w-fit py-4 px-10 text-indigo bg-white rounded-full font-bold">
                    Add New Orders
                    </a> --}}
                    <hr class="my-10">
                    <div class="flex flex-col gap-y-5">
                        @forelse ($orders as $order)
                            

                        {{-- melakukan foreach data di table project --}}
                        <div class="item-project flex flex-row  items-center justify-between">

                       <div class="item-project flex flex-row items-center gap-x-5"> 
                        
                        <div class="flex flex-col gap-y-1">
                           <h3 class ="font-bold text-xl text-white">{{$order->name}}</h3>
                           <p class ="text-sm text slate-400 text-gray-500"> {{$order->category}}</p> </div>
                    </div>
                    <h3 class ="font-bold text-xl text-white">{{$order->budget}}</h3>
                    
                        <div class="flex flex-row items-center gap-x-2">
                     
                        <a href="{{route('admin.project_orders.show',$order)}}" class="py-3 px-5 rounded-full bg-yellow-500 text-white">View Details</a>
                       
                    </div> </div>       
           
            @empty
                <p>
                    Belum ada order tersedia
                </p>
                @endforelse
            
        </div>
    </div>
</x-app-layout>

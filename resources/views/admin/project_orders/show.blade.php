<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Orders') }}
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

                <div class="flex flex-col gap-y-5">
                    <h1 class="text-3xl text-white font-bold">Order Details</h1>
                    <div class="item-project flex flex-row items-center gap-x-5"> 
                        <div class="flex flex-col gap-y-1">
                           <h3 class ="font-bold text-xl text-white">{{$projectOrder->name}}</h3>
                           <p class ="text-sm text slate-400 text-gray-500"> {{$projectOrder->email}}</p> </div>
                    </div>
                

                <hr class="my-10">
                <h3 class = "text-bold text-white">
                    Brief
                </h3>
                <p class ="text-sm  text-gray-500">
                    {{$projectOrder->category}}
                </p>
                <p class ="text-bold text slate-400 text-gray-500">
                    Rp.{{$projectOrder->budget}}
                </p>
                <p class ="text-sm text slate-400 text-gray-500">
                    {{$projectOrder->brief}}
                </p>
                

                                
            </div>
        </div>
    </div>
</x-app-layout>

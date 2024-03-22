@extends('front/layouts/app')
@section('title', 'Sobatwebfolio')
@section('content')
<section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative">
    <x-nav/>
    <div class="hero container max-w-[1130px] mx-auto flex justify-between items-center relative">
        <div class="flex flex-col gap-[50px] h-fit w-fit text-white z-10">
            <p class="font-semibold text-2xl">I’m Shayna 👋</p>
            <h1 class="font-extrabold text-[80px] leading-[90px]">My Services</h1>
            <button class="font-bold text-[26px] leading-[39px] rounded-[30px] p-[30px_40px] bg-portto-purple w-fit transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">Explore Now</button>
        </div>
        <div class="flex max-w-[471px] max-h-[567px] z-10">
            <img src="{{asset('images/hero-image.png')}}" class="w-full h-full object-contain" alt="hero image">
        </div>
        <img src="{{asset('images/Ellipse.svg')}}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2" alt="background icon">
    </div>
    <div class="company-logos w-full overflow-hidden pb-[190px]">
        <div class="group/slider flex flex-nowrap w-max items-center">
            <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap">
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
            </div>
            <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate  flex gap-[70px] pl-[70px] items-center flex-nowrap ">
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum1.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum2.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum3.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
                <div class="flex w-fit h-[40px] shrink-0">
                    <img src="{{asset('images/logos/logoipsum4.png')}}" class="w-full h-full object-contain" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] flex justify-between items-center px-[100px] rounded-[30px] w-full h-[180px] absolute transform -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2">
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">$230M</p>
            <p class="font-semibold text-lg">Valuation</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">31,934</p>
            <p class="font-semibold text-lg">Projects</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">245</p>
            <p class="font-semibold text-lg">Startups IPO</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">9/10</p>
            <p class="font-semibold text-lg">Successful</p>
        </div>
        <div class="text-center w-fit h-fit">
            <p class="font-extrabold text-[40px] leading-[60px]">562</p>
            <p class="font-semibold text-lg">Companies</p>
        </div>
    </div>
</section>

<section id="Services" class="container max-w-[1130px] mx-auto pt-[190px] pb-[100px]">
    <div class="flex flex-col gap-[50px]">
        <div class="flex justify-between items-center">
            <h2 class="font-extrabold text-[50px] leading-[70px]">Actually, I Do Design <br>& Code for Living</h2>
            <a href="" class="font-bold text-lg bg-portto-black rounded-full w-fit h-fit p-[14px_30px] text-white transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">All Services</a>
        </div>
        <div class="grid grid-cols-2 gap-[30px]">
            <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-purple">
                    <img src="{{asset('images/icons/crown.svg')}}" class="w-10 h-10 object-contain" alt="icon">
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-extrabold text-[32px] leading-[48px]">High-Quality Mobile App UI/UX Design</p>
                    <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using your product.</p>
                </div>
                <div class="w-full h-[350px]">
                    <img src="{{asset('images/services1.png')}}" class="w-full object-contain" alt="image">
                </div>
            </div>
            <div class="p-[50px] pb-0 rounded-[30px] flex flex-col gap-[50px] bg-[#F4F5F8]">
                <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-green">
                    <img src="{{asset('images/icons/code.svg')}}" class="w-10 h-10 object-contain" alt="icon">
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-extrabold text-[32px] leading-[48px]">AI Business Dashboard Finance Company</p>
                    <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using product.</p>
                </div>
                <div class="w-full h-[350px]">
                    <img src="{{asset('images/services2.png')}}" class="w-full object-contain" alt="image">
                </div>
            </div>
            <div class="col-span-2 p-[50px] pb-0 rounded-[30px] flex gap-[50px] bg-[#F4F5F8]">
                <div class="flex flex-col gap-[50px]">
                    <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-red">
                        <img src="{{asset('images/icons/3dcube.svg')}}" class="w-10 h-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="font-extrabold text-[32px] leading-[48px]">Robust Plugins Connected Machine Learning</p>
                        <p class="text-lg leading-[34px]">Delivering great experience to users so that they are comfortable while using your product to grow.</p>
                    </div>
                </div>
                <div class="w-[450px] h-[350px] flex shrink-0">
                    <img src="{{asset('images/services3.png')}}" class="w-full object-contain" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>




{{-- ambil komponen faq di components--}}
<x-faq/>
{{-- ambil komponen footer di components --}}
<x-footer/>




@push('after-script')
<script src="{{asset('js/main.js')}}"></script>
@endpush
@endsection
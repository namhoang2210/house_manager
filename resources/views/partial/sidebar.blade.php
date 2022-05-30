<?php
    use Illuminate\Support\Facades\Route;
    $path=Route::currentRouteName();
?>
<div class="bg-white lg:bg-gray-50 pb-2 fixed bottom-0 lg:relative lg:h-screen  w-full lg:w-72 content-center ">
    <div class="lg:mt-16 lg:w-[232px] lg:pl-3  lg:fixed lg:left-0 lg:top-0 text-sm content-center lg:content-start text-left justify-between">
        <div class="list-reset flex justify-between flex-row lg:flex-col pt-3 lg:pt-4 lg:py-3 px-2 lg:px-2 text-center lg:text-left text-gray-600">
            <a class="relative lg:px-4 lg:py-3 lg:hover:bg-pink-200 rounded-full @if ($path == "home") lg:bg-pink-200  @endif" href="/home" >
                <div class="lg:inline-flex items-center w-full font-semibold transition-colors duration-150 ">
                    
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <span class="lg:ml-3">Trang chủ</span>
                </div>
            </a>
            <a class="relative lg:px-4 lg:py-3 lg:mt-1 lg:hover:bg-pink-200 rounded-full @if ($path == "notice") lg:bg-pink-200  @endif" href="{{ route('notice') }}">
                <div class="lg:inline-flex items-center w-full font-semibold transition-colors duration-150 "  >
                    
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                          </svg>
                    </div>
                    <span class="lg:ml-3">Thông báo</span>
                </div>
            </a>
            <a class="relative lg:px-4 lg:py-3 lg:mt-1 lg:hover:bg-pink-200 rounded-full @if ($path == "houseMoney") lg:bg-pink-200  @endif" href="{{route('houseMoney')}}" >
                <div class="lg:inline-flex items-center w-full font-semibold transition-colors duration-150 ">
                    
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                    <span class="lg:ml-3">Tiền nhà</span>
                </div>
            </a>
            <a class="relative lg:px-4 lg:py-3 lg:mt-1 lg:hover:bg-pink-200 rounded-full @if ($path == "aaa") lg:bg-pink-200  @endif" href="/home" >
                <div class="lg:inline-flex items-center w-full font-semibold transition-colors duration-150 ">
                    
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                          </svg>
                    </div>
                    <span class="lg:ml-3">Lịch nhậu</span>
                </div>
            </a>
            <a class="relative lg:px-4 lg:py-3 lg:mt-1 lg:hover:bg-pink-200 rounded-full @if ($path == "user") lg:bg-pink-200  @endif" href="/home" >
                <div class="lg:inline-flex items-center w-full font-semibold transition-colors duration-150 ">
                    
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <span class="hidden lg:ml-3 lg:block">Thông tin cá nhân</span>
                    <span class=" lg:ml-3 lg:hidden">Profile</span>
                </div>
            </a>
           
        </div>                
    </div>
</div>

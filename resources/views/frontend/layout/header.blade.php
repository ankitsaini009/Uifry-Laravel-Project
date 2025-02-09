@php
$settings;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIFRY</title>
    <link rel="stylesheet" href="{{asset('front_assets/public/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/public/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/src/input.css')}}">
    <link href="{{asset('front_assets/public/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="bg-[#FFFFFF]">
    <header class="sticky top-0 z-50 bg-[#FFFFFF] lg:pt-10 md:pt-6 pt-0">
        <div class="container">
            <div class="md:bg-[#E6F6FE] rounded-[10px] lg:px-10 md:px-6 px-0 py-5 mx-auto flex items-center justify-between">
                <div class="logo">

                    @if(empty($settings->site_logo))
                    <a href=""><img src="{{asset('front_assets/public/images/uifry-logo.svg')}}" alt="Logo" width="113" height="35"></a>
                    @else
                    <a href=""> <img src="{{ asset('images/' . $settings->site_logo) }}" alt="Logo" width="113" height="35"></a>
                    @endif </a>

                </div>
                <ul class="text-base text-[#011632] gap-10 lg:flex hidden pl-[72px]">
                    <li class="font-medium"><a href="index.html">Home</a></li>
                    <li class="font-medium"><a href="service.html">Services</a></li>
                    <li class="font-medium"><a href="blog.html">Blogs</a></li>
                    <li class="font-medium"><a href="about.html">About</a></li>
                    <li class="font-medium"><a href="{{ route('view.contact') }}">Contact</a></li>
                </ul>
                <div class="flex items-center lg:gap-5 gap-2.5">
                    <div class="relative z-10">
                        <button onclick="profileMenu()">
                            <img src="{{asset('front_assets/public/images/uifry-profile-icon.svg')}}" width="48" height="48" alt="uifry-profile-icon">
                        </button>
                        <ul id="profile-menu" class="min-w-52 absolute -z-10 top-0 right-0 transform hidden translate-y-20 bg-[#FFFFFF] shadow-xl rounded-lg">
                            <li class="flex gap-3 border-b border-b-[#e5e7eb] py-3 px-3">
                                <div>
                                    <img src="{{asset('front_assets/public/images/uifry-profile-icon.svg')}}" width="40" height="40" alt="uifry-profile-icon">
                                </div>
                                <div>
                                    <span class="text-base font-semibold block">John Doe</span>
                                    <small class="">Admin</small>
                                </div>
                            </li>
                            <li class="px-3 py-2.5 border-b border-b-[#e5e7eb]"><a href="#">My Profile</a></li>
                            <!-- <li class="px-3 py-2 border-b border-b-[#e5e7eb]"><a href="#">FAQ</a></li> -->
                            <li class="px-3 py-2.5 border-b border-b-[#e5e7eb]"><a href="#" class="text-red-600">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="bg-[#1376F8] hover:bg-[#011632] duration-700 font-semibold text-base rounded-[10px] md:flex hidden lg:py-3.5 py-2.5 lg:px-[30px] md:px-4 px-2.5 cursor-pointer">
                        <a href="contact.html" class="text-white">Book Now</a>
                    </div>
                    <div class="bg-[#1376F8] hover:bg-[#011632] duration-700 font-semibold text-base rounded-[10px] lg:hidden inline-block lg:py-3.5 py-2.5 lg:px-[30px] px-2.5 cursor-pointer">
                        <img class="lg:hidden inline" src="{{asset('front_assets/public/images/uifrymenu-bar.svg')}}" width="24" height="24" alt="uifrymenu-bar"
                            onclick="toggleMenu()">
                    </div>
                </div>
                <div id="mobile-menu"
                    class="absolute top-0 left-0 w-full h-screen bg-[#E6F6FE] transform -translate-x-full opacity-0 duration-500 z-50 overflow-y-auto">
                    <div class="flex justify-between border-b border-black py-3 px-3">
                        <a href="index.html"><img class="w-28" src="{{asset('front_assets/public/images/uifry-logo.svg')}}" width="60" height="60"
                                alt="maharwal-logo"></a>
                        <button onclick="toggleMenu()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 hover:text-yellow-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <ul class="flex flex-col font-medium text-black py-5 px-3 gap-3">
                        <li class="font-semibold hover:font-bold"><a href="index.html">Home</a></li>
                        <li class="font-semibold hover:font-bold"><a href="service.html">Services</a></li>
                        <li class="font-semibold hover:font-bold"><a href="blog.html">Blogs</a></li>
                        <li class="font-semibold hover:font-bold"><a href="about.html">About</a></li>
                        <li class="font-semibold hover:font-bold"><a href="contact.html">Contact</a></li>
                        <li class="font-semibold hover:font-bold md:hidden"><a href="#" class="bg-[#1376F8] text-white hover:bg-[#011632] duration-700 font-semibold text-base rounded-[10px] block text-center lg:py-3.5 py-2.5 lg:px-[30px] px-2.5 cursor-pointer">Book Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
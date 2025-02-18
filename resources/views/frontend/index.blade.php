@extends('frontend.layout.main')
@section('manage_front')
<section class="hero">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 lg:mt-[60px] mt-10">
            <div class="lg:col-span-7 md:col-span-6 col-span-12 lg:pt-10 lg:pb-10 pb-12">
                <h1 class="lg:text-[55px] text-[40px] z-10 font-semibold text-[#011632] tracking-[-2px] relative">{{$PagesContantManage['hero_section']['banner_title']}}
                    <img class="absolute -z-10 lg:bottom-[1%] bottom-[3%] left-0 lg:w-[90%] w-[49%]"
                        src="{{asset('front_assets/public/images/uifry-heading-border.webp')}}" alt="heading-border">
                </h1>
                <p class="text-lg lg:max-w-[531px] text-[#3C4959] lg:mt-5 mt-8">{{$PagesContantManage['hero_section']['description']}}</p>
                <div class="flex lg:gap-6 gap-2.5 lg:mt-10 mt-8">
                    @if(Auth::guard('front_user')->check())
                    <a href="{{route('view.bookapintment')}}"
                        class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white lg:font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 lg:px-[30px] px-4"><span
                            class="lg:inline hidden">Book an appointment</span> <span class="lg:hidden inline">Get
                            Started</span></a>
                    @else
                    <a href="{{ route('front.login') }}"
                        class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white lg:font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 lg:px-[30px] px-4"><span
                            class="lg:inline hidden">Book an appointment</span> <span class="lg:hidden inline">Get
                            Started</span></a>
                    @endif
                    <div class="flex lg:gap-4 gap-2 items-center">
                        <button class="border border-[#1376F8] p-1 rounded-[10px]"><span
                                class="bg-[#E6F6FE] text-white font-semibold text-base rounded-[10px] inline-block px-2.5 py-1.5"><i
                                    class="fa-solid fa-phone-volume text-[#1376F8] text-xl"></i></span></button>
                        <div class="text-sm">
                            <span class="text-[#1376F8] font-semibold block">Dental 24H Emergency</span>
                            <a class="font-medium text-[#011632]" href="tel:0900-78601">{{$PagesContantManage['hero_section']['emergency_number']}}</a>
                        </div>
                    </div>
                </div>
                <div class="md:max-w-[374px] shadow-2xl bg-[#FFFFFF] px-4 py-3 rounded-2xl mt-12">
                    <div class="flex justify-between items-start">
                        <div class="flex gap-2 items-center">
                            <img src="{{ asset('uploads/' . $PagesContantManage['hero_section']['linkedin']['profile_image']) }}" width="45" height="45" alt="Thomas daniel">
                            <div class="text-[#011632] leading-normal">
                                <span class="text-sm font-medium block">{{$PagesContantManage['hero_section']['linkedin']['name']}}</span>
                                <a class="font-medium text-xs" href="tel:0900-78601">Sr Dental</a>
                            </div>
                        </div>
                        <a target="_blank" href="{{$PagesContantManage['hero_section']['linkedin']['profile_link']}}"><i class="mt-0.5 fa-brands fa-linkedin text-[#1376F8] text-3xl"></i></a>
                    </div>
                    <p class="text-xs mt-3">{{$PagesContantManage['hero_section']['linkedin']['description']}}</p>
                </div>
            </div>
            <div class="lg:col-span-5 md:col-span-6 col-span-12 lg:-ms-20 flex items-end">
                <img class="w-full" src="{{ asset('uploads/' . $PagesContantManage['hero_section']['bannerImage']) }}" width="610" height="660" alt="uifry-hero-section">
            </div>
        </div>
    </div>
</section>
<section class="hero-slider lg:bg-transparent bg-[#E6F6FE]">
    <div class="container lg:pt-0 pt-12 lg:pb-0 pb-[30px]">
        <div class="swiper-container swiper4 bg-[#E6F6FE] gap-6 lg:rounded-xl xl:px-6 xl:py-10">
            <div class="swiper-wrapper flex transition-transform duration-300">

                @foreach($services as $service)
                <div class="swiper-slide">
                    <div class="text-center bg-white lg:px-8 px-5 py-5 rounded-xl h-full">
                        <div class="bg-[#25B4F8] rounded-full inline-block p-3">
                            <img src="{{ asset('images/' . $service->image) }}" width="48" height="48" alt="{{$service->name}}">
                        </div>
                        <h3 class="text-[#011632] text-2xl font-medium lg:my-4 my-3">{{$service->name}}</h3>
                        <p class="text-[#3C4959] text-lg">{{ strip_tags($service->description) }}</p>
                        <a href="{{ route('view.services.detail',$service->id) }}"
                            class="underline underline-offset-2 lg:mt-4 mt-3 text-[#011632] text-base font-medium inline-block">Learn More<i
                                class="fa-solid fa-angle-right ms-2 text-[9px] px-1.5 py-1 rounded-full border border-[#011632]"></i></a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <div class="lg:hidden flex justify-center lg:gap-5 gap-3 lg:mt-10 mt-5">
            <div class="swiper-button-prev4 group z-10 bg-white static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer">
                <img src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
            </div>
            <div class="swiper-button-next4 group z-10 bg-white static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer">
                <img class="rotate-180" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
            </div>
        </div>
    </div>
</section>
<section class="booking-details lg:py-[100px] py-[70px] bg-[#FFFFFF]">
    <div class="container">
        <div class="grid grid-cols-12 items-center md:gap-5 gap-y-12 lg:px-10 px-0">
            <div class="md:col-span-7 col-span-12">
                <h2 class="text-[#011632] lg:text-[42px] text-4xl font-semibold inline-block">{{$PagesContantManage['home_section']['email_subscribe']['title']}}</h2>
                <p class="text-[#3C4959] text-lg lg:mt-5 mt-3 lg:max-w-[530px]">{{$PagesContantManage['home_section']['email_subscribe']['description']}}</p>
                <form id="subscribe-form" class="lg:max-w-[530px]">
                    <div class="rounded-lg flex items-center lg:mt-8 mt-5 gap-2 w-full mx-auto bg-[#FFFFFF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <i class="fa-regular fa-user text-2xl text-[#AFAFAF]"></i>
                        <input type="text" class="text-base outline-none bg-[#FFFFFF] w-full" id="name" name="name" placeholder="Enter Full Name" required>
                    </div>
                    <div class="rounded-lg flex items-center lg:mt-8 mt-5 gap-2 w-full mx-auto bg-[#FFFFFF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <i class="fa-regular fa-envelope text-2xl text-[#AFAFAF]"></i>
                        <input type="email" class="text-base outline-none bg-[#FFFFFF] w-full" id="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="flex justify-between items-center mt-8">
                        <button type="submit" class="lg:py-4 py-3.5 px-8 text-white bg-[#1376F8] hover:bg-[#011632] duration-700 rounded-xl text-base">Submit</button>
                        <p id="subscribe-message" class="mt-3 text-[#008000] text-2xl" style="color: green;"></p>
                    </div>
                </form>


            </div>
            <div class="md:col-span-5 col-span-12 text-right">
                <img class="lg:w-auto w-full" src="{{ asset('uploads/' . $PagesContantManage['home_section']['email_subscribe']['image']) }}" width="413" height="362"
                    alt="Smiling patient at a dental clinic">
            </div>
        </div>
    </div>
</section>
<section class="book-appointment lg:bg-transparent bg-[#E6F6FE]">
    <div class="container mx-auto">
        <div class="bg-[#E6F6FE] lg:px-10 px-0 lg:py-12 py-[70px]">
            <div class="grid grid-cols-12 lg:gap-0 md:gap-5 gap-y-12 lg:items-start items-center">
                <div class="md:col-span-6 col-span-12 lg:order-1 order-2">
                    <img class="rounded-xl lg:w-auto w-full" src="{{ asset('uploads/' . $PagesContantManage['home_section']['dental_treatments_image']) }}" width="414" height="444"
                        alt="uifry-book-appointment">
                </div>
                <div class="md:col-span-6 col-span-12 lg:order-2 order-1">
                    <div class="md:col-span-6 col-span-12 lg:order-2 order-1">
                        {!! $PagesContantManage['home_section']['dental_treatments_content'] !!}
                    </div>

                    @if(Auth::guard('front_user')->check())

                    <a href="{{route('view.bookapintment')}}"
                        class="bg-[#1376F8] hover:bg-[#011632] duration-700 mt-7 text-white lg:font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 lg:px-[30px] px-5">Book
                        an appointment</a>
                    @else

                    <a href="{{ route('front.login') }}"
                        class="bg-[#1376F8] hover:bg-[#011632] duration-700 mt-7 text-white lg:font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 lg:px-[30px] px-5">Book
                        an appointment</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<section class="healthier lg:py-[100px] py-[70px]">
    <div class="container">
        <div class="grid grid-cols-12 md:gap-5 gap-y-12 items-center lg:px-10 px-0">
            <div class="md:col-span-6 col-span-12">
                {!! $PagesContantManage['home_section']['smile_content'] !!}

                @if(Auth::guard('front_user')->check())
                <a href="{{route('view.bookapintment')}}"
                    class="bg-[#1376F8] hover:bg-[#011632] duration-700 lg:mt-10 mt-7 text-white lg:font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 lg:px-[30px] px-5">Book
                    an appointment</a>
                @else
                <a href="{{ route('front.login') }}"
                    class="bg-[#1376F8] hover:bg-[#011632] duration-700 lg:mt-10 mt-7 text-white lg:font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 lg:px-[30px] px-5">Book
                    an appointment</a>
                @endif
            </div>
            <div class="md:col-span-6 col-span-12 text-right">
                <img class="lg:w-auto w-full" src="{{ asset('uploads/' . $PagesContantManage['home_section']['smile_image']) }}" width="410" height="326"
                    alt="uifry-healthier">

            </div>
        </div>
    </div>
</section>
<section class="patients lg:pb-[120px] pb-[70px]">
    <div class="container mx-auto lg:!max-w-[1064px] md:text-center">
        <h2
            class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block lg:max-w-[630px] md:max-w-[500px]  max-w-[361px] mx-auto">{{$PagesContantManage['home_section']['video']['title']}}
        </h2>
        <p class="text-[#3C4959] text-lg lg:mt-5 mt-3 lg:max-w-[460px] md:max-w-[80%] mx-auto">{{$PagesContantManage['home_section']['video']['description']}}</p>
        <div class="mt-12 relative patients-video">

            <iframe class="rounded-xl w-full iframe" width="560" height="350" src="{{ old('about_patients_overview_video', isset($PagesContantManage) ? $PagesContantManage['home_section']['video']['url'] : '') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
            <div class="fixed inset-0 transition-opacity w-full top-0 left-0 h-auto hidden z-[99999]" id="video-modal-popup">
                <div class="absolute top-0 left-0 inset-0 bg-[#E6F6FE] bg-opacity-90 overflow-y-scroll" style="scrollbar-width: none;">
                    <div class="container h-full w-full flex justify-center items-center">
                        <div class="lg:w-[80%] w-full h-[70%] relative">
                            <div class="absolute -top-3 -right-3" style=""><i class="fa-regular fa-circle-xmark text-[#1376F8] cursor-pointer text-4xl" onclick="toggleModal()"></i></div>
                            <iframe class="lg:rounded-xl rounded-lg w-full h-full" width="560" height="350" src="{{ old('about_patients_overview_video', isset($PagesContantManage) ? $PagesContantManage['home_section']['video']['url'] : '') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center">
            <button onclick="toggleModal()"
                class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white lg:font-semibold text-base rounded-[10px] inline-block mt-10 lg:py-3.5 py-3 lg:px-[30px] px-5">Watch
                Video</button>
        </div>
    </div>
</section>
<section class="meet-specialists bg-[#E6F6FE] lg:pt-[60px] pt-12 lg:pb-14 pb-12 overflow-hidden">
    <div class="container mx-auto">
        <div class="max-w-[440px] mx-auto md:text-center">
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
                Meet Our <span class="heading-border">Specialists</span>
            </h2>
            <p class="text-[#3C4959] text-lg mt-5">We use only the best quality materials on the market
                in order to provide the best products to our patients.</p>
        </div>
        <div class="container-child lg:-mr-32 lg:mt-20 mt-9">
            <div class="swiper-container swipe1">
                <div class="swiper-wrapper flex transition-transform duration-300 ">

                    @foreach($specialists as $specialist)
                    <div class="swiper-slide rounded-lg overflow-hidden relative">
                        <img class="w-full" src="{{ asset('images/' . $specialist->profile_photo) }}" width="305" height="340"
                            alt="uifry-specialists-carry">
                        <div class="absolute top-0 left-0 w-full h-full p-4 flex flex-col justify-between items-end">
                            <a href="{{$specialist->linkdin_profile_link}}"><i class="fa-brands fa-linkedin text-[#1376F8] text-4xl"></i></a>
                            <div class="text-[#FFFFFF] w-full pt-3 pb-5 px-6 rounded-lg"
                                style="background: linear-gradient(96.2deg, rgba(37, 180, 248, 0.3) 0%, rgba(37, 180, 248, 0) 100%);backdrop-filter: blur(200px);">
                                <h3 class="text-2xl font-medium">{{$specialist->name}}</h3>
                                <p class="text-base font-medium mt-1">{{$specialist->specialization}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex justify-center gap-2.5 mt-10">
        <div
            class="swiper-button-prev1 group z-10 bg-white hover:bg-[#1376F8] duration-700 static py-2.5 px-8 cursor-pointer">
            <img class="group-hover:hidden" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
            <img class="hidden group-hover:inline" src="{{asset('front_assets/public/images/uifry-light-arrow.webp')}}" width="42" height="13"
                alt="uifry-arrow">
        </div>
        <div
            class="swiper-button-next1 group z-10 bg-white hover:bg-[#1376F8] duration-700 static py-2.5 px-8 cursor-pointer">
            <img class="rotate-180 group-hover:hidden" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13"
                alt="uifry-arrow">
            <img class="rotate-180 hidden group-hover:inline" src="{{asset('front_assets/public/images/uifry-light-arrow.webp')}}" width="42" height="13"
                alt="uifry-arrow">
        </div>
    </div>
</section>
<section class="our-clients bg-[#FFFFFF] lg:pt-[100px] pt-[70px] pb-[100px] overflow-hidden">
    <div class="container mx-auto">
        <div class="max-w-[480px] mx-auto md:text-center">
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
                <span class="heading-border">Our Happy Clients</span>
            </h2>
            <p class="text-[#3C4959] text-lg mt-5"><span class="lg:inline hidden">We use only the best
                    quality materials on the market in order to provide the best products to our patients.</span><span
                    class="lg:hidden inline">We use only the best quality materials on the market in order to provide the best
                    products to our patients, So don’t worry about anything and book yourself.</span></p>
        </div>
        <div class="container-child lg:-me-28 lg:mt-20 mt-12">
            <div class="swiper-container swipe2 py-1 ps-1 pe-1">
                <div class="swiper-wrapper flex transition-transform duration-300">
                    @foreach($Testimonials as $Testimonial)
                    <div class="swiper-slide lg:p-7 p-5">
                        <div class="flex gap-2.5 items-center">
                            <img src="{{ asset('images/' . $Testimonial->image) }}" width="70" height="70" alt="Thomas daniel">
                            <div>
                                <h3 class="text-2xl text-[#011632] font-medium">{{$Testimonial->name}}</h3>
                                <div class="text-[#EC942C] mt-1">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-[#3C4959] text-base mt-4">{{$Testimonial->feedback}}</p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center gap-2.5 lg:mt-10 mt-5">
        <div
            class="swiper-button-prev2 group z-10 bg-[#011632] hover:bg-[#E6F6FE] duration-700 static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer">
            <img class="hidden group-hover:inline" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
            <img class="group-hover:hidden" src="{{asset('front_assets/public/images/uifry-light-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
        </div>
        <div
            class="swiper-button-next2 group z-10 bg-[#011632] hover:bg-[#E6F6FE] duration-700 static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer">
            <img class="rotate-180 hidden group-hover:inline" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13"
                alt="uifry-arrow">
            <img class="rotate-180 group-hover:hidden" src="{{asset('front_assets/public/images/uifry-light-arrow.webp')}}" width="42" height="13"
                alt="uifry-arrow">
        </div>
    </div>
</section>
<section class="news">
    <div class="container mx-auto">
        <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
            <span class="heading-border">News & Articles</span>
        </h2>
        <div class="flex justify-between lg:mt-5 mt-3">
            <p class="text-[#3C4959] text-lg lg:max-w-[40%]">We use only the best quality
                materials on the market in order to provide the best products to our patients.</p>
            <a href="{{route('view.blogs')}}"
                class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-[10px] lg:inline-block hidden lg:py-3.5 py-2.5 lg:px-10 md:px-5">View
                All</a>
        </div>
        <div class="swiper-container swipe3 lg:mt-[70px] mt-12">
            <div class="swiper-wrapper transition-transform duration-300 lg:grid lg:grid-cols-12 lg:gap-5">
                @foreach($Blogs as $Blog)
                <div class="swiper-slide rounded-xl bg-[#E6F6FE] px-5 pt-5 pb-2.5 lg:col-span-3 md:col-span-4">
                    <img class="rounded-xl w-full lg:h-48 object-cover article-image" src="{{asset('images/'.$Blog->image)}}" width="265" height="190" alt="uifry-article">
                    <span class="inline-block bg-[#011632] rounded-md text-base text-white px-3 py-1.5 mt-5">{{strip_tags($Blog->blog_cat)}}</span>
                    <a href="" class="text-lg font-medium text-[#011632] lg:mt-[14px] mt-3 block">{{$Blog->title}}</a>
                    <p class="text-lg text-[#3C4959] lg:mt-2.5 mt-1">{{strip_tags($Blog->description)}}</p>
                    <span class="text-base text-[#011632] block text-right lg:mt-0.5 mt-2.5">{{strip_tags($Blog->auther)}}</span>
                </div>
                @endforeach
            </div>
        </div>
        <div class="lg:hidden flex justify-center gap-2.5 lg:mt-10 mt-5">
            <div
                class="swiper-button-prev3 group z-10 bg-[#011632] hover:bg-[#E6F6FE] duration-700 static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer">
                <img class="hidden group-hover:inline" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
                <img class="group-hover:hidden" src="{{asset('front_assets/public/images/uifry-light-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
            </div>
            <div
                class="swiper-button-next3 group z-10 bg-[#011632] hover:bg-[#E6F6FE] duration-700 static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer">
                <img class="rotate-180 hidden group-hover:inline" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13"
                    alt="uifry-arrow">
                <img class="rotate-180 group-hover:hidden" src="{{asset('front_assets/public/images/uifry-light-arrow.webp')}}" width="42" height="13"
                    alt="uifry-arrow">
            </div>
        </div>
    </div>
</section>
<section class="ask-questions lg:pt-[120px] pt-[70px] lg:pb-[120px] pb-[70px]">
    <div class="container mx-auto">
        <div class="md:text-center">
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
                <span class="heading-border">Frequently Ask Question</span>
            </h2>
            <p class="text-[#3C4959] text-lg mt-5 font-normal lg:text-center max-w-[440px] mx-auto">We
                use only the best quality materials on the market in order to provide the best products to our patients. <span
                    class="lg:hidden inline">So don’t worry about anything and book yourself.</span></p>
        </div>
        <div class="lg:max-w-[625px] md:max-w-[500px] mx-auto lg:mt-14 mt-12">

            @foreach($Faqs as $index => $Faq)
            <div class="border-b border-b-[#CFCFCF] accord-item rounded-lg {{ $index == 0 ? 'active' : '' }}">
                <button
                    class="accordion-btn relative w-full flex items-center gap-2 justify-between lg:pl-10 pl-8 lg:pr-[20px] pr-4 py-[20px] text-left text-lg text-[#011632] font-medium {{ $index == 0 ? 'active' : '' }} before:content-[''] before:absolute md:before:top-[49%] before:top-[35%] md:before:left-[3%] before:left-[5%] before:bg-[#011632] before:rounded-full before:w-1.5 before:h-1.5"
                    onclick="toggleAccordion(this)">
                    <span>{{ $Faq->question }}</span>
                    <span class="toggle-icon border border-[#011632] h-6 w-6 rounded-full text-center shrink-0 leading-[21px] text-3xl">
                        {{ $index == 0 ? '−' : '+' }}
                    </span>
                </button>
                <div class="accordion-content lg:px-10 px-4 {{ $index == 0 ? 'active' : '' }}"
                    style="{{ $index == 0 ? 'max-height: none; padding-top: 8px; padding-bottom: 8px;' : 'max-height: 0px; padding-top: 0px; padding-bottom: 0px;' }}">
                    <p class="text-lg">{{ strip_tags($Faq->answer) }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<section class="dental-rules lg:bg-transparent bg-[#011632]">
    <div class="container mx-auto lg:pb-[100px]">
        <div class="grid grid-cols-12 lg:items-center max-w-[1064px] mx-auto bg-[#011632] rounded-xl lg:px-[52px] py-12 md:gap-2.5 gap-y-12">
            <div class="md:col-span-8 col-span-12">
                <h2 class="lg:text-[42px] text-4xl text-[#FFFFFF] font-semibold">{{$PagesContantManage['home_section']['footer']['title']}}</h2>
                <p class="text-[#FFFFFF] text-lg mt-5 font-normal lg:max-w-[78%]">{{$PagesContantManage['home_section']['footer']['description']}}</p>
                @if(Auth::guard('front_user')->check())
                <a href="{{route('view.bookapintment')}}"
                    class="bg-[#1376F8] text-white lg:font-semibold text-base rounded-[10px] inline-block lg:mt-10 mt-7 lg:py-3.5 py-3 lg:px-[30px] px-5">Book an appointment</a>
                @else

                <a href="{{ route('front.login') }}"
                    class="bg-[#1376F8] text-white lg:font-semibold text-base rounded-[10px] inline-block lg:mt-10 mt-7 lg:py-3.5 py-3 lg:px-[30px] px-5">Book an appointment</a>
                @endif
            </div>
            <div class="md:col-span-4 col-span-12">
                <img class="rounded-xl lg:w-auto w-full" src="{{ asset('uploads/' . $PagesContantManage['home_section']['footer']['image']) }}" width="305" height="292">
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById("subscribe-form").addEventListener("submit", function(e) {
        e.preventDefault();

        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;

        fetch("{{ route('subscribe.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    name: name,
                    email: email
                })
            })
            .then(response => response.json())
            .then(data => {
                // 🔥 Show SweetAlert Success Message
                Swal.fire({
                    title: "Success!",
                    text: data.success,
                    icon: "success",
                    confirmButtonText: "OK"
                });

                // ✅ Reset Form
                document.getElementById("subscribe-form").reset();
            })
            .catch(error => {
                console.error("Error:", error);

                // ❌ Show SweetAlert Error Message
                Swal.fire({
                    title: "Error!",
                    text: "Something went wrong. Please try again.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            });
    });
</script>

@endsection
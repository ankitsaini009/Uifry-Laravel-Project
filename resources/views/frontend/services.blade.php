@extends('frontend.layout.main')
@section('manage_front')
<section class="services lg:pt-[60px] pt-[60px] lg:pb-12 pb-[70px]">
    <div class="container mx-auto">
        <h1 class="lg:text-[62px] text-[42px] font-semibold text-[#011632] tracking-[-2px] md:text-center">
            <span class="heading-after">Services</span>
        </h1>
        <p class="text-lg text-[#3C4959] max-w-[526px] mx-auto md:text-center mt-5">
            We use only the best quality materials on the market in order to provide the best products to our patients.
        </p>

        <div class="grid grid-cols-12 lg:gap-y-12 gap-y-5 lg:gap-x-12 md:gap-x-5 lg:mt-20 mt-12">
            @foreach($services as $service)
            <div class="lg:col-span-4 md:col-span-6 col-span-12 text-center bg-white lg:px-6 px-5 py-5 rounded-xl">
                <div class="bg-[#25B4F8] rounded-full inline-block p-3">
                    <img src="{{ asset('images/' . $service->image) }}" width="48" height="48" alt="{{ $service->name }}">
                </div>
                <h3 class="text-[#011632] text-2xl font-medium lg:my-4 my-3">{{ $service->name }}</h3>
                <p class="text-[#3C4959] text-lg p">{{ strip_tags($service->description) }}</p>
                <a href="{{route('view.services.detail',$service->id )}}" class="underline underline-offset-2 lg:mt-4 mt-3 text-[#011632] text-base font-medium inline-block">
                    Learn More <i class="fa-solid fa-angle-right ms-2 text-[9px] px-1.5 py-1 rounded-full border border-[#011632]"></i>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Manual Pagination -->
        <div class="flex justify-center lg:gap-5 gap-3 text-xl mt-12">
            <!-- Previous Button -->
            @if($page > 1)
            <a href="?page={{ $page - 1 }}" class="flex gap-2 items-center text-[#1376F8]">
                <i class="fa-solid fa-arrow-left"></i> Previous
            </a>
            @endif

            <!-- Page Numbers -->
            <div class="flex lg:gap-3 gap-2">
                @for($i = 1; $i <= $totalPages; $i++)
                    <a href="?page={{ $i }}" class="cursor-pointer px-3 py-1 rounded {{ $i == $page ? 'bg-blue-500 text-[#1376F8]' : 'text-[#011632]' }}">
                    {{ $i }}
                    </a>
                    @endfor
            </div>

            <!-- Next Button -->
            @if($page < $totalPages)
                <a href="?page={{ $page + 1 }}" class="flex gap-2 items-center text-[#1376F8]">
                Next <i class="fa-solid fa-arrow-right"></i>
                </a>
                @endif
        </div>
    </div>
</section>

<section class="request-appointment bg-[#011632] py-12">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 max-w-[1064px] mx-auto lg:gap-10 gap-y-12 ">
            <div class="md:col-span-7 col-span-12">
                <h2 class="lg:text-[42px] text-4xl text-[#FFFFFF] font-semibold">{{$PagesContantManage22['banner_title']}}</h2>
                <p class="text-[#FFFFFF] text-lg lg:mt-5 mt-3 font-normal lg:max-w-[78%]">{{$PagesContantManage22['banner_description']}}</p>

                @if(Auth::guard('front_user')->check())
                <a href="{{route('view.bookapintment')}}" class="bg-[#1376F8] hover:bg-[#E6F6FE] duration-700 text-white hover:text-[#011632] lg:font-semibold text-base rounded-[10px] inline-block lg:mt-7 mt-5 lg:py-3.5 py-3 lg:px-[30px] px-5">Book an appointment</a>
                @else
                <a href="{{ route('front.login') }}" class="bg-[#1376F8] hover:bg-[#E6F6FE] duration-700 text-white hover:text-[#011632] lg:font-semibold text-base rounded-[10px] inline-block lg:mt-7 mt-5 lg:py-3.5 py-3 lg:px-[30px] px-5">Book an appointment</a>
                @endif

            </div>
            <div class="md:col-span-5 col-span-12">
                <img class="rounded-lg lg:h-full h-auto w-full object-cover" src="{{ asset('uploads/' . $PagesContantManage22['bannerImage']) }}" alt="uifry-request-appointment">
            </div>
        </div>
    </div>
</section>
<section class="patients lg:pb-[100px] pb-[70px] lg:pt-[100px] pt-[70px] bg-[#FFFFFF]">
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
<section class="meet-specialists bg-[#E6F6FE] py-12 overflow-hidden">
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
<section class="ask-questions lg:pt-[100px] pt-[70px] lg:pb-[120px] pb-[70px] bg-[#FFFFFF]">
    <div class="container mx-auto">
        <div class="md:text-center">
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
                <span class="heading-border">Frequently Ask Question</span>
            </h2>
            <p class="text-[#3C4959] text-lg mt-5 font-normal lg:text-center max-w-[440px] mx-auto">We use only the best quality materials on the market in order to provide the best products to our patients. <span class="lg:hidden inline">So don’t worry about anything and book yourself.</span></p>
        </div>
        <div class="lg:max-w-[625px] md:max-w-[500px] mx-auto lg:mt-14 mt-8">
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
        <div class="grid grid-cols-12 max-w-[1064px] mx-auto bg-[#011632] rounded-xl lg:px-[52px] py-12 md:gap-2.5 gap-y-12">
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
@endsection
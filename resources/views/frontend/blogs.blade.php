@extends('frontend.layout.main')
@section('manage_front')
<section class="blogs lg:pt-[60px] pt-12 pb-[60px] overflow-hidden">
    <div class="container mx-auto">
        <h1 class="lg:text-[62px] text-[42px] font-semibold text-[#011632] tracking-[-2px] md:text-center"><span class="heading-after">Blogs</span></h1>
        <p class="text-lg text-[#3C4959] max-w-[500px] mx-auto md:text-center mt-5">We use only the best quality materials on the market in order to provide the best products to our patients.</p>
        <form action="{{ route('view.blogs') }}" method="GET">
            <div class="rounded-lg flex items-center gap-2 lg:mt-10 mt-5 lg:h-14 h-12 bg-[#FFFFFF] border border-[#CFCFCF] lg:py-3.5 py-3 px-3">
                <input type="text" name="search" value="{{ request('search') }}" class="lg:text-base text-sm outline-none w-full" placeholder=" Search by Blogs Name" id="leadingIconDefault" required>
                <button type="submit" class="bg-[#011632] text-white px-4 py-2 rounded-md">Search</button>
            </div>
        </form>
        <div class="container-child lg:-me-28 mt-12">
            <div class="swiper-container swipe5 py-1 ps-1 pe-1">
                <div class="swiper-wrapper flex transition-transform duration-300">
                    @foreach($Blogs as $Blog)
                    <div class="swiper-slide rounded-xl bg-[#E6F6FE] px-5 py-[30px] lg:col-span-3">
                        <img class="rounded-xl w-full" src="{{asset('images/'.$Blog->image)}}" width="350" height="272" alt="uifry-blog">
                        <div class="flex items-center justify-between mt-[30px]">
                            <span class="inline-block bg-[#011632] rounded-md text-base text-white px-3 py-1.5">{{strip_tags($Blog->blog_cat)}}</span>
                            <span class="text-base text-sm text-[#011632] text-right">{{strip_tags($Blog->auther)}}</span>
                        </div>
                        <a href="{{route('view.blogs.detail', $Blog->id )}}" class="text-lg text-base font-semibold text-[#011632] inline-block mt-3">{{$Blog->title}}</a>
                        <p class="text-lg text-base text-[#3C4959] lg:mt-2.5 mt-1">{{strip_tags($Blog->description)}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-2.5 lg:mt-10 mt-7">
            <div class="swiper-button-prev5 group z-10 bg-[#011632] hover:bg-[#E6F6FE] duration-700 static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer">
                <img class="hidden group-hover:inline" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
                <img class="group-hover:hidden" src="{{asset('front_assets/public/images/uifry-light-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
            </div>
            <div class="swiper-button-next5 group z-10 bg-[#011632] hover:bg-[#E6F6FE] duration-700 static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer">
                <img class="rotate-180 hidden group-hover:inline" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
                <img class="rotate-180 group-hover:hidden" src="{{asset('front_assets/public/images/uifry-light-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
            </div>
        </div>
    </div>
</section>
<section class="articles lg:py-12 py-[70px]">
    <div class="container mx-auto">
        <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
            <span class="heading-border">Articles</span>
        </h2>

        <div class="swiper-container articleSwiper lg:mt-[50px] mt-8">
            <div class="swiper-wrapper transition-transform duration-300 lg:grid lg:grid-cols-12 lg:gap-5">

                @foreach($Blogs as $Blog)
                <div class="swiper-slide rounded-xl bg-[#E6F6FE] px-5 pt-5 pb-2.5 lg:col-span-3 md:col-span-4">
                    <img class="rounded-xl w-full lg:h-48 object-cover article-image" src="{{asset('images/'.$Blog->image)}}" width="265" height="190" alt="uifry-article">
                    <span class="bg-[#011632] rounded-md text-base text-white px-3 py-1.5 inline-block mt-5">
                        {{ $Blog->blog_cat ?? 'Self Care' }}
                    </span> <a href="{{route('view.blogs.detail', $Blog->id )}}" class="text-lg font-semibold text-[#011632] lg:mt-[14px] mt-3 block">{{$Blog->title}}</a>
                    <p class="text-lg text-[#3C4959] mt-2.5">{{strip_tags($Blog->description)}}</p>
                    <span class="text-base text-[#011632] block text-right mt-0.5">{{strip_tags($Blog->auther)}}</span>
                </div>
                @endforeach
            </div>
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
<section class="patients lg:pb-28 pb-[100px] lg:pt-[60px] pt-[70px] bg-[#FFFFFF]">
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
<section class="ask-questions lg:pb-[120px] pb-[70px] bg-[#FFFFFF]">
    <div class="container mx-auto">
        <div class="md:text-center">
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
                <span class="heading-border">Frequently Ask Question</span>
            </h2>
            <p class="text-[#3C4959] text-lg lg:mt-5 mt-3 font-normal lg:text-center max-w-[440px] mx-auto">We use only the best quality materials on the market in order to provide the best products to our patients. <span class="lg:hidden inline">So don’t worry about anything and book yourself.</span></p>
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
        <div class="grid grid-cols-12 max-w-[1064px] mx-auto bg-[#011632] rounded-xl lg:px-[52px] py-12 md:gap-2.5 gap-y-10">
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
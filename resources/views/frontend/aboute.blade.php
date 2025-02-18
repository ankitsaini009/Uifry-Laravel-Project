@extends('frontend.layout.main')
@section('manage_front')
<section class="about-our-mission lg:pt-[60px] pt-5 lg:pb-[50px] pb-[35px]">
  <div class="container mx-auto">
    <h1 class="lg:text-[62px] text-4xl font-semibold text-[#011632] tracking-[-2px] text-center lg:block hidden"><span class="heading-after">About Us</span></h1>
    <div class="grid grid-cols-12 lg:pl-[108px] lg:mt-[70px] lg:gap-[70px] md:gap-5 gap-y-12">
      <div class="md:col-span-7 col-span-12">
        <h2 class="lg:text-[42px] text-5xl text-[#011632] font-semibold about-h2">Our Mission</h2>
        {!! $Manage_about->mission_statement !!}
      </div>
      <div class="md:col-span-5 col-span-12">
        <img class="rounded-xl" src="{{asset('images/'. $Manage_about->about_image )}}" width="443" height="590" alt="our-mission">
      </div>
    </div>
  </div>
</section>
<section class="specialists bg-[#FFFFFF]">
  <div class="container mx-auto">
    <div class="max-w-[480px] mx-auto md:text-center">
      <h2 class="text-[#011632] font-semibold inline-block">
        Meet Our <span class="heading-border">Specialists</span>
      </h2>
      <p class="text-[#3C4959] text-lg mt-5">We use only the best quality materials on the market in order to provide the best products to our patients.</p>
    </div>

    <div class="specialists-about lg:mt-20 mt-12">

      @foreach($specialists as $specialist)
      <div>
        <div class="grid grid-cols-12 lg:px-[103px] lg:items-center md:gap-7">
        <div class="lg:col-span-8 md:col-span-8 col-span-12 md:px-0 px-5 md:pt-0 pt-8 lg:pb-0 pb-5 md:bg-white bg-[#E6F6FE] lg:rounded-t-none rounded-t-lg">
            <div class="lg:flex items-center gap-3">
              <h3 class="text-[#011632] text-2xl font-semibold text-nowrap">{{ $specialist['name'] }}</h3>
              <span class="text-base text-[#011632] font-normal">({{ $specialist['specialization'] }})</span>
            </div>
            <p class="text-lg text-[#3C4959] mt-5">{!! $specialist['description'] !!}</p>
            <a href="{{ $specialist['linkdin_profile_link'] }}" target="_blank">
              <i class="fa-brands fa-linkedin text-[#1376F8] text-2xl mt-7"></i>
            </a>
          </div>
          <div class="lg:col-span-4 md:col-span-4 col-span-12">
            <img class="rounded-b-lg lg:rounded-xl w-full md:h-auto h-[370px]"
              src="{{ asset('images/' . $specialist['profile_photo']) }}"
              width="304" height="348"
              alt="{{ $specialist['name'] }}">
          </div>
        </div>
        <div class="border-b border-b-[#ECECEC] lg:my-[50px] my-10"></div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<section class="latest-technologies lg:py-[100px] py-[70px] bg-[#FFFFFF]">
  <div class="container mx-auto">
    <div class="max-w-[590px] mx-auto md:text-center">
      <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block mb-5">
        {{$Manage_about->latest_technology_title}}
      </h2>
      <p class="text-[#3C4959] md:text-lg text-[17px] mt-5">{{$Manage_about->latest_technology_sub_description}}</p>
    </div>
    <div class="grid grid-cols-12 lg:mt-[70px] mt-12 md:gap-5 gap-y-10">
      <div class="md:col-span-5 col-span-12">
        <img class="rounded-lg lg:w-auto w-full" src="{{asset('images/'. $Manage_about->latest_technology_image )}}" width="522" height="392" alt="latest-technologie">
      </div>
      <div class="md:col-span-7 col-span-12">
        {!! $Manage_about->latest_technology_description !!}
      </div>
    </div>
  </div>
</section>
<section class="services lg:bg-transparent bg-[#011632]">
  <div class="container lg:pt-0 pt-12 lg:pb-0 pb-[30px]">
    <div class="swiper-container swiper4 bg-[#011632] gap-6 lg:rounded-xl xl:px-6 xl:py-10">
      <div class="swiper-wrapper flex transition-transform duration-300" style="transform: translate3d(0px, 0px, 0px);">

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
      <div class="swiper-button-prev4 group z-10 bg-white static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer swiper-button-disabled">
        <img src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
      </div>
      <div class="swiper-button-next4 group z-10 bg-white static lg:py-2.5 py-2 lg:px-8 px-5 cursor-pointer swiper-button-disabled">
        <img class="rotate-180" src="{{asset('front_assets/public/images/uifry-arrow.webp')}}" width="42" height="13" alt="uifry-arrow">
      </div>
    </div>
  </div>
</section>
<section class="patient lg:py-[100px] py-[70px] bg-[#FFFFFF]">
  <div class="container mx-auto lg:!max-w-[1064px] md:text-center">
    <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block lg:max-w-[630px] md:max-w-[500px] mx-auto">
      {{$PagesContantManage['home_section']['video']['title']}}
    </h2>
    <p class="text-[#3C4959] text-lg mt-5 lg:max-w-[450px] md:max-w-[80%] mx-auto">{{$PagesContantManage['home_section']['video']['description']}}</p>
    <div class="mt-12 relative patients-video">
      <iframe class="rounded-xl w-full" width="560" height="350" src="{{ old('about_patients_overview_video', isset($PagesContantManage) ? $PagesContantManage['home_section']['video']['url'] : '') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="text-center mt-10">
      <button type="button" class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white lg:font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 lg:px-[30px] px-5">Watch Playlist</button>
    </div>
  </div>
</section>
@endsection
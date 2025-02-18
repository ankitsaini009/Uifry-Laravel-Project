@extends('frontend.layout.main')
@section('manage_front')
<section class="service-details lg:pt-8 pt-12 lg:pb-[60px] pb-10 overflow-hidden">
    <div class="container mx-auto">
        <h1 class="lg:text-[62px] text-[42px] font-semibold text-[#011632] tracking-[-2px] text-center"><span class="heading-after">{{$services->name}}</span></h1>
        <div class="grid grid-cols-12 lg:gap-5 gap-y-10 pt-[60px]">
            <div class="lg:col-span-3 col-span-12 text-center">
                <div class="bg-[#25B4F8] rounded-full inline-block p-5">
                    <img class="lg:h-[170px] h-[100px] h-auto lg:w-[170px] w-[100px] w-full" src="{{ asset('images/' . $services->image) }}" width="170" height="170" alt="uifry-Root-Canal-Treatment">
                </div>
                <div>
                    @if(Auth::guard('front_user')->check())
                    <a href="{{route('view.bookapintment')}}" class="mt-7 bg-[#1376F8] lg:w-full hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-[10px] lg:py-3.5 py-2.5 lg:px-[30px] px-4 inline-block">Book an appointment</a>
                    @else
                    <a href="{{ route('front.login') }}" class="mt-7 bg-[#1376F8] lg:w-full hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-[10px] lg:py-3.5 py-2.5 lg:px-[30px] px-4 inline-block">Book an appointment</a>
                    @endif
                </div>

            </div>
            <div class="lg:col-span-9 col-span-12">
                <!-- <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold">{{$services->name}}</h2> -->
                <p class="text-[#3C4959] text-lg lg:text-start text-justify">{{ strip_tags($services->description) }}</p>
            </div>
        </div>

    </div>
</section>
<section class="patients lg:pb-28 pb-[70px] lg:pt-[60px] pt-10 bg-[#FFFFFF]">
    <div class="container mx-auto lg:!max-w-[1064px] md:text-center">
        <h2
            class="lg:text-[42px] text-3xl text-[#011632] font-semibold inline-block lg:max-w-[630px] md:max-w-[500px]  max-w-[361px] mx-auto">{{$PagesContantManage['home_section']['video']['title']}}
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
            <p class="text-[#3C4959] lg:text-lg text-base mt-5">We use only the best quality materials on the market
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
<section class="ask-questions lg:pt-[100px] pt-[70px] lg:pb-[100px] pb-[70px] bg-[#FFFFFF]">
    <div class="container mx-auto">
        <div class="md:text-center">
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
                <span class="heading-border">Frequently Ask Question</span>
            </h2>
            <p class="text-[#3C4959] text-lg mt-5 font-normal lg:text-center max-w-[440px] mx-auto">We use only the best quality materials on the market in order to provide the best products to our patients. <span class="lg:hidden inline">So don’t worry about anything and book yourself.</span></p>
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
<section class="comments lg:pb-[150px] pb-12">
    <div class="container">
        <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold lg:text-center">
            <span class="heading-border">Comments ({{ $comments->count() }})</span>
        </h2>
        <div class="lg:my-14 my-12">
            @foreach($comments as $comment)
            @if(!$comment->parent_id) {{-- Show only parent comments --}}
            <div class="flex items-start gap-2.5 mt-7">
                <div class="shrink-0">
                    <img class="rounded-full h-[75px] w-[75px] object-cover" src="https://dmprojects.xyz/ankitsaini/laravel-uifry/public/images/1727852246.webp" width="75" height="75" alt="User">
                </div>
                <div class="w-full">
                    <div class="lg:flex items-center justify-between">
                        <h3 class="text-[#011632] lg:text-2xl text-xl font-semibold">
                            {{ $comment->name }} ({{ $comment->created_at->format('M d, Y') }})
                        </h3>
                    </div>
                    <p class="text-base text-[#011632] my-1 text-justify">{{ $comment->description }}</p>

                    <!-- Reply Button -->
                    <button class="text-[#1376F8] flex gap-1 items-center" onclick="toggleReplyForm({{ $comment->id }})"><i class="fa-solid fa-share rotate-180 ml-1"></i> Reply</button>

                    <div class="hidden my-2" id="reply-form-{{ $comment->id }}">
                        <!-- Display Replies -->
                        @if($comment->replies->count())
                        <div class="ml-10 mt-4 border-l-2 border-gray-300 pl-4">
                            @foreach($comment->replies as $reply)
                            <div class="mt-2">
                                <h4 class="text-[#011632] font-semibold">{{ $reply->name }} ({{ $reply->created_at->format('M d, Y') }})</h4>
                                <p class="text-sm text-[#011632]">{{ $reply->description }}</p>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        <!-- Reply Form (Hidden by default) -->
                        <form class="mt-4" action="{{ route('commentsFront.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <input type="hidden" name="services_id" value="{{ $services->id }}">
                            <input type="hidden" name="type" value="Services Coment">
                            <div class="grid grid-cols-12 gap-3">
                                <div class="col-span-6">
                                    <input name="name" type="text" class="bg-white outline-none text-[#011632] w-full text-base border border-[#D0D5DD] p-3 rounded-lg" placeholder="Your Name" required>
                                </div>
                                <div class="col-span-6">
                                    <input name="email" type="email" class="bg-white outline-none text-[#011632] w-full text-base border border-[#D0D5DD] p-3 rounded-lg" placeholder="Your Email" required>
                                </div>
                                <div class="col-span-12">
                                    <textarea name="description" class="outline-none resize-none bg-white text-[#667085] h-[80px] w-full text-base border border-[#D0D5DD] p-3 rounded-lg" placeholder="Reply Message" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-lg py-2.5 px-4 mt-2">Submit Reply</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>

        <!-- Comment Form -->
        <div class="bg-[#E6F6FE] border border-[#DDDDDD] p-5 rounded-lg">
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold">Leave A Coment</h2>
            @if(session('success'))
            <p class="text-green-600" style="color: green;">{{ session('success') }}</p>
            @endif
            <form action="{{ route('commentsFront.store') }}" method="POST">
                @csrf
                <input type="hidden" name="type" id="type" value="Services Coment">
                <input type="hidden" name="services_id" id="services_id" value="{{$services->id}}">
                <div class="grid grid-cols-12 lg:gap-5 gap-3 lg:my-7 my-5">
                    <div class="lg:col-span-6 col-span-12">
                        <input id="name" name="name" type="text" class="bg-white outline-none text-[#011632] w-full text-base border border-[#D0D5DD] p-3 rounded-lg" placeholder="Your Name" required>
                    </div>
                    <div class="lg:col-span-6 col-span-12">
                        <input id="email" name="email" type="email" class="bg-white outline-none text-[#011632] w-full text-base border border-[#D0D5DD] p-3 rounded-lg" placeholder="Your Email" required>
                    </div>
                    <div class="col-span-12">
                        <textarea id="message" name="description" class="outline-none resize-none bg-white text-[#667085] h-[120px] w-full text-base border border-[#D0D5DD] p-3 rounded-lg" placeholder="Message" required></textarea>
                    </div>
                </div>
                <button type="submit" class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-[10px] lg:py-3.5 py-2.5 lg:px-[30px] px-4">Comment Submit</button>
            </form>
        </div>
    </div>
</section>

<script>
    function toggleReplyForm(id) {
        document.getElementById('reply-form-' + id).classList.toggle('hidden');
    }
</script>

@endsection
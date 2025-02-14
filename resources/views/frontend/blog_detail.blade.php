@extends('frontend.layout.main')
@section('manage_front')
<section class="blog-details lg:pt-20 pt-12 lg:pb-0 pb-12 overflow-hidden">
    <div class="container mx-auto">
        <h1 class="lg:text-[62px] text-[42px] font-semibold text-[#011632] tracking-[-2px] md:text-center"><span class="heading-after">{{$Blogs->title}}</span></h1>

        <div class="blog-details-grid mt-12">
            <img class="w-full rounded-xl object-cover lg:h-[620px]" src="{{ asset('images/' . $Blogs->image) }}" width="1280" height="620" alt="blog-details">
            <div class="flex items-center gap-2 mt-5">
                <span class="bg-[#011632] rounded-md text-base text-white px-3 py-1.5 inline-block">
                    {{ $Blogs->blog_cat ?? 'Self Care' }}
                </span> <span class="text-base text-[#011632] inline-block">{{$Blogs->auther}}</span>
            </div>
            <!-- <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold lg:mt-10 mt-5">{{$Blogs->title}}</h2> -->
            <p class="text-[#3C4959] text-lg lg:mt-5 mt-3">{{ strip_tags($Blogs->description) }}</p>
        </div>
    </div>
</section>
<section class="patients lg:pb-28 lg:pt-[100px] pt-[70px] bg-[#FFFFFF]">
    <div class="container mx-auto lg:!max-w-[1064px] md:text-center">
        <h2
            class="lg:text-[42px] text-3xl text-[#011632] font-semibold inline-block lg:max-w-[630px] md:max-w-[500px]  max-w-[361px] mx-auto">{{$PagesContantManage['home_section']['video']['title']}}
        </h2>
        <p class="text-[#3C4959] text-lg lg:mt-5 mt-3 lg:max-w-[460px] md:max-w-[80%] mx-auto">{{$PagesContantManage['home_section']['video']['description']}}</p>
        <div class="mt-12 relative patients-video">

            <iframe class="rounded-xl w-full" width="560" height="350" src="{{ old('about_patients_overview_video', isset($PagesContantManage) ? $PagesContantManage['home_section']['video']['url'] : '') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>
        <div class="text-center">
            <a href="#"
                class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white lg:font-semibold lg:text-base text-sm rounded-[10px] inline-block mt-10 lg:py-3.5 py-3 lg:px-[30px] px-5">Watch
                Playlist</a>
        </div>
    </div>
</section>
<section class="ask-questions lg:pt-0 pt-[70px] lg:pb-[100px] pb-[70px] bg-[#FFFFFF]">
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
            <div class="flex items-start gap-2.5 mt-7">
                <div class="shrink-0">
                    <img class="rounded-full h-[75px] w-[75px] object-cover" src="	https://dmprojects.xyz/ankitsaini/laravel-uifry/public/images/1727852246.webp
                    " width="75" height="75" alt="User">
                </div>
                <div class="w-full">
                    <div class="lg:flex items-center justify-between">
                        <h3 class="text-[#011632] lg:text-2xl text-xl font-semibold">
                            {{ $comment->name }} ({{ $comment->created_at->format('M d, Y') }})
                        </h3>
                    </div>
                    <p class="text-base text-[#011632] my-2 text-justify">{{ $comment->description }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="bg-[#E6F6FE] border border-[#DDDDDD] p-5 rounded-lg">
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold">Leave A Coment</h2>
            @if(session('success'))
            <p class="text-green-600" style="color: green;">{{ session('success') }}</p>
            @endif
            <form action="{{ route('commentsFrontBlog.store') }}" method="POST">
                @csrf
                <input type="hidden" name="type" id="type" value="Blogs Coment">
                <input type="hidden" name="Blogs_id" id="Blogs_id" value="{{$Blogs->id}}">
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
@endsection
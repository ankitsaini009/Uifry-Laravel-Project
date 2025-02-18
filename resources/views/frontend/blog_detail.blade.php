@extends('frontend.layout.main')
@section('manage_front')
<section class="blog-details lg:pt-20 pt-12 pb-12 overflow-hidden">
    <div class="container mx-auto">
        <h1 class="lg:text-[62px] text-[42px] font-semibold text-[#011632] tracking-[-2px] md:text-center"><span class="heading-after">{{$Blogs->title}}</span></h1>

        <div class="blog-details-grid grid grid-cols-12 mt-12 lg:gap-5 gap-y-12">
            <div class="lg:col-span-8 col-span-12">
                <img class="w-full rounded-xl object-cover lg:h-[620px] blog-details-image" src="{{ asset('images/' . $Blogs->image) }}" width="1280" height="620" alt="blog-details">
                <div class="flex items-center gap-2 mt-5">
                    <span class="bg-[#011632] rounded-md text-base text-white px-3 py-1.5 inline-block">
                        {{ $Blogs->blog_cat ?? 'Self Care' }}
                    </span> <span class="text-base text-[#011632] inline-block">{{$Blogs->auther}}</span>
                </div>
                <!-- <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold lg:mt-10 mt-5">{{$Blogs->title}}</h2> -->
                <p class="text-[#3C4959] text-lg lg:mt-5 mt-3">{{ strip_tags($Blogs->description) }}</p>
            </div>
            <div class="lg:col-span-4 col-span-12 blog-recennt-post">
                <div class="border border-[#DDDDDD] rounded-lg p-3">
                    <h3 class="text-[#011632] text-2xl font-medium border-b border-b-[#DDDDDD] pb-2.5">Recent Blogs</h3>


                    @foreach($relatedblogs as $blog)
                    <div class="grid grid-cols-12 gap-3 mt-10">
                        <div class="col-span-5">
                            <img class="rounded-xl" src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="col-span-7">
                            <h4 class="text-xl text-[#011632] font-semibold">
                                <a href="{{ route('view.blogs.detail', $blog->id) }}">{{ $blog->title }}</a>
                            </h4>
                            <span class="block text-lg text-[#011632] my-3">{{ $blog->created_at->format('M d, Y') }}</span>
                            <p>{{strip_tags($blog->description,) }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="p-3 mt-7">
                    <h3 class="text-[#011632] text-2xl font-medium border-b border-b-[#DDDDDD] pb-2.5">Categories</h3>
                    <div class="lg:mt-10 mt-5">
                        @foreach($categories as $category)
                        <div class="text-base text-[#1C1C1C] font-medium flex justify-between items-center border-b border-b-[#D1E7E5] pb-2.5 mb-3">
                            <span>{{ $category->cat_name }}</span>
                            <span>{{ $category->blogs_count }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="patients lg:pb-28 pt-12 bg-[#FFFFFF]">
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
                    <form class="mt-4" action="{{ route('commentsFrontBlog.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                        <input type="hidden" name="Blogs_id" value="{{ $Blogs->id }}">
                        <input type="hidden" name="type" value="Blogs Coment">
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
            <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold">Leave A Comment</h2>
            @if(session('success'))
            <p class="text-green-600">{{ session('success') }}</p>
            @endif
            <form action="{{ route('commentsFrontBlog.store') }}" method="POST">
                @csrf
                <input type="hidden" name="type" value="Blogs Coment">
                <input type="hidden" name="Blogs_id" value="{{$Blogs->id}}">
                <div class="grid grid-cols-12 gap-3 lg:my-7 my-5">
                    <div class="col-span-6">
                        <input name="name" type="text" class="bg-white text-[#011632] w-full border p-3 rounded-lg" placeholder="Your Name" required>
                    </div>
                    <div class="col-span-6">
                        <input name="email" type="email" class="bg-white text-[#011632] w-full border p-3 rounded-lg" placeholder="Your Email" required>
                    </div>
                    <div class="col-span-12">
                        <textarea name="description" class="bg-white text-[#667085] w-full border p-3 rounded-lg" placeholder="Message" required></textarea>
                    </div>
                </div>
                <button type="submit" class="bg-[#1376F8] hover:bg-[#011632] text-white font-semibold rounded-lg py-2.5 px-4">Comment Submit</button>
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
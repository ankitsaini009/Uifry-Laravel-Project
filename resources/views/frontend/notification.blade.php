@include('frontend.layout.header')

<section class="my-account pb-10 mt-5">
    <div class="container">
        <div class="grid grid-cols-12 lg:gap-5 gap-y-10">
            @include('frontend.layout.profile_sidebar')
            <div class="col-span-12 md:col-span-8">
                <h2 class="lg:text-3xl text-2xl font-semibold text-[#011632]">Notification</h2>
                <div class="bg-[#FFFFFF] lg:p-5 p-3 lg:mt-7 mt-5 border border-[#AFAFAF]">

                    @if(session('notifications'))
                    @foreach(session('notifications') as $notification)
                    <div class="border-t border-t-[#F1F4F9] lg:px-4 px-3 lg:py-6 py-4 flex gap-3">
                        <div class="shrink-0 relative inline-block before:content-[''] before:absolute before:top-5 before:right-[-5px] before:w-3 before:h-3 before:bg-blue-500 before:rounded-full">
                            <img src="{{ asset('images/'.$user->image ) }}" alt="User Avatar" class="w-12 h-12 rounded-full">
                        </div>
                        <div>
                            <p class="text-xs text-[#011632] lg:leading-[20px]">{{ $notification['message'] }}</p>
                            <span class="block text-[11px] text-[#011632]">{{ $notification['time'] }}</span>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="text-center">Notifications Not Found.</p>
                    @endif


                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('front_assets/public/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/swiper.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/jquery.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/index.js')}}"></script>
</body>
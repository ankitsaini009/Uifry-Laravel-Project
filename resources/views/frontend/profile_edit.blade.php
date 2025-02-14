@include('frontend.layout.header')

<section class="my-account pb-10 mt-5">
    <div class="container">
        <div class="grid grid-cols-12 lg:gap-5 gap-y-10">
            @include('frontend.layout.profile_sidebar')
            <div class="col-span-12 md:col-span-8">
                <h2 class="lg:text-3xl text-2xl font-semibold text-[#011632]">Personal Information</h2>
                <form action="{{route('frontuserstore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{isset($userdata->id)?$userdata->id:''}}">
                    <div class="grid grid-cols-12 lg:mt-7 mt-5 lg:gap-5 gap-4">
                        <div class="lg:col-span-6 col-span-12">
                            <label for="name" class="text-lg text-[#3C4959]">Enter Name</label>
                            <input id="name" name="name" type="text" placeholder="Enter Name"
                                class="outline-none h-auto bg-[#FFFFFF] text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm" value="{{isset($userdata->name)?$userdata->name:''}}" required>
                            @if ($errors->has('name'))
                            <div class="text-danger" style="color: red;">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <label for="email" class="text-lg text-[#3C4959]">Enter Email</label>
                            <input id="email" name="email" type="email" value="{{isset($userdata->email)?$userdata->email:''}}" placeholder="Enter Email"
                                class="outline-none h-auto bg-[#FFFFFF] text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm" required>
                            @if ($errors->has('email'))
                            <div class="text-danger" style="color: red;">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <label for="phone" class="text-lg text-[#3C4959]">Enter Phone Number</label>
                            <input id="phone" name="phone" type="number" value="{{isset($userdata->phone)?$userdata->phone:''}}" placeholder="Enter Phone Number"
                                class="outline-none h-auto bg-[#FFFFFF] text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
                            @if ($errors->has('phone'))
                            <div class="text-danger" style="color: red;">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>

                        <div class="lg:col-span-6 col-span-12">
                            <label for="image" class="text-lg text-[#3C4959]">Image</label>
                            <input id="image" name="image" type="file"
                                class="outline-none h-auto bg-[#FFFFFF] mt-2.5 text-[#667085] w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
                            @if ($errors->has('image'))
                            <div class="text-danger" style="color: red;">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 px-[30px] mt-5">Submit
                        Information</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('front_assets/public/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/swiper.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/jquery.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/index.js')}}"></script>
</body>
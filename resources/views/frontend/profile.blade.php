@include('frontend.layout.header')

<section class="my-account pb-10 mt-5">
    <div class="container">
        <div class="grid grid-cols-12 lg:gap-5 gap-y-10">
            @include('frontend.layout.profile_sidebar')
            <div class="col-span-12 md:col-span-8">
                <div class="flex items-center justify-between">
                    <h2 class="lg:text-3xl text-2xl font-semibold text-[#011632]">Personal Information</h2>
                    <a href="{{route('frontuser_edit_profile')}}" class="text-lg text-[#FF0000] font-medium">Edit</a>
                </div>
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: green;font-size: 18px;">
                    {{ session('success') }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">

                    <strong class="text-xl font-bold">Please fix the following errors:-</strong>
                    <ul>
                        @foreach ($errors->all() as $error)

                        <li class="text-lg font-medium" style="color:red">{{ $error }}</li>

                        @endforeach

                    </ul>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                @endif
                <div class="bg-[#FFFFFF] p-5 lg:mt-7 mt-5 border border-[#AFAFAF]">
                    <div class="grid grid-cols-12 lg:text-lg text-base font-medium gap-y-5 gap-x-3">
                        <div class="lg:col-span-3 col-span-4 text-[#1376F8]">Name</div>
                        <div class="lg:col-span-9 col-span-8 text-[#000000]">{{ !empty($userdata->name) ? $userdata->name : "----" }}</div>

                        <div class="lg:col-span-3 col-span-4 text-[#1376F8]">Email</div>
                        <div class="lg:col-span-9 col-span-8 text-[#000000]">{{ !empty($userdata->email) ? $userdata->email : "----" }}</div>

                        <div class="lg:col-span-3 col-span-4 text-[#1376F8]">Phone </div>
                        <div class="lg:col-span-9 col-span-8 text-[#000000]">{{ !empty($userdata->phone) ? $userdata->phone	 : "----" }}</div>
                    </div>
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
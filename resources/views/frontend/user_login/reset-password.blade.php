@include('frontend.layout.header')
<section class="set-password">
    <div class="grid grid-cols-12 overflow-hidden items-center">
        <div class="col-span-6 relative lg:block hidden">
            <img class="w-full rounded-tr-[10px]" src="{{asset('front_assets/public/images/uifry-forget-password.webp')}}" width="675" height="835" alt="uifry-forget-password">
        </div>
        <div class="lg:col-span-6 col-span-12 lg:pl-[110px] lg:px-0 px-6 py-[70px] reset-password">
            <div class="max-w-[440px] lg:mx-0 mx-auto">
                <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold lg:text-left text-center">Set A Password</h2>
                <p class="text-[#3C4959] text-lg lg:text-left text-center mt-2">Don’t worry, haYour previous password has been reseted. Please set a new password for your account.ppens to all of us. Enter your email below to recover your password</p>
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: green;">
                    {{ session('success') }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">

                    <strong>Please fix the following errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)

                        <li style="color:red;">{{ $error }}</li>

                        @endforeach

                    </ul>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                @endif

                <form action="{{route('frontuser.password.update')}}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <div class="flex justify-between w-full lg:mt-7 mt-5 bg-[#FFFFFF] rounded-lg mx-auto text-base text-[#AFAFAF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <input name="email" type="email" id="email" class="w-full outline-none" placeholder="Enter your Email">
                        <button type="button" class="flex items-center">
                            <i class="fa-regular fa-envelope text-2xl text-[#AFAFAF]"></i>
                        </button>
                    </div>
                    <div class="flex justify-between w-full lg:mt-7 mt-5 bg-[#FFFFFF] rounded-lg mx-auto text-base text-[#AFAFAF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <input name="password" type="password" id="password" class="w-full outline-none" placeholder="Create Password">
                        <button type="button" class="flex items-center" onclick="togglePasswordVisibility('password', 'eye-icon-password')">
                            <i class="fa-regular fa-eye text-2xl text-[#AFAFAF]" id="eye-icon-password"></i>
                        </button>
                    </div>
                    <div class="flex justify-between w-full lg:mt-7 mt-5 bg-[#FFFFFF] rounded-lg mx-auto text-base text-[#AFAFAF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <input type="password" name="password_confirmation" id="password" class="w-full outline-none" placeholder="Re- enter Password">
                        <button type="button" class="flex items-center" onclick="togglePasswordVisibility('confirm-psd', 'eye-icon-confirm')">
                            <i class="fa-regular fa-eye text-2xl text-[#AFAFAF]" id="eye-icon-confirm"></i>
                        </button>
                    </div>
                    <button type="submit" class="w-full lg:mt-7 mt-5 lg:py-4 py-3.5 text-white bg-[#1376F8] hover:bg-[#011632] duration-700 rounded-xl text-base">Set Password</button>
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

</html>
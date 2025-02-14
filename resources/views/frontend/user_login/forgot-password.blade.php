@include('frontend.layout.header')
<section class="forget-password">
    <div class="grid grid-cols-12 overflow-hidden items-center">
        <div class="col-span-6 relative lg:block hidden">
            <img class="w-full rounded-tr-[10px]" src="{{asset('front_assets/public/images/uifry-forget-password.webp')}}" width="674" height="817" alt="uifry-forget-password">
        </div>
        <div class="lg:col-span-6 col-span-12 lg:pl-28 lg:px-0 px-6 py-[70px] form-section">
            <div class="max-w-[440px] lg:mx-0 mx-auto">
                <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold lg:text-left text-center">Forgot Your Password</h2>
                <p class="text-[#3C4959] text-lg lg:text-left text-center mt-2">Don’t worry, happens to all of us. Enter your email below to recover your password</p>

                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show text-lg font-medium mt-2" role="alert" style="color: green;">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">

                    <strong class="text-xl font-bold">Please fix the following errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)

                        <li class="text-lg font-medium" style="color:red">{{ $error }}</li>

                        @endforeach

                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{ route('frontuser.password.email') }}" method="post">
                    @csrf

                    <div class="rounded-lg flex items-center gap-2 bg-[#FFFFFF] md:mt-6 mt-4 w-full mx-auto border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <i class="fa-regular fa-envelope text-2xl text-[#AFAFAF]"></i>
                        <input type="text" class="text-base outline-none w-full bg-[#FFFFFF]" name="email" id="email" placeholder="Enter your Email">
                    </div>
                    <div class="flex items-center lg:mt-5 mt-3">
                        <input type="checkbox" class="mr-2 h-3.5 w-3.5">
                        I agree with Terms and Privacy
                    </div>
                    <button type="submit" class="w-full mt-5 lg:py-4 py-3.5 text-white bg-[#1376F8] hover:bg-[#011632] duration-700 rounded-xl text-base">Submit</button>
                    <p class="text-lg text-[#505673] mt-3 text-center">
                        Don't have an account yet?
                        <a href="{{route('front.registration')}}" class="text-dark-blue font-semibold hover:underline">Register here</a>.
                    </p>
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
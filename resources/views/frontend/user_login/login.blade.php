@include('frontend.layout.header')
<section class="login">
    <div class="grid grid-cols-12 overflow-hidden items-center">
        <div class="col-span-6 relative lg:block hidden">
            <img class="w-full rounded-tr-[10px]" src="{{asset('front_assets/public/images/uifry-login.webp')}}" width=" 674" height="817" alt="uifry-login">
            <div class="absolute top-0 left-0 bg-[#000000] bg-opacity-[20%] w-full h-full rounded-tr-[10px] flex items-end pb-[72px]">
                <div class="swiper animeslide max-w-[530px]">
                    <div class="swiper-wrapper relative">
                        <div class="swiper-slide animeslide-slide text-white">
                            <div data-animate="bottom" class="animeslide-desc opacity-90">
                                <p class="text-2xl font-normal">“For there was never yet philosopher, That could endure the toothache patiently.”</p>
                                <p class="text-2xl font-normal mt-0.5">~ Dr Dre Andre Romelle</p>
                                <span class="text-lg font-normal mt-5 inline-block">Founder of Smile Pvt.Ltd</span>
                            </div>
                        </div>
                        <div class="swiper-slide animeslide-slide text-white">
                            <div data-animate="bottom" class="animeslide-desc opacity-90">
                                <p class="text-2xl font-normal">“Dr. Brent provides general and cosmetic dentistry services.”</p>
                                <p class="text-2xl font-normal mt-0.5">~ Dr Brent</p>
                                <span class="text-lg font-normal mt-5 inline-block">Founder of InfoTech Pvt.Ltd</span>
                            </div>
                        </div>
                        <div class="swiper-slide animeslide-slide text-white">
                            <div data-animate="bottom" class="animeslide-desc opacity-90">
                                <p class="text-2xl font-normal">“Dr. Ashish J. Vashi has been practicing general, cosmetic and implant dentistry.”</p>
                                <p class="text-2xl font-normal mt-0.5">~ Dr Ashish J. Vashi</p>
                                <span class="text-lg font-normal mt-5 inline-block">Founder of Cipla Pvt.Ltd</span>
                            </div>
                        </div>
                        <div class="flex justify-end gap-2.5 absolute z-10 bottom-0 right-0">
                            <div class="login-button-prev h-[30px] w-[30px] text-sm cursor-pointer text-white border border-white rounded-full flex justify-center items-center">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div class="login-button-next h-[30px] w-[30px] text-sm cursor-pointer text-white border border-white rounded-full flex justify-center items-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-6 col-span-12 lg:pl-[128px] lg:px-0 px-6 py-[70px]">
            <div class="max-w-[414px] lg:mx-0 mx-auto">
                <h2 class="text-[#011632] font-semibold lg:text-left text-center" style="font-size: 42px;">Welcome Back</h2>
                <p class="text-[#3C4959] text-lg lg:text-left text-center lg:mt-2 mt-1">Discover a better way of spandings with Uifry.</p>

                <a href="{{route('auth.google')}}" class="bg-[#FFFFFF] w-full flex items-center justify-center gap-3 lg:py-5 py-4 lg:mt-9 mt-6 lg:border border-[#011632] rounded-lg text-[#011632] lg:bg-transparent">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google Logo" class="w-5 h-5">
                    Log in with Google
                </a>


                <div class="flex items-center my-6">
                    <hr class="flex-grow border-[#011632]">
                    <span class="mx-2 text-[#011632] text-lg">Or</span>
                    <hr class="flex-grow border-[#011632]">
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
                <form action="{{route('loginuser')}}">

                    <div class="rounded-lg flex items-center gap-2 lg:mt-6 mt-5 w-full mx-auto bg-[#FFFFFF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <i class="fa-regular fa-envelope text-2xl text-[#AFAFAF]"></i>
                        <input type="text" name="email" class="text-base outline-none w-full bg-[#FFFFFF]" placeholder="Enter your Email">
                    </div>
                    @if ($errors->has('email'))
                    <div class="text-danger" style="color: red;">{{ $errors->first('email') }}</div>
                    @endif
                    <div class="rounded-lg flex items-center gap-2 lg:mt-6 mt-4 w-full mx-auto bg-[#FFFFFF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <i class="fa-solid fa-lock text-2xl text-[#AFAFAF]"></i>
                        <input type="text" class="text-base outline-none w-full bg-[#FFFFFF]" name="password" placeholder="Password">
                    </div>
                    @if ($errors->has('password'))
                    <div class="text-danger" style="color: red;">{{ $errors->first('password') }}</div>
                    @endif
                    <div class="flex items-center justify-between text-sm text-[#011632] lg:mt-5 mt-4">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2 h-3.5 w-3.5">
                            Remember Me
                        </label>
                        <a href="{{route('frontuser.password.request')}}" class="underline">Forgot Password?</a>
                    </div>
                    <button class="w-full mt-5 lg:py-4 py-3.5 text-white bg-[#1376F8] hover:bg-[#011632] duration-700 rounded-xl lg:text-base text-sm">Log in</button>

                </form>
                <p class="mt-5 text-center text-[#011632]">Not member yet? <a href="{{ route('front.registration') }}" class="font-semibold hover:underline">Create an account</a></p>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('front_assets/public/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/swiper.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/jquery.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/index.js')}}"></script>
</body>
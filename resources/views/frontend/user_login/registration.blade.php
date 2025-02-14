@include('frontend.layout.header')
<section class="signUp">
    <div class="grid grid-cols-12 overflow-hidden items-center">
        <div class="col-span-6 relative lg:block hidden">
            <img class="w-full rounded-tr-[10px]" src="{{asset('front_assets/public/images/uifry-signUp.webp')}}" width="674" height="817" alt="uifry-signUp">
            <div class="absolute top-0 left-0 bg-[#000000] bg-opacity-[20%] w-full h-full rounded-tr-[10px] flex items-end pb-[72px]">
                <div class="swiper animeslide max-w-[530px]">
                    <div class="swiper-wrapper relative">
                        <div class="swiper-slide animeslide-slide text-white">
                            <div data-animate="bottom" class="animeslide-desc opacity-90">
                                <p class="text-2xl font-normal">“Effort is like toothpaste; you can usually squeeze out just a little bit more.”</p>
                                <p class="text-2xl font-normal mt-0.5">~ Dr Andre Jackson</p>
                                <span class="text-lg font-normal mt-5 inline-block">Manager of Smile Pvt.Ltd</span>
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
        <div class="lg:col-span-6 col-span-12 lg:pl-[126px] lg:px-0 px-[15px] py-[70px]">
            <div class="max-w-[414px] lg:mx-0 mx-auto">
                <h2 class="text-[42px] text-[#011632] font-semibold lg:text-left text-center" style="font-size: 42px;">Create An Account</h2>
                <p class="text-[#3C4959] text-lg lg:text-left text-center mt-2">Discover a better way of spandings with Uifry.</p>
                <button class="bg-[#FFFFFF] w-full flex items-center justify-center gap-3 lg:py-5 py-4 lg:mt-[30px] mt-6 lg:border border-[#011632] rounded-lg text-[#011632]">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google Logo" class="w-5 h-5">
                    Sign up with Google
                </button>
                <div class="flex items-center my-6">
                    <hr class="flex-grow border-[#011632]">
                    <span class="mx-2 text-[#011632] text-lg">Or</span>
                    <hr class="flex-grow border-[#011632]">
                </div>
                <form action="{{route('front.create_user')}}" autocomplete="off">
                    <div class="rounded-lg flex items-center gap-2 lg:mt-6 mt-4 w-full mx-auto bg-[#FFFFFF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <i class="fa-regular fa-user text-2xl text-[#AFAFAF]"></i>
                        <input type="text" name="name" class="text-base outline-none bg-[#FFFFFF] w-full" value="{{old('name')}}" autocomplete="off" placeholder="Type your name">

                    </div>
                    @if ($errors->has('name'))
                    <div class="text-danger" style="color: red;">{{ $errors->first('name') }}</div>
                    @endif
                    <div class="rounded-lg flex items-center gap-2 lg:mt-6 mt-4 w-full mx-auto bg-[#FFFFFF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <i class="fa-regular fa-envelope text-2xl text-[#AFAFAF]"></i>
                        <input type="email" name="email" class="text-base outline-none bg-[#FFFFFF] w-full" value="{{old('email')}}" autocomplete="off" placeholder="Enter your Email">

                    </div>
                    @if ($errors->has('email'))
                    <div class="text-danger" style="color: red;">{{ $errors->first('email') }}</div>
                    @endif
                    <div class="rounded-lg flex items-center gap-2 lg:mt-6 mt-4 w-full mx-auto bg-[#FFFFFF] border border-[#AFAFAF] lg:py-3.5 py-3 px-3.5">
                        <i class="fa-solid fa-lock text-2xl text-[#AFAFAF]"></i>
                        <input type="password" name="password" class="text-base outline-none bg-[#FFFFFF] w-full" value="{{old('password')}}" autocomplete="off" placeholder="Password">

                    </div>
                    @if ($errors->has('password'))
                    <div class="text-danger" style="color: red;">{{ $errors->first('password') }}</div>
                    @endif
                    <div class="flex items-center justify-between text-sm text-[#011632] lg:mt-5 mt-4">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2 h-3.5 w-3.5">
                            I agree with Terms and Privacy
                        </label>
                    </div>
                    <button class="w-full mt-5 lg:py-4 py-3.5 text-white bg-[#1376F8] hover:bg-[#011632] duration-700 rounded-xl text-base">Sign up</button>
                </form>
                <p class="mt-5 text-lg text-center text-[#011632]">Have account? <a href="{{ route('front.login') }}" class="font-semibold hover:underline">Sign In</a></p>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('front_assets/public/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/swiper.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/jquery.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/index.js')}}"></script>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight-Tour-Flight-Partner-Create-Account</title>
    <link rel="stylesheet" href="{{ asset('front_assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa1aJztznpnIl7L+Qw0j0LALXyElH4VRVbxi1KURfH9B6aKr3EaIQ8W9Q59" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoGkR7r2Y1KjRBi2QN6/tIhSaisgA7x8dfVM9SyPpGQAN8w" crossorigin="anonymous"></script>

</head>

<body>
    <header class="sticky top-0 z-50 py-4 bg-white lg:py-[22px] border-b border-[#00000070]">
        <div class="container m-auto">
            <div id="menu" class="flex w-full duration-700 bg-white ">
                <div class="flex flex-col w-full text-white">
                    <div class="flex items-center justify-between ">
                        <a href="{{route('front.index')}}">
                            <img src="{{ asset('front_assets/images/flight-tour-logo.svg') }}" alt="Logo" width="180" height="48" />
                        </a>

                        <div class="flex items-center lg:gap-x-24 md:gap-x-10 gap-x-3">
                            <div class="relative select-box z-[2]">
                                <select class="bg-transparent h-10 md:pr-24 pr-16 w-full z-[3] bg-left md:bg-[length:52px_39px] bg-[length:40px_39px] bg-no-repeat select_country_code text-black appearance-none relative" style="background-image: url('{{ asset('front_assets/images/flight-tour-india-flag.svg') }}');">
                                    <option value=""></option>
                                    <option value="india">india</option>
                                    <!-- <option value="usa"></option>
                                    <option value="japan"></option> -->
                                </select>
                                <i class="absolute text-black fa-solid fa-angle-down right-[4px] z-[1] top-1/2 -translate-y-1/2"></i>
                            </div>

                            <img src="{{ asset('front_assets/images/flight-tour-login-info-icon.svg') }}" alt="info" width="34" height="34" class="w-6 h-6 md:h-auto md:w-auto">
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <section class="signin md:py-16 py-8 bg-[#003b951a] bg-no-repeat xl:bg-auto lg:bg-[length:25%_auto] bg-[length:18%_auto]" style="background-image: url('{{ asset('front_assets/images/flight-tour-bg-login-one.webp') }}'), url('{{ asset('front_assets/images/flight-tour-bg-login-two.webp') }}'); background-position: center left, center right;">
        <div class="container relative mx-auto after:bg-[url('{{ asset('front_assets/images/flight-tour-bg-login-four.webp') }}')] after:absolute after:top-0 after:left-0 xl:after:right-[132px] after:lg:right-2.5 after:right-0 after:bottom-0 after:bg-right-bottom after:-z-[1] after:bg-no-repeat after:lg:bg-[length:auto_auto] after:bg-[length:20%_auto] before:bg-[length:36%_auto] before:xl:bg-[length:auto_auto] before:bg-[url('{{ asset('front_assets/images/flight-tour-bg-login-three.webp') }}')] before:absolute before:top-0 before:left-0 before:w-full before:bottom-0 before:bg-left-top before:-z-[1] before:bg-no-repeat before:md:block before:hidden after:md:block after:hidden">
            <div class="lg:px-6 md:px-4 px-2.5 bg-white border border-[#0000001a] rounded-2xl md:py-9 py-6 xl:w-[41%] lg:w-1/2 md:w-4/6 w-full mx-auto text-center">
                <h2 class="mb-2 text-xl font-semibold xl:text-4xl text-black-400">Create Your Account</h2>
                <p class="md:text-lg text-base text-[#1a1e1fcc]">Your full name and phone number are needed to ensure the security of your abhiyastour.com account.</p>
                <form action="{{route('front.create_user_1')}}" class="block mt-4 text-start lg:mt-9 md:mt-5 row">
                    <div class="col-md-6 mb-5 md:mb-7">
                        <label class="md:text-[22px] text-lg text-black-400 md:mb-3 mb-1 block font-medium">Name</label>
                        <input type="text" name="name" placeholder="Enter your name" class="w-full border rounded-[5px] border-[#9E9E9E] px-3.5 py-1.5 md:gap-x-4 gap-x-2 h-14">

                        @if ($errors->has('name'))

                        <div class="text-danger" style="color: red;">{{ $errors->first('name') }}</div>

                        @endif
                    </div>

                    <div class="col-md-6 mb-5 md:mb-7">
                        <label class="md:text-[22px] text-lg text-black-400 md:mb-3 mb-1 block font-medium">Email<span class="text-[#E72A2A]">*</span></label>
                        <input type="email" name="email" placeholder="Enter your email" class="w-full border rounded-[5px] border-[#9E9E9E] px-3.5 py-1.5 md:gap-x-4 gap-x-2 h-14">

                        @if ($errors->has('email'))

                        <div class="text-danger" style="color: red;">{{ $errors->first('email') }}</div>

                        @endif
                    </div>

                    <div class="col-md-6 mb-5 md:mb-7">
                        <label class="md:text-[22px] text-lg text-black-400 md:mb-3 mb-1 block font-medium">Phone number<span class="text-[#E72A2A]">*</span></label>
                        <div class="flex items-end md:gap-x-3 gap-x-2.5">
                            <div class="border border-[#9E9E9E] rounded px-3.5 py-1.5 h-14 md:w-[28%] w-1/3 flex items-center">
                                <select class="w-full h-full md:w-3/4" style="background-image: url('{{ asset('front_assets/images/flight-tour-circle-flag-icon.svg') }}'); background-position: left center; background-repeat: no-repeat;">
                                    <option value=""></option>
                                    <option value="+91">+91</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <div class="border border-[#9E9E9E] rounded px-3.5 py-1.5 h-14 flex">
                                    <span class="pr-2.5 border-r border-[#1a1e1f66] flex items-center">+91</span>
                                    <input type="text" name="phone" class="w-full text-black-400 px-2.5" placeholder="Enter your Phone Number">
                                </div>
                                @if ($errors->has('phone'))
                                <div class="text-danger" style="color: red;">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p class="text-base text-[#505673]">
                            We'll text a two-factor authentication code to this number when you sign in.
                            <br>
                            Already have an account?
                            <a href="{{route('front.login')}}" class="text-dark-blue font-semibold hover:underline">Log in here</a>.
                        </p>
                    </div>

                    <div class="col-md-6 mt-5">
                        <button class="font-semibold text-light-brown md:text-[22px] text-lg bg-dark-blue rounded px-6 md:py-4 py-3.5 w-full hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">Next</button>
                    </div>
                </form>
                <!-- <hr class="my-5 md:my-11">
                <p class="md:text-base text-sm text-[#505673] text-center mb-4">By signing in or creating an account, you agree with our <a href="#" class="font-semibold text-dark-blue">Terms & conditions</a> and <a href="#" class="font-semibold text-dark-blue">Privacy statement</a></p>
                <p class="md:text-base text-sm font-medium text-[#505673] text-center">All rights reserved.<br> Copyright (2018 - 2024) - adbiyastour.com™</p> -->
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('front_assets/src/jquery.min.js') }}"></script>
</body>

</html>
@extends('frontend.layout.main')
@section('manage_front')
<section class="signin md:py-16 py-8 bg-[#003b951a] bg-no-repeat xl:bg-auto lg:bg-[length:25%_auto] bg-[length:18%_auto]" style="background-image: url('{{ asset('front_assets/images/flight-tour-bg-login-one.webp') }}'), url('{{ asset('front_assets/images/flight-tour-bg-login-two.webp') }}'); background-position: center left, center right;">
    <div class="container relative mx-auto after:bg-[url('{{ asset('front_assets/images/flight-tour-bg-login-four.webp') }}')] after:absolute after:top-0 after:left-0 xl:after:right-[132px] after:lg:right-2.5 after:right-0 after:bottom-0 after:bg-right-bottom after:-z-[1] after:bg-no-repeat after:lg:bg-[length:auto_auto] after:bg-[length:20%_auto] before:bg-[length:36%_auto] before:xl:bg-[length:auto_auto] before:bg-[url('{{ asset('front_assets/images/flight-tour-bg-login-three.webp') }}')] before:absolute before:top-0 before:left-0 before:w-full before:bottom-0 before:bg-left-top before:-z-[1] before:bg-no-repeat before:md:block before:hidden after:md:block after:hidden">
        <div class="lg:px-6 md:px-4 px-2.5 bg-white border border-[#0000001a] rounded-2xl md:py-9 py-6 xl:w-[41%] lg:w-1/2 md:w-4/6 w-full mx-auto text-center">
            <h2 class="mb-2 text-xl font-semibold xl:text-4xl text-black-400">Change Your Password</h2>
            <p class="md:text-lg text-base text-[#1a1e1fcc]">Please enter your current password and a new password.</p><br>
            <form class="block mt-4 text-start lg:mt-9 md:mt-5 row" method="POST" action="{{ route('passwordupdate') }}">
                @csrf

                <!-- Current Password -->
                <div class="col-md-12 mb-5 md:mb-7">
                    <label class="md:text-[22px] text-lg text-black-400 md:mb-3 mb-1 block font-medium">Current Password<span class="text-[#E72A2A]">*</span></label>
                    <input type="password" name="current_password" placeholder="Enter your current password" class="w-full border rounded-[5px] border-[#9E9E9E] px-3.5 py-1.5 h-14">
                    @if ($errors->has('current_password'))
                    <div class="text-danger" style="color: red;">{{ $errors->first('current_password') }}</div>
                    @endif
                </div>
                <!-- New Password -->
                <div class="col-md-12 mb-5 md:mb-7">
                    <label class="md:text-[22px] text-lg text-black-400 md:mb-3 mb-1 block font-medium">New Password<span class="text-[#E72A2A]">*</span></label>
                    <input type="password" name="new_password" placeholder="Enter a new password" class="w-full border rounded-[5px] border-[#9E9E9E] px-3.5 py-1.5 h-14">
                    @if ($errors->has('new_password'))
                    <div class="text-danger" style="color: red;">{{ $errors->first('new_password') }}</div>
                    @endif
                </div>

                <!-- Confirm New Password -->
                <div class="col-md-12 mb-5 md:mb-7">
                    <label class="md:text-[22px] text-lg text-black-400 md:mb-3 mb-1 block font-medium">Confirm New Password<span class="text-[#E72A2A]">*</span></label>
                    <input type="password" name="new_password_confirmation" placeholder="Confirm your new password" class="w-full border rounded-[5px] border-[#9E9E9E] px-3.5 py-1.5 h-14">
                    @if ($errors->has('password_confirmation'))
                    <div class="text-danger" style="color: red;">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>
                <!-- Update Password Button -->
                <div class="col-md-12 mt-2">
                    <button type="submit" class="font-semibold text-light-brown md:text-[22px] text-lg bg-dark-blue rounded px-6 md:py-4 py-3.5 w-full hover:bg-transparent hover:border hover:border-dark-blue hover:text-dark-blue transition">
                        Update Password
                    </button>
                </div>
            </form>
            <!-- Optional Additional Info or Links -->
            <p class="md:text-base text-sm text-[#505673] text-center mt-2">
                Forgot your current password? <a href="{{ route('frontuser.password.request') }}" class="text-dark-blue font-semibold hover:underline">Reset it here</a>.
            </p>
        </div>

    </div>
</section>
@endsection
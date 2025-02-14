<?php
$settings;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIFRY</title>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/public/css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/public/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/src/input.css')); ?>">
    <link href="<?php echo e(asset('front_assets/public/css/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/67ad93ef825083258e147398/1ijv0jo6g';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</head>

<body style="background: linear-gradient(180deg, #E6F6FE -34.56%, rgba(230, 246, 254, 0) 88.57%);">
    <header class="sticky top-0 z-50 lg:py-10 md:pt-6 pt-0 lg:bg-[#edf9fe]">
        <div class="container">
            <div class="md:bg-[#FFFFFF] rounded-[10px] lg:px-10 md:px-6 px-0 py-5 mx-auto flex items-center justify-between">
                <div class="logo">

                    <?php if(empty($settings->site_logo)): ?>
                    <a href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('front_assets/public/images/uifry-logo.svg')); ?>" alt="Logo" width="113" height="35"></a>
                    <?php else: ?>
                    <a href="<?php echo e(route('front.index')); ?>"> <img src="<?php echo e(asset('images/' . $settings->site_logo)); ?>" alt="Logo" width="113" height="35"></a>
                    <?php endif; ?> </a>

                </div>
                <ul class="text-base text-[#011632] gap-10 lg:flex hidden pl-[72px]">
                    <li class="font-medium"><a href="<?php echo e(route('front.index')); ?>">Home</a></li>
                    <li class="font-medium"><a href="<?php echo e(route('view.services')); ?>">Services</a></li>
                    <li class="font-medium"><a href="<?php echo e(route('view.blogs')); ?>">Blogs</a></li>
                    <li class="font-medium"><a href="<?php echo e(route('view.about')); ?>">About</a></li>
                    <li class="font-medium"><a href="<?php echo e(route('view.contact')); ?>">Contact</a></li>
                </ul>
                <div class="flex items-center lg:gap-5 gap-2.5">
                    <div class="relative z-10">
                        <button onclick="profileMenu()">

                            <?php if(auth()->guard('front_user')->check()): ?>
                            <?php $user = auth()->guard('front_user')->user(); ?>
                            <img src="<?php echo e(asset('images/'.$user->image )); ?>" width="48" height="48" alt="uifry-profile-icon">
                            <?php else: ?>
                            <!-- <img src="<?php echo e(asset('images/1727852246.webp')); ?>" width="48" height="48" alt="uifry-profile-icon"> -->
                            <?php endif; ?>
                        </button>
                        <ul id="profile-menu" class="min-w-52 absolute -z-10 top-0 right-0 transform hidden translate-y-20 bg-[#FFFFFF] shadow-xl rounded-lg">
                            <?php if(auth()->guard('front_user')->check()): ?>
                            <?php $user = auth()->guard('front_user')->user(); ?>
                            <li class="flex gap-3 border-b border-b-[#e5e7eb] py-3 px-3">
                                <div>
                                    <img src="<?php echo e(asset('images/'.$user->image )); ?>" width="40" height="40" alt="User Profile">
                                </div>
                                <div>
                                    <span class="text-base font-semibold block"><?php echo e($user->name); ?></span>
                                    <small class="">User</small>
                                </div>
                            </li>
                            <?php else: ?>
                            <!-- <li class="flex gap-3 border-b border-b-[#e5e7eb] py-3 px-3">
                                <div>
                                    <img src="<?php echo e(asset('images/1727852246.webp')); ?>" width="40" height="40" alt="Guest Profile">
                                </div>
                                <div>
                                    <span class="text-base font-semibold block">Guest</span>
                                    <small class="">Visitor</small>
                                </div>
                            </li> -->
                            <?php endif; ?>

                            <?php if(auth()->guard('front_user')->check()): ?>
                            <li class="px-3 py-2.5 border-b border-b-[#e5e7eb]"><a href="<?php echo e(route('frontuserprofile')); ?>">My Profile</a></li>
                            <li class="px-3 py-2.5 border-b border-b-[#e5e7eb]"><a href="<?php echo e(route('userlogout')); ?>" class="text-red-600">Log Out</a></li>
                            <?php else: ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <?php if(Auth::guard('front_user')->check()): ?>
                    <!-- "Book Now" Button (Only for Logged-in Users) -->
                    <div class="bg-[#1376F8] hover:bg-[#011632] duration-700 font-semibold text-base rounded-[10px] md:flex hidden lg:py-3.5 py-2.5 lg:px-[30px] md:px-4 px-2.5 cursor-pointer">
                        <a href="<?php echo e(route('view.bookapintment')); ?>" class="text-white">Book Now</a>
                    </div>
                    <?php else: ?>
                    <!-- "Login" Button (Only for Guests) -->
                    <div class="bg-[#FFFFFF] text-black !text-black font-semibold text-base rounded-[10px] md:flex hidden lg:py-3.5 py-2.5 lg:px-[30px] md:px-4 px-2.5 cursor-pointer">
                        <a href="<?php echo e(route('front.login')); ?>" class="text-black">Login</a>
                    </div>

                    <!-- "Sign Up" Button (Only for Guests) -->
                    <div class="bg-[#1376F8] hover:bg-[#011632] duration-700 font-semibold text-base rounded-[10px] md:flex hidden lg:py-3.5 py-2.5 lg:px-[30px] md:px-4 px-2.5 cursor-pointer">
                        <a href="<?php echo e(route('front.registration')); ?>" class="text-white">Sign Up</a>
                    </div>
                    <?php endif; ?>
                    <div class="bg-[#1376F8] hover:bg-[#011632] duration-700 font-semibold text-base rounded-[10px] lg:hidden inline-block lg:py-3.5 py-2.5 lg:px-[30px] px-2.5 cursor-pointer">
                        <img class="lg:hidden inline" src="<?php echo e(asset('front_assets/public/images/uifrymenu-bar.svg')); ?>" width="24" height="24" alt="uifrymenu-bar"
                            onclick="toggleMenu()">
                    </div>
                </div>
                <div id="mobile-menu"
                    class="absolute top-0 left-0 w-full h-screen bg-[#E6F6FE] transform -translate-x-full opacity-0 duration-500 z-50 overflow-y-auto">
                    <div class="flex justify-between border-b border-black py-3 px-3">
                        <a href="index.html"><img class="w-28" src="<?php echo e(asset('front_assets/public/images/uifry-logo.svg')); ?>" width="60" height="60"
                                alt="maharwal-logo"></a>
                        <button onclick="toggleMenu()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 hover:text-yellow-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <ul class="flex flex-col font-medium text-black py-5 px-3 gap-5">
                        <li class="font-semibold hover:font-bold"><a href="<?php echo e(route('front.index')); ?>">Home</a></li>
                        <li class="font-semibold hover:font-bold"><a href="<?php echo e(route('view.services')); ?>">Services</a></li>
                        <li class="font-semibold hover:font-bold"><a href="<?php echo e(route('view.blogs')); ?>">Blogs</a></li>
                        <li class="font-semibold hover:font-bold"><a href="<?php echo e(route('view.about')); ?>">About</a></li>
                        <li class="font-semibold hover:font-bold"><a href="<?php echo e(route('view.contact')); ?>">Contact</a></li>
                    </ul>
                    <?php if(Auth::guard('front_user')->check()): ?>
                    <a href="<?php echo e(route('view.bookapintment')); ?>" class="md:hidden bg-[#1376F8] text-white hover:bg-[#011632] duration-700 font-semibold text-base rounded-[10px] inline-block text-center lg:py-3.5 py-2.5 px-[30px] cursor-pointer" style="margin-left:12px;">Book Now</a>
                    <?php else: ?>

                    <!-- "Sign Up" Button (Only for Guests) -->
                    <a href="<?php echo e(route('front.registration')); ?>" class="text-black font-semibold block md:hidden" style="margin-left:12px;">Sign Up</a>

                    <!-- "Login" Button (Only for Guests) -->
                    <a href="<?php echo e(route('front.login')); ?>" class="text-black mt-5 md:hidden inline-block bg-[#1376F8] text-white duration-700 font-semibold text-base rounded-[10px] py-3.5 px-[30px] cursor-pointer" style="margin-left:12px;">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header><?php /**PATH E:\xampp\htdocs\laravel-uifry\resources\views/frontend/layout/header.blade.php ENDPATH**/ ?>
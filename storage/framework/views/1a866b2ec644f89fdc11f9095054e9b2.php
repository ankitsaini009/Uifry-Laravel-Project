<?php
$settings;
?>

<footer class="lg:pt-0 pt-12">
    <div class="container mx-auto">
        <div class="flex justify-between items-center md:border-b-2 md:border-b-[#011632] lg:pb-12 md:pb-7">
            <?php if(empty($settings->site_logo)): ?>
            <a href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('front_assets/public/images/uifry-logo.svg')); ?>" alt="Logo" width="113" height="35"></a>
            <?php else: ?>
            <a href="<?php echo e(route('front.index')); ?>"> <img src="<?php echo e(asset('images/' . $settings->site_logo)); ?>" alt="Logo" width="113" height="35"></a>
            <?php endif; ?> </a>
            <ul class="md:flex hidden gap-10 text-[#3C4959] text-base font-medium">
                <li><a href="<?php echo e(route('front.index')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('view.services')); ?>">Service</a></li>
                <li><a href="<?php echo e(route('view.blogs')); ?>">Blogs</a></li>
                <li><a href="<?php echo e(route('view.about')); ?>">About</a></li>
                <li><a href="<?php echo e(route('view.contact')); ?>">Contact</a></li>

            </ul>
            <div class="relative md:hidden">
                <div class="bg-[#011632] py-3 px-2" onclick="footerbar()">
                    <img src="<?php echo e(asset('front_assets/public/images/uifry-footer-bar-icon.svg')); ?>" width="34" height="20" alt="uifry-footer-bar-icon">
                </div>
                <ul id="footer-menu" class="hidden absolute bottom-0 right-[110%] text-base font-medium bg-[#011632] text-white p-3 rounded-lg">
                    <li class="pb-1"><a href="<?php echo e(route('front.index')); ?>">Home</a></li>
                    <li class="pb-1"><a href="<?php echo e(route('view.services')); ?>">Service</a></li>
                    <li class="pb-1"><a href="<?php echo e(route('view.blogs')); ?>">Blogs</a></li>
                    <li class="pb-1"><a href="<?php echo e(route('view.about')); ?>">About</a></li>
                    <li class="pb-1"><a href="<?php echo e(route('view.contact')); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
        <p class="text-[#3C4959] lg:text-lg text-base font-medium lg:py-7 py-5 md:hidden block">All our PRO level features
            at your fingertips.</p>
        <div class="lg:py-[30px] md:py-5 md:flex md:flex-row flex-col justify-between items-center">
            <div class="text-[#011632] text-lg font-semibold md:hidden block">Follow us on</div>
            <p class="text-[#011632] text-sm md:block hidden">All rights reserved ® <a href="index.html"><?php echo e($settings->site_name); ?></a> | Terms and
                conditions apply!</p>
            <div class="inline-flex lg:gap-5 gap-2.5 md:border-t-transparent border-t border-t-[#AEAEAE] md:pt-0 pt-2.5 md:mt-0 mt-2.5">
                <a href="<?php echo e($settings->facebook_url); ?>"><i class="fa-brands fa-facebook md:bg-[#011632] bg-[#666666] text-white p-2 rounded-full"></i></a>
                <a href="<?php echo e($settings->instagram_url); ?>"><i class="fa-brands fa-instagram md:bg-[#011632] bg-[#666666] text-white p-2 rounded-full"></i></a>
                <a href="<?php echo e($settings->youtub_url); ?>"><i class="fa-brands fa-youtube md:bg-[#011632] bg-[#666666] text-white p-2 rounded-full"></i></a>
                <a href="<?php echo e($settings->linkedIn_url); ?>"><i class="fa-brands fa-linkedin md:bg-[#011632] bg-[#666666] text-white p-2 rounded-full"></i></a>
                <a href="<?php echo e($settings->twitter_url); ?>"><i class="fa-brands fa-twitter md:bg-[#011632] bg-[#666666] text-white p-2 rounded-full"></i></a>
            </div>
        </div>
    </div>
    <div class="md:hidden block bg-[#011632] text-center py-1 mt-10 text-white text-sm font-medium">Uifry by M.Aze, CopyRights are protected by Uifry</div>
</footer>
<script src="<?php echo e(asset('front_assets/public/js/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/index.js')); ?>"></script>
</body>

</html><?php /**PATH E:\xampp\htdocs\laravel-uifry\resources\views/frontend/layout/footer.blade.php ENDPATH**/ ?>
<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="my-account pb-10 mt-5">
    <div class="container">
        <div class="grid grid-cols-12 lg:gap-5 gap-y-10">
            <?php echo $__env->make('frontend.layout.profile_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-span-12 md:col-span-8">
                <div class="flex items-center justify-between">
                    <h2 class="lg:text-3xl text-2xl font-semibold text-[#011632]">Personal Information</h2>
                    <a href="<?php echo e(route('frontuser_edit_profile')); ?>" class="text-lg text-[#FF0000] font-medium">Edit</a>
                </div>
                <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: green;font-size: 18px;">
                    <?php echo e(session('success')); ?>

                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">

                    <strong class="text-xl font-bold">Please fix the following errors:-</strong>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li class="text-lg font-medium" style="color:red"><?php echo e($error); ?></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                <?php endif; ?>
                <div class="bg-[#FFFFFF] p-5 lg:mt-7 mt-5 border border-[#AFAFAF]">
                    <div class="grid grid-cols-12 lg:text-lg text-base font-medium gap-y-5 gap-x-3">
                        <div class="lg:col-span-3 col-span-4 text-[#1376F8]">Name</div>
                        <div class="lg:col-span-9 col-span-8 text-[#000000]"><?php echo e(!empty($userdata->name) ? $userdata->name : "----"); ?></div>

                        <div class="lg:col-span-3 col-span-4 text-[#1376F8]">Email</div>
                        <div class="lg:col-span-9 col-span-8 text-[#000000]"><?php echo e(!empty($userdata->email) ? $userdata->email : "----"); ?></div>

                        <div class="lg:col-span-3 col-span-4 text-[#1376F8]">Phone </div>
                        <div class="lg:col-span-9 col-span-8 text-[#000000]"><?php echo e(!empty($userdata->phone) ? $userdata->phone	 : "----"); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo e(asset('front_assets/public/js/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/index.js')); ?>"></script>
</body><?php /**PATH E:\xampp\htdocs\laravel-uifry\resources\views/frontend/profile.blade.php ENDPATH**/ ?>
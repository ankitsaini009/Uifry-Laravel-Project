<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="my-account pb-10 mt-5">
    <div class="container">
        <div class="grid grid-cols-12 lg:gap-5 gap-y-10">
            <?php echo $__env->make('frontend.layout.profile_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-span-12 md:col-span-8">
                <h2 class="lg:text-3xl text-2xl font-semibold text-[#011632]">Personal Information</h2>
                <form action="<?php echo e(route('frontuserstore')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" value="<?php echo e(isset($userdata->id)?$userdata->id:''); ?>">
                    <div class="grid grid-cols-12 lg:mt-7 mt-5 lg:gap-5 gap-4">
                        <div class="lg:col-span-6 col-span-12">
                            <label for="name" class="text-lg text-[#3C4959]">Enter Name</label>
                            <input id="name" name="name" type="text" placeholder="Enter Name"
                                class="outline-none h-auto bg-[#FFFFFF] text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm" value="<?php echo e(isset($userdata->name)?$userdata->name:''); ?>" required>
                            <?php if($errors->has('name')): ?>
                            <div class="text-danger" style="color: red;"><?php echo e($errors->first('name')); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <label for="email" class="text-lg text-[#3C4959]">Enter Email</label>
                            <input id="email" name="email" type="email" value="<?php echo e(isset($userdata->email)?$userdata->email:''); ?>" placeholder="Enter Email"
                                class="outline-none h-auto bg-[#FFFFFF] text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm" required>
                            <?php if($errors->has('email')): ?>
                            <div class="text-danger" style="color: red;"><?php echo e($errors->first('email')); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="lg:col-span-6 col-span-12">
                            <label for="phone" class="text-lg text-[#3C4959]">Enter Phone Number</label>
                            <input id="phone" name="phone" type="number" value="<?php echo e(isset($userdata->phone)?$userdata->phone:''); ?>" placeholder="Enter Phone Number"
                                class="outline-none h-auto bg-[#FFFFFF] text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
                            <?php if($errors->has('phone')): ?>
                            <div class="text-danger" style="color: red;"><?php echo e($errors->first('phone')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="lg:col-span-6 col-span-12">
                            <label for="image" class="text-lg text-[#3C4959]">Image</label>
                            <input id="image" name="image" type="file"
                                class="outline-none h-auto bg-[#FFFFFF] mt-2.5 text-[#667085] w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
                            <?php if($errors->has('image')): ?>
                            <div class="text-danger" style="color: red;"><?php echo e($errors->first('image')); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 px-[30px] mt-5">Submit
                        Information</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo e(asset('front_assets/public/js/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/public/js/index.js')); ?>"></script>
</body><?php /**PATH E:\xampp\htdocs\laravel-uifry\resources\views/frontend/profile_edit.blade.php ENDPATH**/ ?>
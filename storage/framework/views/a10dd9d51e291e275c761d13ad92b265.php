<?php
$userdata = Auth::guard('front_user')->user();
$currentRoute = Route::currentRouteName();
?>

<div class="col-span-12 md:col-span-4">
    <div class="bg-[#FFFFFF] p-5">
        <div class="flex items-center gap-2">
            <img src="<?php echo e(asset('images/'.$userdata->image )); ?>" width="32" height="32" alt="uifry-profile-icon">
            <span class="text-[#1376F8] lg:text-2xl text-xl font-medium">My Profile</span>
        </div>

        <ul class="border-t border-t-[#000000] mt-5 pt-5 flex flex-col lg:gap-5 gap-3">
            <li class="text-lg font-medium">
                <a href="<?php echo e(route('frontuserprofile')); ?>" class="text-[#011632] hover:text-[#1376F8] cursor-pointer <?php echo e($currentRoute == 'frontuserprofile' ? 'font-bold text-[#1376F8]' : ''); ?>">
                    <i class="fa-solid fa-user w-[10%]" style="width:10%"></i> Personal Information
                </a>
            </li>
            <li class="text-lg font-medium">
                <a href="<?php echo e(route('Booking.show')); ?>" class="text-[#011632] hover:text-[#1376F8] cursor-pointer <?php echo e($currentRoute == 'Booking.show' ? 'font-bold text-[#1376F8]' : ''); ?>">
                    <i class="fa-solid fa-business-time w-[10%]" style="width:10%"></i> Book Appointment
                </a>
            </li>
            <li class="text-lg font-medium">
                <a href="<?php echo e(route('notification.show')); ?>" class="text-[#011632] hover:text-[#1376F8] cursor-pointer <?php echo e($currentRoute == 'notification.show' ? 'font-bold text-[#1376F8]' : ''); ?>">
                    <i class="fa-regular fa-bell w-[10%]" style="width:10%"></i> Notification
                </a>
            </li>
            <li class="text-lg font-medium">
                <a href="<?php echo e(route('userlogout')); ?>" class="text-[#011632] hover:text-[#1376F8] <?php echo e($currentRoute == 'userlogout' ? 'font-bold text-[#1376F8]' : ''); ?>">
                    <i class="fa-solid fa-arrow-right-from-bracket w-[10%]" style="width:10%"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</div><?php /**PATH E:\xampp\htdocs\laravel-uifry\resources\views/frontend/layout/profile_sidebar.blade.php ENDPATH**/ ?>
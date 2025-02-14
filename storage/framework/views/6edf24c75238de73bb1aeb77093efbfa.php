

<?php $__env->startSection('manage_content'); ?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Please fix the following errors:</strong>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <h2>Admin Profile</h2><br>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="profile-info">
                                    <div class="profile-photo">
                                        <img src="<?php echo e(asset('images/' . (isset($admindata->profile_img) ? $admindata->profile_img : 'default-image.png'))); ?>" class="img-fluid rounded-circle" alt="Profile Image">
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0"><?php echo e(isset($admindata->name) ? $admindata->name : 'Admin Name'); ?></h4>
                                        </div>
                                        <div class="profile-email px-2 pt-2">
                                            <h4 class="text-muted mb-0"><?php echo e(isset($admindata->email) ? $admindata->email : 'Email not available'); ?></h4>
                                            <p>Email</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" value="<?php echo e(isset($admindata) ? $admindata->id : ''); ?>">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Admin Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter User Name" value="<?php echo e(isset($admindata) ? $admindata->name : old('name')); ?>" autocomplete="off">
                            <?php if($errors->has('name')): ?>
                            <div class="text-danger"><?php echo e($errors->first('name')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo e(isset($admindata) ? $admindata->email : old('email')); ?>" autocomplete="off">
                            <?php if($errors->has('email')): ?>
                            <div class="text-danger"><?php echo e($errors->first('email')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Update Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" autocomplete="new-password">
                            <?php if($errors->has('password')): ?>
                            <div class="text-danger"><?php echo e($errors->first('password')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
                            <?php if($errors->has('password_confirmation')): ?>
                            <div class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Profile Image</label>
                            <?php if(isset($admindata) && $admindata->profile_img): ?>
                            <div class="mb-2">
                                <img src="<?php echo e(asset('images/' . $admindata->profile_img)); ?>" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <?php endif; ?>
                            <input type="file" class="form-control" name="image" autocomplete="off">
                            <?php if($errors->has('image')): ?>
                            <div class="text-danger"><?php echo e($errors->first('image')); ?></div>
                            <?php endif; ?>
                        </div>

                    </div><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Update Profile</button>
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-secondary">Back to Dashboard</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel-uifry\resources\views/admin/profile/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('manage_content'); ?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
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
            <div class="col-12">
                <h2>Manage Home Page</h2><br>
                <form action="<?php echo e(route('Manage_homepage.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="Manage_homepage_id" value="<?php echo e(isset($jsonData2) ? $jsonData2->id : ''); ?>">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="hero_section_banner_title" class="form-label">Hero Section Banner Title</label>
                            <input type="text" class="form-control" name="hero_section_banner_title" placeholder="Enter Hero Section Banner Title" value="<?php echo e(old('hero_section_banner_title', isset($PagesContantManage) ? $PagesContantManage['hero_section']['banner_title'] : '')); ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="hero_section_description" class="form-label">Hero Section Description</label>
                            <textarea class="form-control" name="hero_section_description" placeholder="Enter Hero Section Description"><?php echo e(old('hero_section_description', isset($PagesContantManage) ? $PagesContantManage['hero_section']['description'] : '')); ?></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="hero_section_linkedin_profileimage" class="form-label">Hero Section Banner Image</label>
                            <?php if(isset($PagesContantManage) && isset($PagesContantManage['hero_section']['bannerImage'])): ?>

                            <div class="mb-2">
                                <img src="<?php echo e(asset('uploads/' . $PagesContantManage['hero_section']['bannerImage'])); ?>" alt="User Image" class="img-thumbnail" width="100">
                            </div>

                            <input type="hidden" value="<?php echo e(old('hero_section_bannerImage', isset($PagesContantManage) ? $PagesContantManage['hero_section']['bannerImage'] : '')); ?>" class="form-control" name="hero_section_bannerImage" autocomplete="off">

                            <?php endif; ?>
                            <input type="file" class="form-control" name="hero_section_bannerImage">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="hero_section_emergency_number" class="form-label">Emergency Number</label>
                            <input type="text" class="form-control" name="hero_section_emergency_number" placeholder="Enter Emergency Number" value="<?php echo e(old('hero_section_emergency_number', isset($PagesContantManage) ? $PagesContantManage['hero_section']['emergency_number'] : '')); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hero_section_linkedin_name" class="form-label">LinkedIn Name</label>
                            <input type="text" class="form-control" name="hero_section_linkedin_name" placeholder="Enter LinkedIn Name" value="<?php echo e(old('hero_section_linkedin_name', isset($PagesContantManage) ? $PagesContantManage['hero_section']['linkedin']['name'] : '')); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hero_section_linkedin_profileimage" class="form-label">LinkedIn Profile Image</label>
                            <?php if(isset($PagesContantManage) && isset($PagesContantManage['hero_section']['linkedin']['profile_image'])): ?>

                            <div class="mb-2">

                                <img src="<?php echo e(asset('uploads/' . $PagesContantManage['hero_section']['linkedin']['profile_image'])); ?>" alt="User Image" class="img-thumbnail" width="100">

                            </div>

                            <input type="hidden" value="<?php echo e(old('hero_section_linkedin_profileimage', isset($PagesContantManage) ? $PagesContantManage['hero_section']['linkedin']['profile_image'] : '')); ?>" class="form-control" name="hero_section_linkedin_profileimage" autocomplete="off">

                            <?php endif; ?>
                            <input type="file" class="form-control" name="hero_section_linkedin_profileimage">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hero_section_linkedin_description" class="form-label">LinkedIn Description</label>
                            <textarea class="form-control" name="hero_section_linkedin_description" placeholder="Enter LinkedIn Description"><?php echo e(old('hero_section_linkedin_description', isset($PagesContantManage) ? $PagesContantManage['hero_section']['linkedin']['description'] : '')); ?></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hero_section_linkedin_profile_link" class="form-label">LinkedIn Profile Link</label>
                            <input type="text" class="form-control" name="hero_section_linkedin_profile_link" placeholder="Enter LinkedIn Profile Link" value="<?php echo e(old('hero_section_linkedin_profile_link', isset($PagesContantManage) ? $PagesContantManage['hero_section']['linkedin']['profile_link'] : '')); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="home_section_email_subscribe_title" class="form-label">Email Subscribe Title</label>
                            <input type="text" class="form-control" name="home_section_email_subscribe_title" placeholder="Enter Email Subscribe Title" value="<?php echo e(old('home_section_email_subscribe_title', isset($PagesContantManage) ? $PagesContantManage['home_section']['email_subscribe']['title'] : '')); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="home_section_email_subscribe_description" class="form-label">Email Subscribe Description</label>
                            <textarea class="form-control" name="home_section_email_subscribe_description" placeholder="Enter Email Subscribe Description"><?php echo e(old('home_section_email_subscribe_description', isset($PagesContantManage) ? $PagesContantManage['home_section']['email_subscribe']['description'] : '')); ?></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="home_section_email_subscribe_image" class="form-label">Email Subscribe Image</label>
                            <?php if(isset($PagesContantManage) && $PagesContantManage['home_section']['email_subscribe']['image']): ?>
                            <div class="mb-2">
                                <img src="<?php echo e(asset('uploads/' . $PagesContantManage['home_section']['email_subscribe']['image'])); ?>" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="<?php echo e(old('hero_section_linkedin_profileimage', isset($PagesContantManage) ? $PagesContantManage['home_section']['email_subscribe']['image'] : '')); ?>" class="form-control" name="home_section_email_subscribe_image" autocomplete="off">
                            <?php endif; ?>
                            <input type="file" class="form-control" name="home_section_email_subscribe_image" value="<?php echo e(old('home_section_email_subscribe_image', isset($PagesContantManage) ? $PagesContantManage['home_section']['email_subscribe']['image'] : '')); ?>" accept="image/*">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="home_section_dental_treatments_contant" class="form-label">Dental Treatments Content</label>
                            <textarea type="text" class="form-control" name="home_section_dental_treatments_contant" placeholder="Enter Dental Treatments Content" id="home_section_dental_treatments_contant"><?php echo e(old('home_section_dental_treatments_contant', isset($PagesContantManage) ? $PagesContantManage['home_section']['dental_treatments_content'] : '')); ?></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_dental_treatments_image" class="form-label">Dental Treatments Image</label>

                            <?php if(isset($PagesContantManage) && $PagesContantManage['home_section']['dental_treatments_image']): ?>
                            <div class="mb-2">
                                <img src="<?php echo e(asset('uploads/' . $PagesContantManage['home_section']['dental_treatments_image'])); ?>" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="<?php echo e(old('hero_section_linkedin_profileimage', isset($PagesContantManage) ? $PagesContantManage['home_section']['dental_treatments_image'] : '')); ?>" class="form-control" name="home_section_dental_treatments_image" autocomplete="off">
                            <?php endif; ?>

                            <input type="file" class="form-control" name="home_section_dental_treatments_image" placeholder="Enter Video Section Title" value="<?php echo e(old('home_section_dental_treatments_image', isset($PagesContantManage) ? $PagesContantManage['home_section']['dental_treatments_image'] : '')); ?>">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="home_section_smile_content" class="form-label">Smile Section Content</label>
                            <textarea type="text" class="form-control" name="home_section_smile_content" placeholder="Enter Smile Section Content" id="home_section_smile_content"><?php echo e(old('home_section_smile_content', isset($PagesContantManage) ? $PagesContantManage['home_section']['smile_content'] : '')); ?></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_smile_image" class="form-label">Smile Section Image</label>
                            <?php if(isset($PagesContantManage) && isset($PagesContantManage['home_section']['smile_image'])): ?>

                            <div class="mb-2">

                                <img src="<?php echo e(asset('uploads/' . $PagesContantManage['home_section']['smile_image'])); ?>" alt="User Image" class="img-thumbnail" width="100">

                            </div>

                            <input type="hidden" value="<?php echo e((isset($PagesContantManage)?$PagesContantManage['home_section']['smile_image']:old('image'))); ?>" class="form-control" name="home_section_smile_image" autocomplete="off">

                            <?php endif; ?>
                            <input type="file" class="form-control" name="home_section_smile_image" placeholder="Enter Video Section Title" value="">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_video_title" class="form-label">Video Section Title</label>
                            <input type="text" class="form-control" name="home_section_video_title" placeholder="Enter Video Section Title" value="<?php echo e(old('home_section_video_title', isset($PagesContantManage) ? $PagesContantManage['home_section']['video']['title'] : '')); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="home_section_video_description" class="form-label">Video Section Description</label>
                            <textarea class="form-control" name="home_section_video_description" placeholder="Enter Video Section Description"><?php echo e(old('home_section_video_description', isset($PagesContantManage) ? $PagesContantManage['home_section']['video']['description'] : '')); ?></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="home_section_video_url" class="form-label">Video Section URL</label>
                            <input type="text" class="form-control" name="home_section_video_url" placeholder="Enter Video URL" value="<?php echo e(old('home_section_video_url', isset($PagesContantManage) ? $PagesContantManage['home_section']['video']['url'] : '')); ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_footer_title" class="form-label">Footer Banner Title</label>
                            <input type="text" class="form-control" name="home_section_footer_title" placeholder="Enter Footer Banner Title" value="<?php echo e(old('home_section_footer_title', isset($PagesContantManage) ? $PagesContantManage['home_section']['footer']['title'] : '')); ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_footer_description" class="form-label">Footer Banner Description</label>
                            <textarea type="text" class="form-control" name="home_section_footer_description" placeholder="Enter Footer Banner Description"><?php echo e(old('home_section_footer_description', isset($PagesContantManage) ? $PagesContantManage['home_section']['footer']['description'] : '')); ?></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="home_section_footer_image" class="form-label">Footer Banner Image</label>
                            <?php if(isset($PagesContantManage) && $PagesContantManage['home_section']['footer']['image']): ?>

                            <div class="mb-2">

                                <img src="<?php echo e(asset('uploads/' . $PagesContantManage['home_section']['footer']['image'])); ?>" alt="User Image" class="img-thumbnail" width="100">

                            </div>

                            <input type="hidden" value="<?php echo e((isset($PagesContantManage)?$PagesContantManage['home_section']['footer']['image']:old('image'))); ?>" class="form-control" name="home_section_footer_image" autocomplete="off">

                            <?php endif; ?>
                            <input type="file" class="form-control" name="home_section_footer_image" placeholder="Enter Video URL" value="<?php echo e(old('home_section_footer_image', isset($PagesContantManage) ? $PagesContantManage['home_section']['footer']['image'] : '')); ?>">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Update</button>
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-secondary">Back Dashboard</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('home_section_smile_content');
    CKEDITOR.replace('home_section_dental_treatments_contant');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\laravel-uifry\resources\views/admin/manage_homepage/add.blade.php ENDPATH**/ ?>
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ComentsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SpecialistsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\PagesContantManageController;

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\RegistertionController;
use App\Http\Controllers\front\FrontuserForgotPasswordController;
use App\Http\Controllers\front\FrontContactController;
use App\Http\Controllers\front\BookingApointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth:front_user')->group(function () {

    Route::get('/user-changepass', [HomeController::class, 'userchangepass'])->name('userchangepass');
    Route::post('/user-passwordupdate', [HomeController::class, 'passwordupdate'])->name('passwordupdate');
    Route::get('/front-user-profile', [HomeController::class, 'frontuserprofile'])->name('frontuserprofile');
    Route::get('/front-user-profile-edit', [HomeController::class, 'frontuser_edit_profile'])->name('frontuser_edit_profile');
    Route::any('/front-user-store', [HomeController::class, 'userstore'])->name('frontuserstore');

    Route::any('/user-booking-show', [HomeController::class, 'bookingShow'])->name('Booking.show');

    Route::any('/user-notification', [HomeController::class, 'notificationShow'])->name('notification.show');
});

Route::prefix('/')->group(function () {

    Route::any('/services-view', [HomeController::class, 'services_view'])->name('view.services');
    Route::any('/blogs-view', [HomeController::class, 'blogs_view'])->name('view.blogs');
    Route::any('/services-detail-view/{id}', [HomeController::class, 'services_detail_view'])->name('view.services.detail');
    Route::any('/blogs-detail-view/{id}', [HomeController::class, 'blogs_detail_view'])->name('view.blogs.detail');
    Route::any('/services-comments', [HomeController::class, 'store_commentsFront'])->name('commentsFront.store');
    Route::any('/blog-comments-store', [HomeController::class, 'store_BlogFront'])->name('commentsFrontBlog.store');

    Route::any('/book-appointment-view', [BookingApointmentController::class, 'bookapintment_view'])->name('view.bookapintment');
    Route::any('/book-appointment-store', [BookingApointmentController::class, 'bookapintment_store'])->name('store.bookapintment');



    Route::post('/subscribe', [HomeController::class, 'store_subscribe'])->name('subscribe.store');
    Route::any('/contact-store-user', [FrontContactController::class, 'contact_user_store'])->name('contact.store.user');
    Route::any('/contact-view', [HomeController::class, 'contact_view'])->name('view.contact');
    Route::any('/about-view', [HomeController::class, 'about_view'])->name('view.about');

    Route::any('/', [HomeController::class, 'index'])->name('front.index');
    Route::get('/login-user', [RegistertionController::class, 'login'])->name('front.login');
    Route::any('/login', [RegistertionController::class, 'loginuser'])->name('loginuser');


    Route::any('/auth-google', [RegistertionController::class, 'auth_google'])->name('auth.google');
    Route::any('/auth/google/callback', [RegistertionController::class, 'handleGoogleCallback']);



    Route::get('/user/logout', [RegistertionController::class, 'userlogout'])->name('userlogout');
    Route::get('/registration-user', [RegistertionController::class, 'registration'])->name('front.registration');
    Route::any('/registration/create', [RegistertionController::class, 'create_user'])->name('front.create_user');
    Route::get('/register/password', [RegistertionController::class, 'creatpass'])->name('front.creatpass');

    Route::get('frontuser/forgot-password', [FrontuserForgotPasswordController::class, 'showLinkRequestForm'])->name('frontuser.password.request');
    Route::post('frontuser/forgot-password', [FrontuserForgotPasswordController::class, 'sendResetLinkEmail'])->name('frontuser.password.email');
    // in auth routs
    // Route::get('frontuser/resetpass/{token}', [FrontuserForgotPasswordController::class, 'show_ResetForm'])->name('frontuser.password.show_ResetForm');
    Route::any('frontuser/reset-password', [FrontuserForgotPasswordController::class, 'reset'])->name('frontuser.password.update');
});

Route::middleware('auth')->group(function () {

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::prefix('admin/user')->group(function () {

        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/user-create', [UserController::class, 'usercreate'])->name('user.create');
        Route::post('/user-store', [UserController::class, 'userstore'])->name('user.store');
        Route::get('/user-edit/{id}', [UserController::class, 'useredit'])->name('user.edit');
        Route::get('/user-destroy/{id}', [UserController::class, 'userdestroy'])->name('user.destroy');
    });

    Route::prefix('blogs')->group(function () {

        Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
        Route::post('/blogs-store', [BlogController::class, 'blogsstore'])->name('blogs.store');
        Route::get('/blogs-create', [BlogController::class, 'blogscreate'])->name('blogs.create');
        Route::get('/blogs-edit/{id}', [BlogController::class, 'blogsedit'])->name('blogs.edit');
        Route::get('/blogs-destroy/{id}', [BlogController::class, 'blogsdestroy'])->name('blogs.destroy');

        Route::get('/blogs-view', [BlogController::class, 'blog_catview'])->name('blog_cat.view');
        Route::post('/blogs-cat', [BlogController::class, 'blog_catstore'])->name('blog_cat.store');
        Route::delete('/blogs-cat-destroy/{id}', [BlogController::class, 'blog_catdestroy'])->name('blogs.destroy.cat');
    });

    Route::prefix('faqs')->group(function () {

        Route::get('/', [FAQController::class, 'index'])->name('faq.index');
        Route::post('/faq-store', [FAQController::class, 'faqstore'])->name('faq.store');
        Route::get('/faq-create', [FAQController::class, 'faqcreate'])->name('faq.create');
        Route::get('/faq-edit/{id}', [FAQController::class, 'faqedit'])->name('faq.edit');
        Route::get('/faq-destroy/{id}', [FAQController::class, 'faqdestroy'])->name('faq.destroy');
    });

    Route::prefix('contact')->group(function () {

        Route::get('/', [ContactController::class, 'index'])->name('contact.index');
        Route::post('/contact-store', [ContactController::class, 'contactstore'])->name('contact.store');
        Route::get('/contact-edit/{id}', [ContactController::class, 'contactedit'])->name('contact.edit');
        Route::get('/contact-destroy/{id}', [ContactController::class, 'contactdestroy'])->name('contact.destroy');
    });

    Route::prefix('appointments')->group(function () {

        Route::get('/', [AppointmentsController::class, 'index'])->name('appointments.index');
        Route::post('/appointments-store', [AppointmentsController::class, 'appointmentsstore'])->name('appointments.store');
        Route::get('/appointments-edit/{id}', [AppointmentsController::class, 'appointmentsedit'])->name('appointments.edit');
        Route::get('/appointments-destroy/{id}', [AppointmentsController::class, 'appointmentsdestroy'])->name('appointments.destroy');
    });

    Route::prefix('specialists')->group(function () {

        Route::get('/', [SpecialistsController::class, 'index'])->name('specialists.index');
        Route::post('/specialists-store', [SpecialistsController::class, 'specialistsstore'])->name('specialists.store');
        Route::get('/specialists-create', [SpecialistsController::class, 'specialistscreate'])->name('specialists.create');
        Route::get('/specialists-edit/{id}', [SpecialistsController::class, 'specialistsedit'])->name('specialists.edit');
        Route::get('/specialists-destroy/{id}', [SpecialistsController::class, 'specialistsdestroy'])->name('specialists.destroy');
    });

    Route::prefix('services')->group(function () {

        Route::get('/', [ServicesController::class, 'index'])->name('services.index');
        Route::post('/services-store', [ServicesController::class, 'servicesstore'])->name('services.store');
        Route::get('/services-create', [ServicesController::class, 'servicescreate'])->name('services.create');
        Route::get('/services-edit/{id}', [ServicesController::class, 'servicesedit'])->name('services.edit');
        Route::get('/services-destroy/{id}', [ServicesController::class, 'servicesdestroy'])->name('services.destroy');
        Route::get('/edit-services-banner', [PagesContantManageController::class, 'editbanner'])->name('edit.banner');
        Route::any('/edit-services-banner-store', [PagesContantManageController::class, 'bannerEditstore'])->name('bannerEdit.store');
    });

    Route::prefix('testimonials')->group(function () {

        Route::get('/', [TestimonialController::class, 'index'])->name('testimonials.index');
        Route::post('/testimonials-store', [TestimonialController::class, 'testimonialsstore'])->name('testimonials.store');
        Route::get('/testimonials-create', [TestimonialController::class, 'testimonialscreate'])->name('testimonials.create');
        Route::get('/testimonials-edit/{id}', [TestimonialController::class, 'testimonialsedit'])->name('testimonials.edit');
        Route::get('/testimonials-destroy/{id}', [TestimonialController::class, 'testimonialsdestroy'])->name('testimonials.destroy');
    });

    Route::prefix('blogs/coments')->group(function () {

        Route::get('/', [ComentsController::class, 'index'])->name('coment.index');
        Route::post('/coment-store', [ComentsController::class, 'comentstore'])->name('coment.store');
        Route::get('/coment-create', [ComentsController::class, 'comentcreate'])->name('coment.create');
        Route::get('/coment-edit/{id}', [ComentsController::class, 'comentedit'])->name('coment.edit');
        Route::get('/coment-destroy/{id}', [ComentsController::class, 'comentdestroy'])->name('coment.destroy');
    });

    Route::prefix('manage_homepage')->group(function () {

        Route::any('/manage-homepage-update', [PagesContantManageController::class, 'homepageupdate'])->name('Manage_homepage.update');
        Route::get('/', [PagesContantManageController::class, 'homepageShow'])->name('Manage_homepage.show');
    });

    Route::prefix('manage_contact')->group(function () {

        Route::any('/manage_contact-update', [PagesContantManageController::class, 'contactpageupdate'])->name('Manage_contact.update');
        Route::get('/', [PagesContantManageController::class, 'contactpageShow'])->name('Manage_contact.show');
    });

    Route::prefix('manage_about')->group(function () {

        Route::any('/manage-about-update', [AboutController::class, 'aboutupdate'])->name('manage_about.update');
        Route::get('/manage-about', [AboutController::class, 'aboutShow'])->name('manage_about.show');
    });

    Route::prefix('settings')->group(function () {

        Route::any('/site-settings-update', [SettingsController::class, 'settingsupdate'])->name('settings.update');
        Route::get('/site-settings', [SettingsController::class, 'settingsShow'])->name('settings.show');
    });

    Route::prefix('profile')->group(function () {

        Route::any('/admin-profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::any('/update-profile', [ProfileController::class, 'update'])->name('profile.update');
    });
    Route::any('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
});
require __DIR__ . '/auth.php';

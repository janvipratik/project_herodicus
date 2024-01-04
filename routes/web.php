<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\StatesController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\ColorMasterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\DashbordController;
// use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\backend\VideoCategoryController;
use App\Http\Controllers\backend\NewsletterController;
use App\Http\Controllers\backend\InformationController;
use App\Http\Controllers\backend\SubscriptionsController;
use App\Http\Controllers\backend\PagesController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\VideoController;
use App\Http\Controllers\FrontendController;

use Illuminate\Support\Facades\Auth;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('resetpasswordemail', [ResetPasswordController::class, 'forgotPasswordSendEmail'])->name('resetpasswordemail');
Route::get('reset-password/{token}/{ismobile?}', [ResetPasswordController::class, 'showPasswordResetForm']);
Route::post('reset-password', [ResetPasswordController::class, 'resetPassword'])->name('reset-password');
Route::get('check-login-credential', [LoginController::class, 'checkCredential'])->name('check-credential');
Route::get('/login', [LoginController::class, 'index'])->name('login');


// Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard'); 




Route::get('register', [RegisterController::class, 'Register'])->name('registration');

Route::post('register', [RegisterController::class, 'Store'])->name('post.registration');


Route::group(['middleware' => [
    'is_admin', 'auth',
]], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('role', RoleController::class);
    Route::prefix('backend/category')->group(function () {
        Route::get('/', [CategoryController::class, 'Index'])->name('list.category');
        Route::get('create', [CategoryController::class, 'Create'])->name('add.category');
        Route::post('store', [CategoryController::class, 'Store'])->name('store.category');
        Route::get('{id}/edit', [CategoryController::class, 'Edit'])->name('edit.category');
        Route::post('update/{id}', [CategoryController::class, 'Update'])->name('update.category');
        Route::post('delete', [CategoryController::class, 'Delete'])->name('delete.category');
        Route::post('chage-status-category', [CategoryController::class, 'ChageStatusCategory'])->name('chage-status-category');
    });

    Route::prefix('backend/')->group(function () {
        Route::resource('video-category', 'App\Http\Controllers\backend\VideoCategoryController');
        Route::post('get-sub-category-list', [VideoCategoryController::class, 'GetSubCategoryList'])->name('get-sub-category-list');
        Route::post('change-status-video-category', [VideoCategoryController::class, 'ChangeStatusVideoCategory'])->name('change-status-video-category');
        Route::resource('subscriptions', 'App\Http\Controllers\backend\SubscriptionsController');
        Route::post('change-status-subscription', [SubscriptionsController::class, 'ChangeStatusSubscription'])->name('change-status-subscription');
        Route::resource('page', 'App\Http\Controllers\backend\PagesController');
        Route::resource('news-letter', 'App\Http\Controllers\backend\NewsletterController');
        Route::resource('information', 'App\Http\Controllers\backend\InformationController');
        Route::post('get-information', [InformationController::class, 'GetInformation'])->name('get.information');

        Route::resource('user', 'App\Http\Controllers\backend\UserController');
        Route::post('change-status-user', [UserController::class, 'ChangeStatusUser'])->name('change-status-user');
        Route::post('get-profilevideo', [UserController::class, 'GetProfileVideo'])->name('get.profilevideo');

        Route::resource('videos', VideoController::class);
        Route::post('change-status-video', [VideoController::class, 'ChangeStatusVideo'])->name('change-status-video');
        Route::resource('service', ServiceController::class);
        Route::resource('setting', ServiceController::class);

    });
});

Route::get('/home', [FrontendController::class, 'Home'])->name('front.home');
Route::get('/physio-bio', [FrontendController::class, 'PhysioBio'])->name('front.physio.bio');
Route::get('/physio', [FrontendController::class, 'Physio'])->name('front.physio');

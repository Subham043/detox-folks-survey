<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\OrderForm\OrderFormController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\Survey\SurveyController;


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

Route::get('/home', [DashboardController::class, 'index', 'as' => 'home'])->name('home');

Route::get('/', [SurveyController::class, 'create', 'as' => 'admin.image.create'])->name('image_create');
Route::post('/', [SurveyController::class, 'store', 'as' => 'admin.image.store'])->name('image_store');
Route::get('/order-form', [OrderFormController::class, 'create', 'as' => 'admin.order_form.create'])->name('order_form_create');
Route::post('/order-form', [OrderFormController::class, 'store', 'as' => 'admin.order_form.store'])->name('order_form_store');

Route::middleware(['guest'])->group(function () {

    Route::prefix('/admin')->group(function () {
        Route::get('/login', [LoginController::class, 'index', 'as' => 'admin.login'])->name('login');
        Route::post('/authenticate', [LoginController::class, 'authenticate', 'as' => 'admin.authenticate'])->name('authenticate');
        Route::get('/forgot-password', [ForgotPasswordController::class, 'index', 'as' => 'admin.forgot_password'])->name('forgotPassword');
        Route::post('/forgot-password', [ForgotPasswordController::class, 'requestForgotPassword', 'as' => 'admin.requestForgotPassword'])->name('requestForgotPassword');
        Route::get('/reset-password/{id}', [ResetPasswordController::class, 'index', 'as' => 'admin.reset_password'])->name('reset_password');
        Route::post('/reset-password/{id}', [ResetPasswordController::class, 'requestResetPassword', 'as' => 'admin.requestResetPassword'])->name('requestResetPassword');
    });

});

Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index', 'as' => 'admin.profile'])->name('profile');
        Route::post('/update', [ProfileController::class, 'update', 'as' => 'admin.profile_update'])->name('profile_update');
        Route::post('/profile-password-update', [ProfileController::class, 'profile_password', 'as' => 'admin.profile_password'])->name('profile_password_update');
    });

    Route::prefix('/user')->middleware(['admin'])->group(function () {
        Route::get('/', [UserController::class, 'view', 'as' => 'admin.subadmin.view'])->name('subadmin_view');
        Route::get('/view/{id}', [UserController::class, 'display', 'as' => 'admin.subadmin.display'])->name('subadmin_display');
        Route::get('/create', [UserController::class, 'create', 'as' => 'admin.subadmin.create'])->name('subadmin_create');
        Route::post('/create', [UserController::class, 'store', 'as' => 'admin.subadmin.store'])->name('subadmin_store');
        Route::get('/excel', [UserController::class, 'excel', 'as' => 'admin.subadmin.excel'])->name('subadmin_excel');
        Route::get('/edit/{id}', [UserController::class, 'edit', 'as' => 'admin.subadmin.edit'])->name('subadmin_edit');
        Route::post('/edit/{id}', [UserController::class, 'update', 'as' => 'admin.subadmin.update'])->name('subadmin_update');
        Route::get('/delete/{id}', [UserController::class, 'delete', 'as' => 'admin.subadmin.delete'])->name('subadmin_delete');
        Route::get('/make-previledge/{id}', [UserController::class, 'makeUserPreviledge', 'as' => 'admin.subadmin.makeUserPreviledge'])->name('subadmin_makeUserPreviledge');
    });

    Route::prefix('/survey')->group(function () {
        Route::get('/', [SurveyController::class, 'view', 'as' => 'admin.image.view'])->name('image_view');
        Route::get('/view/{id}', [SurveyController::class, 'display', 'as' => 'admin.image.display'])->name('image_display');
        Route::get('/excel', [SurveyController::class, 'excel', 'as' => 'admin.image.excel'])->name('image_excel');
        Route::get('/edit/{id}', [SurveyController::class, 'edit', 'as' => 'admin.image.edit'])->name('image_edit');
        Route::post('/edit/{id}', [SurveyController::class, 'update', 'as' => 'admin.image.update'])->name('image_update');
        Route::get('/delete/{id}', [SurveyController::class, 'delete', 'as' => 'admin.image.delete'])->name('image_delete');
        Route::get('/bulk-upload', [SurveyController::class, 'bulk_upload', 'as' => 'admin.image.bulk_upload'])->name('image_bulk_upload');
        Route::post('/bulk-upload', [SurveyController::class, 'bulk_upload_store', 'as' => 'admin.image.bulk_upload_store'])->name('image_bulk_upload_store');
        Route::prefix('/trash')->group(function () {
            Route::get('/', [SurveyController::class, 'viewTrash', 'as' => 'admin.image.viewTrash'])->name('image_view_trash');
            Route::get('/restore/{id}', [SurveyController::class, 'restoreTrash', 'as' => 'admin.image.restoreTrash'])->name('image_restore_trash');
            Route::get('/restore-all', [SurveyController::class, 'restoreAllTrash', 'as' => 'admin.image.restoreAllTrash'])->name('image_restore_all_trash');
            Route::get('/view/{id}', [SurveyController::class, 'displayTrash', 'as' => 'admin.image.displayTrash'])->name('image_display_trash');
            Route::get('/delete/{id}', [SurveyController::class, 'deleteTrash', 'as' => 'admin.image.deleteTrash'])->name('image_delete_trash');
        });

    });

    Route::prefix('/order-form')->group(function () {
        Route::get('/', [OrderFormController::class, 'view', 'as' => 'admin.order_form.view'])->name('order_form_view');
        Route::get('/view/{id}', [OrderFormController::class, 'display', 'as' => 'admin.order_form.display'])->name('order_form_display');
        Route::get('/excel', [OrderFormController::class, 'excel', 'as' => 'admin.order_form.excel'])->name('order_form_excel');
        Route::get('/edit/{id}', [OrderFormController::class, 'edit', 'as' => 'admin.order_form.edit'])->name('order_form_edit');
        Route::post('/edit/{id}', [OrderFormController::class, 'update', 'as' => 'admin.order_form.update'])->name('order_form_update');
        Route::get('/delete/{id}', [OrderFormController::class, 'delete', 'as' => 'admin.order_form.delete'])->name('order_form_delete');
        Route::get('/bulk-upload', [OrderFormController::class, 'bulk_upload', 'as' => 'admin.order_form.bulk_upload'])->name('order_form_bulk_upload');
        Route::post('/bulk-upload', [OrderFormController::class, 'bulk_upload_store', 'as' => 'admin.order_form.bulk_upload_store'])->name('order_form_bulk_upload_store');
        Route::prefix('/trash')->group(function () {
            Route::get('/', [OrderFormController::class, 'viewTrash', 'as' => 'admin.order_form.viewTrash'])->name('order_form_view_trash');
            Route::get('/restore/{id}', [OrderFormController::class, 'restoreTrash', 'as' => 'admin.order_form.restoreTrash'])->name('order_form_restore_trash');
            Route::get('/restore-all', [OrderFormController::class, 'restoreAllTrash', 'as' => 'admin.order_form.restoreAllTrash'])->name('order_form_restore_all_trash');
            Route::get('/view/{id}', [OrderFormController::class, 'displayTrash', 'as' => 'admin.order_form.displayTrash'])->name('order_form_display_trash');
            Route::get('/delete/{id}', [OrderFormController::class, 'deleteTrash', 'as' => 'admin.order_form.deleteTrash'])->name('order_form_delete_trash');
        });

    });

    Route::get('/logout', [LogoutController::class, 'logout', 'as' => 'admin.logout'])->name('logout');
});

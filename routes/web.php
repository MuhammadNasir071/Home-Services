<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;



Route::get('/', [FrontendController::class, 'index'])->name('home');

Auth::routes();
Route::group(['prefix' => 'dashboard', 'middleware' => 'admin'], function () { 
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
});



// last footer route 
Route::get('/aboutUs', [FrontendController::class, 'aboutUs'])->name('about_us');
Route::get('/contactUs', [FrontendController::class, 'contactUs'])->name('contact');
Route::get('/faq', [FrontendController::class, 'faqs'])->name('faq');
Route::get('/termsOfUse', [FrontendController::class, 'termAndConditions'])->name('terms_conditions');
Route::get('/privacy_policy', [FrontendController::class, 'privacy_policy'])->name('privacy_policy');


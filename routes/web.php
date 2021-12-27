<?php

use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminSliderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.index');

Route::get('/faqs', [AdminFaqController::class, 'index'])->name('faqs');
Route::get('/faq/create', [AdminFaqController::class, 'create'])->name('faq.create');
Route::post('/faq/store', [AdminFaqController::class, 'store'])->name('faq.store');
Route::delete('/faq/delete', [AdminFaqController::class, 'delete'])->name('faq.delete');
Route::get('/faq/edit/{faqId}', [AdminFaqController::class, 'edit'])->name('faq.edit');
Route::put('faq/update', [AdminFaqController::class, 'update'])->name('faq.update');

// Slider Routes

Route::get('/slider/create', [AdminSliderController::class, 'create'])->name('slider.create');
Route::post('slider/store', [AdminSliderController::class, 'store'])->name('slider.store');

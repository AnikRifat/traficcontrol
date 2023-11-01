<?php
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use TCG\Voyager\Facades\Voyager;



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


Voyager::routes();



Route::get('/reports', [ReportController::class, 'index'])->name('voyager.reports.index')->middleware('auth');
Route::post('/payment', [PaymentController::class, 'pay'])->name('voyager.payment')->middleware('auth');
Route::get('payment/success/{id}', [PaymentController::class, 'success'])->name('voyager.payment.success')->middleware('auth');
Route::get('payment/cancel/{id}', [PaymentController::class, 'cancel'])->name('voyager.payment.error')->middleware('auth');
Route::get('/driver/register', [ProfileController::class, 'register']);
Route::post('/driver/store', [ProfileController::class, 'store'])->name('driver.store');




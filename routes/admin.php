<?php
use App\Http\Controllers\PaymentController;
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



Route::get('/reports', [ReportController::class, 'index'])->name('voyager.reports.index');
Route::post('/payment', [PaymentController::class, 'pay'])->name('voyager.payment');
Route::get('payment/success', [PaymentController::class, 'success'])->name('voyager.payment.success');
Route::get('payment/cancel', [PaymentController::class, 'cancel'])->name('voyager.payment.error');





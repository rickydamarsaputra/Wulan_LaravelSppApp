<?php

use Illuminate\Support\Facades\Route;
use App\Payment;

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
    return view('welcome');
});

// Authentication
Route::prefix('auth')->group(function () {
    Route::view('/login', 'auth.login')->name('view.login');
    Route::view('/register', 'auth.register')->name('view.register');
    Route::delete('/banned/{id}', 'Auth\AuthController@bannedUser')->name('action.banned');
    Route::post('/logout', 'Auth\AuthController@logoutUser')->name('action.logout');
    Route::post('/register', 'Auth\AuthController@createUser')->name('action.register');
    Route::post('/login', 'Auth\AuthController@loginUser')->name('action.login');
});

// Dashboard
Route::prefix('dashboard')->group(function () {
    Route::get('/', 'Dashboard\DashboardController@dashboard')->name('view.dashboard');
    // Class Prefix
    Route::prefix('class')->group(function () {
        Route::get('/', 'Dashboard\ClassController@manageClass')->name('view.manageclass');
        Route::view('/create', 'dashboard.createclass')->name('view.createclass');
        Route::post('/create', 'Dashboard\ClassController@createClass')->name('action.createclass');
        Route::delete('/banned/{id}', 'Dashboard\ClassController@bannedClass')->name('action.bannedclass');
        Route::get('/change/{id}', 'Dashboard\ClassController@changeClassView')->name('view.changeclass');
        Route::put('/change/{id}', 'Dashboard\ClassController@changeClassAction')->name('action.changeclass');
        Route::get('/{id}', 'Dashboard\ClassController@studentOnClass')->name('view.studentonclass');
    });
    // Spp Prefix
    Route::prefix('spp')->group(function () {
        Route::get('/', 'Dashboard\SppController@manageSpp')->name('view.managespp');
        Route::view('/create', 'dashboard.createspp')->name('view.createspp');
        Route::post('/create', 'Dashboard\SppController@createSpp')->name('action.createspp');
        Route::delete('/banned/{id}', 'Dashboard\SppController@bannedSpp')->name('action.bannedspp');
        Route::get('/change/{id}', 'Dashboard\SppController@changeSppView')->name('view.changespp');
        Route::put('/change/{id}', 'Dashboard\SppController@changeSppAction')->name('action.changespp');
    });
    // Student Prefix
    Route::prefix('student')->group(function () {
        Route::get('/', 'Dashboard\StudentController@manageStudent')->name('view.managestudent');
        Route::get('/create', 'Dashboard\StudentController@createStudentView')->name('view.createstudent');
        Route::post('/create', 'Dashboard\StudentController@createStudentAction')->name('action.createstudent');
        Route::delete('/banned/{id}', 'Dashboard\StudentController@bannedStudent')->name('action.bannedstudent');
        Route::get('/change/{id}', 'Dashboard\StudentController@changeStudentView')->name('view.changestudent');
        Route::put('/change/{id}', 'Dashboard\StudentController@changeStudentAction')->name('action.changestudent');
        Route::get('/{id}', 'Dashboard\StudentController@studentInfo')->name('view.studentinfo');
    });
    // Payment Prefix
    Route::prefix('payment')->group(function () {
        Route::get('/', 'Dashboard\PaymentController@manageHistory')->name('view.managehistory');
        Route::get('/history/{id}', 'Dashboard\PaymentController@detailHistory')->name('view.detailhistory');
        Route::get('/history/detail/{id}', 'Dashboard\PaymentController@paymentDetailHistory')->name('view.paymentdetailhistory');
        Route::post('/report/{id}', function ($id) {
            $paymentOwned = Payment::withTrashed()->find($id);
            $studentReport = PDF::loadView('components.studentpaymentreport', ['paymentOwned' => $paymentOwned])->setPaper('a5', 'landscape');
            return $studentReport->stream();
        })->name('report.patment');
        Route::delete('/{id}', 'Dashboard\PaymentController@clearPayment')->name('action.clearpayment');
        Route::post('/create', 'Dashboard\PaymentController@createPayment')->name('action.createpayment');
        Route::delete('payment/spp/{id}', 'Dashboard\PaymentController@deletePaymentDetail')->name('action.deletepaymentdetail');
    });
});

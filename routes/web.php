<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Home (after login)
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Company Routes
|--------------------------------------------------------------------------
*/
Route::prefix('company')->name('company.')->group(function () {

    Route::get('/dashboard', [CompanyController::class, 'index'])->name('index');

    Route::get('/create-job', [CompanyController::class, 'createJob'])->name('createJob');

    Route::get('/my-jobs', [CompanyController::class, 'myJobs'])->name('myJobs');

    Route::get('/candidates', [CompanyController::class, 'candidates'])->name('candidates');

    Route::get('/pricing', [CompanyController::class, 'pricing'])->name('pricing');

    Route::get('/pricing-payment', [CompanyController::class, 'pricePlanPayment'])->name('pricePlanPayment');

    Route::get('/terms-Condition', [CompanyController::class, 'termsCondition'])->name('termsCondition');

    Route::get('/refound-policy', [CompanyController::class, 'refoundPolicy'])->name('refoundPolicy');

    Route::get('/privacy-policy', [CompanyController::class, 'privacyPolicy'])->name('privacyPolicy');

    Route::get('/faq', [CompanyController::class, 'faq'])->name('faq');

    Route::get('/view-application',[CompanyController::class,'applicationView'])->name('applicationView');

    Route::get('/promote-job',[CompanyController::class,'promoteJob'])->name('promoteJob');

    Route::get('/view-details',[CompanyController::class,'viewDetails'])->name('viewDetails');
});

/*
|--------------------------------------------------------------------------
| Dashboard Routes (User)
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    // Route::get('/try', [DashboardController::class, 'index'])->name('index');

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');

    Route::get('/new-setting',[DashboardController::class,'newSettings'])->name('newSettings');

    Route::get('/saved-candidates', [DashboardController::class, 'savedCandidates'])->name('savedCandidates');

    Route::get('/billing', [DashboardController::class, 'billing'])->name('billing');

    Route::get('/verify-account', [DashboardController::class, 'verifyAccount'])->name('verifyAccount');

    Route::get('/messenger', [DashboardController::class, 'messenger'])->name('messenger');

    Route::get('/custom-question', [DashboardController::class, 'customQuestion'])->name('customQuestion');
    
    Route::get('/invoice', [DashboardController::class, 'invoice'])->name('invoice');

    Route::get('/category',[DashboardController::class,'createCategory'])->name('createCategory');
});

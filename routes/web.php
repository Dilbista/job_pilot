<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/candidate/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('candidate')->group(function () {
    Route::get('/', [CandidateController::class, 'index'])->name('candidate.index');
    Route::get('/appliedjobs', [CandidateController::class, 'appliedJobs'])->name('candidate.appliedjobs');
    Route::get('/favoritejob', [CandidateController::class, 'favorites'])->name('candidate.favoritejob');
    Route::get('/jobalert', [CandidateController::class, 'jobalert'])->name('candidate.jobalert');
    Route::get('/messenger', [CandidateController::class, 'messenger'])->name('candidate.messenger');
    Route::get('/billing', [CandidateController::class, 'billing'])->name('candidate.billing');
    Route::get('/settings', [CandidateController::class, 'settings'])->name('candidate.settings');
    Route::get('/dashboard', [CandidateController::class, 'dashboard'])->name('candidate.dashboard');
    Route::get('/companies', [CandidateController::class, 'companies'])->name('candidate.companies');
    Route::get('/findjob', [CandidateController::class, 'findjob'])->name('candidate.findjob');
});
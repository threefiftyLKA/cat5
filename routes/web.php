<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/fuel-report', function () {
    return view('fuel-report');
});

Route::get('/generator-deploy', function () {
    return view('generator-deploy');
});

Route::get('/generator-recovery', function () {
    return view('generator-recovery');
});

Route::get('/generator-swap', function () {
    return view('generator-swap');
});

Route::get('/pw-complete', function () {
    return view('pw-complete');
});

Route::get('/site-recon', function () {
    return view('site-recon');
});

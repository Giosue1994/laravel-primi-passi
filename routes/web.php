<?php

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
    return view('pages.boolean');
})->name('boolean');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy');

Route::get('/faq', function () {

    $faqs_left = config('faqs.faqs_left');
    $faqs_right = config('faqs.faqs_right');

    return view('pages.faqs', [
      'faqs_list_left' => $faqs_left,
      'faqs_list_right' => $faqs_right,
    ]);
})->name('faq');

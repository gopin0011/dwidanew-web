<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('pages.home');
})->name('app.home');

Route::get('about', function () {
    return view('pages.about');
})->name('app.about');

Route::get('visi', function () {
    return view('pages.visi');
})->name('app.visi');

Route::get('misi', function () {
    return view('pages.misi');
})->name('app.misi');

Route::get('product', function () {
    return view('pages.product');
})->name('app.product');

Route::get('factory', function () {
    return view('pages.factory');
})->name('app.factory');

Route::get('contact', function () {
    return view('pages.contact');
})->name('app.contact');

Route::get('career', function () {
    return view('pages.career');
})->name('app.career');

Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('APIkey');
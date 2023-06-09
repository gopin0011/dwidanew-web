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

define('furniture', 'FURNITURE AND INTERIOR');
define('equipment', 'EQUIPMENTS');

Route::get('/', function () {
    return view('layouts.home');
})->name('app.home');

Route::get('/home-old', function () {
    return view('pages.home');
});
// ->name('app.home')

Route::get('about', function () {
    return view('pages.about');
})->name('app.about');

Route::get('visi', function () {
    return view('pages.visi');
})->name('app.visi');

Route::get('misi', function () {
    return view('pages.misi');
})->name('app.misi');

Route::get('brand/{catId?}', function (Request $request, $catId = 1) {
    $category = \App\Models\Category::get();
    $categoryProduct = \App\Models\Category::where('id', $catId)->with(['product.image.media'])->first();

    // dd($categoryProduct->product[0]->image[0]);
    return view('pages.product', [
        'category' => $category, 
        'categoryProduct' => $categoryProduct,
    ]);
})->name('app.product');

Route::get('our-works/{type?}/{brand?}', function (Request $request, $type = 1, $brand = 1) {
    $brands = [];
    $type_char = furniture;
    $srcImage = asset('public/images/furniture.jpg');

    if($type == 1) {
        $brands = \App\Models\Category::where('is_furniture', 1)->orderBy('sort', 'asc')->get();
    }
    else {
        $brands = \App\Models\Category::where('is_equipment', 1)->orderBy('sort', 'asc')->get();
        $type_char = equipment;
        $srcImage = asset('public/images/equipment.jpg');
    }

    // dd($brands);
    // $category = \App\Models\Category::get();
    $categoryProduct = \App\Models\Category::where('id', $brand)->with(['product.image.media'])->first();

    // dd($categoryProduct->product[0]->image[0]);
    return view('pages.product-work', [
        'type' => $type,
        'brands' => $brands,
        'type_char' => $type_char,
        'categoryProduct' => $categoryProduct,
        'srcImage' => $srcImage, 
    ]);
})->name('app.work');

Route::get('product/{productId?}/detail', function (Request $request, $productId = 1) {
    $product = \App\Models\Product::with(['image.media','related' => function ($query) use ($productId) {
        $query->whereNotIn('product.id', [$productId]);
    }])->find($productId);

    // dd($product);
    return view('pages.detail', [
        'product' => $product, 
    ]);
})->name('app.product.detail');

Route::get('factory', function () {
    return view('pages.factory');
})->name('app.factory');

Route::get('contact', function () {
    return view('pages.contact');
})->name('app.contact');

Route::get('career', function () {
    return view('pages.career');
})->name('app.career');

Route::get('scrap', [\App\Http\Controllers\Controller::class, 'scrap'])->name('app.scrap');

Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('APIkey');
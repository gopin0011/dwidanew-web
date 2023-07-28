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

define('furniture', trans('messages.landing.our_works.furniture.home')); 
define('equipment', trans('messages.landing.our_works.equipment.home'));

// $langprefix = "/";
// // dd(activelang());
// if (activelang() == "EN") {
//     $langprefix = "/en/";
// }

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('app.home');

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
    $type_char = trans('messages.landing.our_works.furniture.home');
    
    $desc = trans('messages.landing.our_works.furniture.desc'); //"Since the last few years, we have been committed to specializing in various works and furniture products, including design, development, and installation, both for commercial and residential spaces, as well as various mass-produced furniture for today's various industries such as hospitality, education , and health care.";
    $srcImage = asset('public/images/furniture.jpg');

    if($type == 1) {
        $brands = \App\Models\Category::where('is_furniture', 1)->orderBy('sort', 'asc')->get();
    }
    else {
        $brands = \App\Models\Category::where('is_equipment', 1)->orderBy('sort', 'asc')->get();
        $type_char = trans('messages.landing.our_works.equipment.home');
        $desc = trans('messages.landing.our_works.equipment.desc'); //"Since 2006 we have been close with metal and plastic materials, which has allowed us to be creative in making various kinds of products, including accessories for automotive, household, medical devices, as well as educational aids, and special mass-produced machines for various industries.";
        $srcImage = asset('public/images/equipment.jpg');
    }

    // dd($brands);
    // $category = \App\Models\Category::get();
    $categoryProduct = \App\Models\Category::where('id', $brand)->with(['product.image.media'])->first();

    // dd($categoryProduct);
    return view('pages.product-work', [
        'type' => $type,
        'brands' => $brands,
        'type_char' => $type_char,
        'desc' => $desc,
        'categoryProduct' => $categoryProduct,
        'srcImage' => $srcImage, 
    ]);
})->name('app.work');


Route::get('projects/{type?}', function (Request $request, $type = 1) {
    $srcImage = asset('public/images/furniture.jpg');
    $type_char = 'Office Space';
    $chunk = 4;

    if ($type == 2) {
        $type_char = 'Hall';
        $chunk = 1;
    }

    else if ($type == 3) {
        $type_char = 'Residential';
        $chunk = 2;
    }

    else if ($type == 4) {
        $type_char = 'Hospitality';
        $chunk = 4;
    }

    else if ($type == 5) {
        $type_char = 'Public Space';
        $chunk = 1;
    }

    else if ($type == 6) {
        $type_char = 'University';
        $chunk = 6;
    }

    $projects = \App\Models\Project::where('id', $type)->with(['image.media'])->get();

    // dd($projects);
    return view('pages.projects.details', [
        'srcImage' => $srcImage,
        'type_char' => $type_char,
        'projects' => $projects[0],
        'chunk' => $chunk,
    ]);
})->name('app.projects');

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

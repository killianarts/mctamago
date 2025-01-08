<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminNourishmentController;
use App\Http\Controllers\AdminPostController;


Route::controller(AdminNourishmentController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::match(['get', 'post'], '/nourishment/{nourishment}/update', 'update')->name('nourishment.update');
    Route::match(['get', 'post'], '/nourishment/create', 'create')->name('nourishment.create');
    Route::match(['get', 'post'], '/nourishment/', 'list')->name('nourishment.list');
});

Route::controller(AdminPostController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::match(['get', 'post'], '/post/{post}/update', 'update')->name('post.update');
    Route::match(['get', 'post'], '/post/create', 'create')->name('post.create');
    Route::match(['get', 'post'], '/post/', 'list')->name('post.list');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home_page')->name('home_page');
    Route::get('/about-us', 'about_us_page')->name('about_us_page');
    Route::get('/menu', 'menu_page')->name('menu_page');
    Route::get('/news', 'news_page')->name('news_page');
    Route::get('/mobile-app', 'mobile_app_page')->name('mobile_app_page');
});

Route::get('/show-messages', function () {
    return view('messages');
});

// Route::get('/images/nourishment/{filename}', function ($filename) {
//     $path = storage_path('app/images/nourishment/' . $filename); // Adjust the path if your file is in a subdirectory like 'images'

//     if (!File::exists($path)) {
//         abort(404);
//     }

//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);

//     return $response;
// }
// )->where('filename', '.*');

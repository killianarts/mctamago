<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminNourishmentController;

Route::controller(AdminNourishmentController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::match(['get', 'post'], '/nourishment/{nourishment}/update', 'update')->name('nourishment.update');
    Route::match(['get', 'post'], '/nourishment/create', 'create')->name('nourishment.create');
    Route::match(['get', 'post'], '/nourishment/', 'list')->name('nourishment.list');
});

// Route::get('/', [HomeController::class, 'show']);
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

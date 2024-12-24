<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminNourishmentController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/nourishment/create', [AdminNourishmentController::class, 'create'])->name('nourishment.create');
    Route::get('/nourishment/{nourishment}', [AdminNourishmentController::class, 'show'])->name('nourishment.show');
    Route::delete('/nourishment/{nourishment}', [AdminNourishmentController::class, 'destroy'])->name('nourishment.destroy');
    Route::match(['put', 'patch', 'post'],
                 '/nourishment/{nourishment}/update', [AdminNourishmentController::class, 'update'])->name('nourishment.update');
    Route::match(['get', 'head', 'put', 'patch', 'post'],
                 '/nourishment/{nourishment}/edit', [AdminNourishmentController::class, 'edit'])->name('nourishment.edit');
    Route::get('/nourishment/', [AdminNourishmentController::class, 'index'])->name('nourishment.index');
    Route::post('/nourishment/store', [AdminNourishmentController::class, 'store'])->name('nourishment.store');
    // Route::resource('nourishment', AdminNourishmentController::class);
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

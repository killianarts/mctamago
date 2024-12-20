<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminNourishmentController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('nourishment', AdminNourishmentController::class);
});

// Route::get('/', [HomeController::class, 'show']);
// Route::get('/nourishment/{nourishment_id}', [NourishmentController::class, 'show'])->where('nourishment_id', '[0-9]+')->name('nourishment.show');
// Route::put('/nourishment/{nourishment_id}', [NourishmentController::class, 'update'])->where('nourishment_id', '[0-9]+')->name('nourishment.update');
// Route::delete('/nourishment/{nourishment_id}', [NourishmentController::class, 'destroy'])->where('nourishment_id', '[0-9]+')->name('nourishment.destroy');
// Route::get('/nourishment/list', [NourishmentController::class, 'list'])->name('nourishment.list');
// Route::get('/nourishment/create', [NourishmentController::class, 'create'])->name('nourishment.create');
// Route::post('/nourishment/store', [NourishmentController::class, 'store'])->name('nourishment.store');
Route::get('/show-messages', function () {
    return view('messages');
});

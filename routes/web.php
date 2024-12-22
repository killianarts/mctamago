<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminNourishmentController;

Route::prefix('admin')->name('admin.')->group(function () {
    // Route::get('/nourishment/{nourishment}', [AdminNourishmentController::class, 'show'])->name('nourishment.show');
    // Route::match(['put', 'patch'], '/nourishment/{nourishment}/update', [AdminNourishmentController::class, 'update'])->name('nourishment.update');
    // Route::match(['get', 'head'], '/nourishment/{nourishment}/edit', [AdminNourishmentController::class, 'edit'])->name('nourishment.edit');
    // Route::delete('/nourishment/{nourishment}', [AdminNourishmentController::class, 'destroy'])->name('nourishment.destroy');
    // Route::get('/nourishment/', [AdminNourishmentController::class, 'index'])->name('nourishment.list');
    // Route::get('/nourishment/create', [AdminNourishmentController::class, 'create'])->name('nourishment.create');
    // Route::post('/nourishment/store', [AdminNourishmentController::class, 'store'])->name('nourishment.store');
    Route::resource('nourishment', AdminNourishmentController::class);
});

// Route::get('/', [HomeController::class, 'show']);
Route::get('/show-messages', function () {
    return view('messages');
});

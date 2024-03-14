<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontController::class,'index'])->name('front.index');
Route::get('/details',[FrontController::class,'details'])->name('front.details');
Route::get('/book',[FrontController::class,'book'])->name('front.book');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::resource('projects', ProjectController::class);
        Route::resource('tools', ToolController::class);
        
    });


});

require __DIR__.'/auth.php';

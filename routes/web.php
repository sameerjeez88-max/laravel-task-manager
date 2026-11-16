<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController; // TaskController import kiya
use Illuminate\Support\Facades\Route;

// Root URL par jane par seedha tasks par bhej dein
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Dashboard (Breeze ka default)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Login hone ke baad yeh routes kaam karenge
Route::middleware('auth')->group(function () {
    // Profile routes (Breeze ke)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Task Manager ke routes
    Route::resource('tasks', TaskController::class);
});

require __DIR__.'/auth.php';
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', 'role:admin,customer'])->name('dashboard');


Route::middleware('auth', 'role:admin, customer, employee')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    Route::resource('admin/products', ProductController::class)->only([
        'destroy', 'show', 'store', 'update', 'edit', 'index', 'create',]);

    Route::resource('admin/notifications', NotificationController::class)->only([
        'destroy', 'show', 'store', 'update', 'edit', 'index', 'create',]);

    Route::resource('admin/announcements', AnnouncementController::class)->only([
        'destroy', 'show', 'store', 'update', 'edit', 'index', 'create',]);

    Route::resource('admin/packages', PackageController::class)->only([
        'destroy', 'show', 'store', 'update', 'edit', 'index', 'create',]);
    
});



require __DIR__.'/auth.php';

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/customerregister', [MobileController::class, 'customerregister']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/profile/{id}', [MobileController::class, 'getProfile']);
    Route::get('/deceasedList/{id}', [MobileController::class, 'deceasedList']);
    Route::post('/addDeceased', [MobileController::class, 'addDeceased']);
    Route::get('/productsList', [MobileController::class, 'productsList']);
    Route::get('/CasketproductsList', [MobileController::class, 'CasketproductsList']);
    Route::get('/DressingproductsList', [MobileController::class, 'DressingproductsList']);
    Route::get('/FlowerproductsList', [MobileController::class, 'FlowerproductsList']);
    Route::get('/UrnproductsList', [MobileController::class, 'UrnproductsList']);
    Route::get('/announcementsList', [MobileController::class, 'announcementsList']);
    Route::get('/notificationsList', [MobileController::class, 'notificationsList']);
    Route::get('/packagesList', [MobileController::class, 'packagesList']);
    Route::get('/EmbalmingpackagesList', [MobileController::class, 'EmbalmingpackagesList']);
    Route::get('/CremationpackagesList', [MobileController::class, 'CremationpackagesList']);
    Route::get('/AllinpackagesList', [MobileController::class, 'AllinpackagesList']);
    Route::get('/productInfo/{id}', [MobileController::class, 'productInfo']);
    Route::get('/packageInfo/{id}', [MobileController::class, 'packageInfo']);
});
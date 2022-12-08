<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\SliderController;
use App\Http\Controllers\Catalog\ProductController;
use App\Http\Controllers\Catalog\CategoryController;
use App\Http\Controllers\Catalog\ManufacturerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('slider', [SliderController::class, 'index']);

Route::get('product/{id}', [ProductController::class, 'show'])->name('product');

Route::get('category/{id}', [CategoryController::class, 'show'])->name('category');

Route::get('manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');

Route::get('manufacturer/{id}', [ManufacturerController::class, 'show'])->name('manufacturer.show');
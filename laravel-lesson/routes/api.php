<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceDetailController;
use App\Http\Controllers\ProductBrandController;
use App\Http\Controllers\ProductRepairController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TypeRepairController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// for postman

Route::get('/role', [RoleController::class, 'index']); // http://127.0.0.1:8000/api/role (url in postman)
Route::post('/role', [RoleController::class, 'store']);
Route::get('/role/{id}', [RoleController::class, 'show']);
Route::patch('/role/{id}', [RoleController::class, 'update']);
Route::delete('/role/{id}', [RoleController::class, 'destroy']);

Route::get('/order', [OrderController::class, 'index']);
Route::post('/order', [OrderController::class, 'store']);
Route::get('/order/{id}', [OrderController::class, 'show']);
Route::patch('/order/{id}', [OrderController::class, 'update']);
Route::delete('/order/{id}', [OrderController::class, 'destroy']);

Route::get('/message', [MessageController::class, 'index']);
Route::post('/message', [MessageController::class, 'store']);
Route::get('/message/{id}', [MessageController::class, 'show']);
Route::patch('/message/{id}', [MessageController::class, 'update']);
Route::delete('/message/{id}', [MessageController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::get('/category/by-name/{name}', [CategoryController::class, 'showByName']);
Route::patch('/category/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

Route::get('/status', [StatusController::class, 'index']);
Route::post('/status', [StatusController::class, 'store']);
Route::get('/status/{id}', [StatusController::class, 'show']);
Route::patch('/status/{id}', [StatusController::class, 'update']);
Route::delete('/status/{id}', [StatusController::class, 'destroy']);

Route::get('/price_detail', [PriceDetailController::class, 'index']);
Route::post('/price_detail', [PriceDetailController::class, 'store']);
Route::get('/price_detail/{id}', [PriceDetailController::class, 'show']);
Route::get('/price_detail/by-name/{name}', [PriceDetailController::class, 'showByName']);
Route::patch('/price_detail/{id}', [PriceDetailController::class, 'update']);
Route::delete('/price_detail/{id}', [PriceDetailController::class, 'destroy']);

Route::get('/product_repair', [ProductRepairController::class, 'index']);
Route::post('/product_repair', [ProductRepairController::class, 'store']);
Route::get('/product_repair/{id}', [ProductRepairController::class, 'show']);
Route::get('/product_repair/by-name/{detail}', [ProductRepairController::class, 'showByName']);
Route::patch('/product_repair/{id}', [ProductRepairController::class, 'update']);
Route::delete('/product_repair/{id}', [ProductRepairController::class, 'destroy']);

Route::get('/product_brand', [ProductBrandController::class, 'index']);
Route::post('/product_brand', [ProductBrandController::class, 'store']);
Route::get('/product_brand/{id}', [ProductBrandController::class, 'show']);
Route::get('/product_brand/by-name/{name}', [ProductBrandController::class, 'showByName']);
Route::patch('/product_brand/{id}', [ProductBrandController::class, 'update']);
Route::delete('/product_brand/{id}', [ProductBrandController::class, 'destroy']);

Route::get('/type_repair', [TypeRepairController::class, 'index']);
Route::post('/type_repair', [TypeRepairController::class, 'store']);
Route::get('/type_repair/{id}', [TypeRepairController::class, 'show']);
Route::get('/type_repair/by-name/{name}', [TypeRepairController::class, 'showByName']);
Route::patch('/type_repair/{id}', [TypeRepairController::class, 'update']);
Route::delete('/type_repair/{id}', [TypeRepairController::class, 'destroy']);

Route::get('/feedback', [FeedbackController::class, 'index']);
Route::post('/feedback', [FeedbackController::class, 'store']);
Route::get('/feedback/{id}', [FeedbackController::class, 'show']);
Route::patch('/feedback/{id}', [FeedbackController::class, 'update']);
Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnitConversionController;
use Illuminate\Support\Facades\Route;

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

// Type
Route::post('type', [TypeController::class, 'registerNewType']);
Route::get('types', [TypeController::class, 'getAllTypes']);

// Product
Route::post('product', [ProductController::class, 'registerNewProduct']);
Route::get('products', [ProductController::class, 'getAllProducts']);

// Unit
Route::post('unit', [UnitController::class, 'registerNewUnit']);
Route::get('units', [UnitController::class, 'getAllUnits']);

// Unit Conversion
Route::get('convertunit', [UnitConversionController::class, 'convertUnit']);

// Product Details
Route::post('productdetails', [ProductDetailsController::class, 'registerNewProductDetails']);
Route::get('productsdetails', [ProductDetailsController::class, 'getAllProductsDetails']);

Route::get('productdetailsquantity/{productId}/{unitId}', [ProductDetailsController::class, 'getProductQuantityInSpecificUnit']);

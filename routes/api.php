<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Supplier\SupplierController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Sale\SaleController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// **-- API ROUTES FOR REGISTER/AUTHENTICATION --**
//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
    
});

// **-- API ROUTES FOR REGISTER/AUTHENTICATION --**


Route::middleware('auth:sanctum')->group( function () {
    //**-- API ROUTES FOR CLIENTS --**
        Route::get('client', [ClientController::class, 'index']);
        Route::get('client/{cpf}', [ClientController::class, 'show']);
        Route::post('client', [ClientController::class, 'store']);
        Route::put('client/{cpf}', [ClientController::class, 'update']);
        Route::delete('client/{cpf}', [ClientController::class,'destroy']);
    // **-- API ROUTES FOR CLIENTS --**

    //**-- API ROUTES FOR CLIENTS --**
        Route::get('client', [ClientController::class, 'index']);
        Route::get('client/{cpf}', [ClientController::class, 'show']);
        Route::post('client', [ClientController::class, 'store']);
        Route::put('client/{cpf}', [ClientController::class, 'update']);
        Route::delete('client/{cpf}', [ClientController::class,'destroy']);
    // **-- API ROUTES FOR CLIENTS --**

    //**-- API ROUTES FOR SUPPLIERS --**
        Route::get('supplier', [SupplierController::class, 'index']);
        Route::get('supplier/{cnpj}', [SupplierController::class, 'show']);
        Route::post('supplier', [SupplierController::class, 'store']);
        Route::put('supplier/{cnpj}', [SupplierController::class, 'update']);
        Route::delete('supplier/{cnpj}', [SupplierController::class,'destroy']);
    // **-- API ROUTES FOR SUPPLIERS --**

    //**-- API ROUTES FOR PRODUCTS --**
        Route::get('product', [ProductController::class, 'index']);
        Route::get('product/{bar_code}', [ProductController::class, 'show']);
        Route::post('product', [ProductController::class, 'store']);
        Route::put('product/{bar_code}', [ProductController::class, 'update']);
        Route::delete('product/{bar_code}', [ProductController::class,'destroy']);
    // **-- API ROUTES FOR PRODUCTS --**

    //**-- API ROUTES FOR SALES --**
        Route::get('sale', [SaleController::class, 'index']);
        Route::get('sale/{cpf}', [SaleController::class, 'show']);
        Route::post('sale', [SaleController::class, 'store']);
        Route::put('sale/{cpf}', [SaleController::class, 'update']);
        Route::delete('sale/{cpf}', [SaleController::class,'destroy']);
    // **-- API ROUTES FOR SALES --**
});

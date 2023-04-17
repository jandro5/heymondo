<?php

/*
|--------------------------------------------------------------------------
| Service - API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Services\Ecommerce\Http\Controllers\ItemController;
use App\Services\Ecommerce\Http\Controllers\OrderController;
use App\Services\Ecommerce\Http\Controllers\ShopController;
use App\Services\Ecommerce\Http\Controllers\SupplierController;

// Prefix: /api/ecommerce
Route::group(['prefix' => 'ecommerce'], function () {

    // Prefix: /api/ecommerce/suppliers
    Route::group(['prefix' => 'suppliers'], function () {
        Route::get('/list', [SupplierController::class, 'list'])->name('ecommerce.suppliers.list');
        Route::post('/store', [SupplierController::class, 'store'])->name('ecommerce.suppliers.store');
        Route::put('/{id}', [SupplierController::class, 'update'])->name('ecommerce.suppliers.update');
        Route::delete('/{id}', [SupplierController::class, 'destroy'])->name('ecommerce.suppliers.destroy');
    });
    
    // Prefix: /api/ecommerce/orders
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/list_users', [OrderController::class, 'listUsersHighestPurchases']);
        Route::get('/list_orders/{id?}', [OrderController::class, 'listOrders']);
    });
    
    // Prefix: /api/ecommerce/items
    Route::group(['prefix' => 'items'], function () {
        Route::get('/list_by_shop/{id?}', [ItemController::class, 'listItemsByShop']);
        Route::get('/list_by_supplier/{id}', [ItemController::class, 'listItemsBySupplier']);
    });

    // Prefix: /api/ecommerce/shops
    Route::group(['prefix' => 'shops'], function () {
        Route::get('/list_items', [ShopController::class, 'listShopsHighestSales']);
    });
});

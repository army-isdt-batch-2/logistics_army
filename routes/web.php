<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [
    App\Http\Controllers\LogisticsController::class,
    'index'
]);

Route::get('/returns', [
    App\Http\Controllers\LogisticsController::class,
    'returns'
]);







Route::get('/deliveries', [
    App\Http\Controllers\DeliveriesController::class,
    'deliveries'
]);

Route::get('/create.form.deliveries', [
    App\Http\Controllers\DeliveriesController::class,
    'create_deliveries'

]);








Route::get('/transportation', [
    App\Http\Controllers\TransportationController::class,
    'transportation'
]);


Route::get('/create.form.transportaion', [
    App\Http\Controllers\TransportationController::class,
    'create_transportation'

]);





Route::get('/distribution', [
    App\Http\Controllers\DistributionController::class,
    'distribution'
]);






Route::get('/assets', [
    App\Http\Controllers\AssetController::class,
    'assets'
]);





Route::get('/storage', [
    App\Http\Controllers\StorageController::class,
    'storage'
]);

Route::get('/storage', [
    App\Http\Controllers\StorageController::class,
    'storage'
]);







Route::get('/create.form.returns', [
    App\Http\Controllers\LogisticsController::class,
    'create_returns'
])->name('create');


Route::post('/create/save',[
    App\Http\Controllers\LogisticsController::class,
    'save'
])->name('create.save');










Route::get('/supplier', [
    App\Http\Controllers\SupplierController::class,
    'supplier'
]);

Route::get('/create.form.supplier', [
    App\Http\Controllers\SupplierController::class,
    'create_supplier'
]);

Route::post('/supplier/save', [
    App\Http\Controllers\SupplierController::class,
    'supplier_save'
]);



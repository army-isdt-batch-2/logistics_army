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

Route::get('/create.form.returns', [
    App\Http\Controllers\LogisticsController::class,
    'create_returns'
])->name('create');


Route::post('/create/save',[
    App\Http\Controllers\LogisticsController::class,
    'save'
])->name('create.save');









Route::get('/deliveries', [
    App\Http\Controllers\DeliveriesController::class,
    'deliveries'
])->name('deliveries');

Route::get('/create.form.deliveries', [
    App\Http\Controllers\DeliveriesController::class,
    'create_deliveries'

]);

Route::post('/save/deliveries', [
    App\Http\Controllers\DeliveriesController::class,
    'save_deliveries'

])->name('save.create.deliveries');








Route::get('/transportation', [
    App\Http\Controllers\TransportationController::class,
    'transportation'
])->name('transportation');

Route::get('/create.form.transportation', [
    App\Http\Controllers\TransportationController::class,
    'create_transportation'
]);
Route::post('/save/transportation', [
    App\Http\Controllers\TransportationController::class,
    'save_transportation'
])->name('save.create.transportation');








Route::get('/distribution', [
    App\Http\Controllers\DistributionController::class,
    'distribution'
])->name('distribution');

Route::get('/create.form.distribution', [
    App\Http\Controllers\DistributionController::class,
    'create_distribution'
]);

Route::post('/save/distribution', [
    App\Http\Controllers\DistributionController::class,
    'save_distribution'
])->name('save.create.distribution');







Route::get('/assets', [
    App\Http\Controllers\AssetController::class,
    'assets'
]);
Route::get('/create.form.assets', [
    App\Http\Controllers\AssetController::class,
    'create_assets'
]);

Route::post('/save.assets', [
    App\Http\Controllers\AssetController::class,
    'asset_save'
])->name('save.create.assets');











Route::get('/storage', [
    App\Http\Controllers\StorageController::class,
    'storage'
])->name('storage');

Route::get('/create.form.storage', [
    App\Http\Controllers\StorageController::class,
    'create_storage'
]);

Route::post('/save.storage', [
    App\Http\Controllers\StorageController::class,
    'save_storage'
])->name('save.create.storage');

Route::get('/update/storage/{id}', [
    App\Http\Controllers\StorageController::class,
    'update_storage'
])->name('update.storage');

Route::post('/update/{id}/save',[
    App\Http\Controllers\StorageController::class,
    'storage_save'
])->name('update.save');

Route::get('/delete/storage/{id}',[
    App\Http\Controllers\StorageController::class,
    'storage_delete'
])->name('storage_delete');








Route::get('/supplier', [
    App\Http\Controllers\SupplierController::class,
    'supplier'
])->name('supplier');

Route::get('/create.form.supplier', [
    App\Http\Controllers\SupplierController::class,
    'create_supplier'
]);

Route::post('/supplier.save', [
    App\Http\Controllers\SupplierController::class,
    'supplier_save'
])->name('save.create.supplier');

Route::get('/delete/supplier/{id}',[
    App\Http\Controllers\SupplierController::class,
    'supplier_delete'
])->name('supplier.delete');


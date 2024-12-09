<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inventories.home');
});

// Inventory routes with route names
Route::get('inventories', [InventoryController::class, 'index'])->name('inventories.index');
Route::get('inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
Route::post('inventories', [InventoryController::class, 'store'])->name('inventories.store');
Route::get('inventories/{inventory}', [InventoryController::class, 'show'])->name('inventories.show');
Route::get('inventories/{inventory}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');
Route::put('inventories/{inventory}', [InventoryController::class, 'update'])->name('inventories.update');
Route::delete('inventories/{inventory}', [InventoryController::class, 'destroy'])->name('inventories.destroy');

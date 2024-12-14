<?php

use App\Http\Controllers\CategoryController;

Route::get('/', [CategoryController::class, 'index'])->name('categories.index');  // Display grid
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');  // Show create form
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');  // Store new category
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');  // Show edit form
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');  // Update category
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');  // Delete category







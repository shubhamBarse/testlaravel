<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\StudentAdd;
use App\Http\Controllers\StudentData;
use App\Http\Controllers\DeleteStudent;

Route::get('/newstudent', [studentController::class, 'create'])->name('users.create');
Route::get('/', [StudentData::class, 'show'])->name('users.show');
Route::post('/register', [StudentAdd::class, 'store'])->name('users.create');
// Route::post('/delete', [DeleteStudent::class, 'delete'])->name('users.delete');
Route::post('/delete/{id}', [DeleteStudent::class, 'delete'])->name('users.delete');
Route::get('/edit/{id}', [StudentAdd::class, 'edit'])->name('users.edit');
Route::POST('/updatestudent/{id}', [StudentAdd::class, 'modifyData'])->name('users.edit');
// In your routes/web.php or api.php





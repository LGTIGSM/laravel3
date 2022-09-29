<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::get('usuarios', [App\Http\Controllers\Form\TestController::class, 'listAllUsers'])->name('users.listAll');

    Route::get('usuarios/novo', [App\Http\Controllers\Form\TestController::class, 'formAddUser'])->name('users.formEditUser'); 
    
    Route::get('usuarios/editar/{user}', [App\Http\Controllers\Form\TestController::class, 'formEditUser'])->name('users.formAddUser'); 
    
    Route::get('usuarios/{user}', [App\Http\Controllers\Form\TestController::class, 'listUser'])->name('users.list'); 
    
    Route::post('usuarios/store', [\App\Http\Controllers\Form\TestController::class, 'storeUser'])->name('users.store');
    
    Route::put('usuarios/edit/{user}', [\App\Http\Controllers\Form\TestController::class, 'edit'])->name('users.edit');
    
    Route::delete('usuarios/destroy/{user}', [\App\Http\Controllers\Form\TestController::class, 'destroy'])->name('user.destroy');



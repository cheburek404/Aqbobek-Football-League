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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    // CLUB 
    Route::get('/admin', [App\Http\Controllers\ClubController::class, 'index'])->name('showClub');
    Route::post('/admin/add/club', [App\Http\Controllers\ClubController::class, 'create'])->name('createClub');
    Route::get('/admin/add/club', [App\Http\Controllers\ClubController::class, 'addClub'])->name('addClub');
    Route::get('/admin/edit/club/{id}', [App\Http\Controllers\ClubController::class, 'edit'])->name('editClub');
    Route::patch('/admin/edit/club/{id}', [App\Http\Controllers\ClubController::class, 'update'])->name('updateClub');
    Route::delete('/admin/delete/club/{id}', [App\Http\Controllers\ClubController::class, 'destroy'])->name('deleteClub');
});
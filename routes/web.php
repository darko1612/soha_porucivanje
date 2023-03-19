<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WorkingUnitsController;
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

Route::get('/nabavka', function () {
    return view('purchases');
})->middleware(['auth'])->name('nabavka');

Route::get('/artikli', function () {
    return view('articles');
})->middleware(['auth'])->name('artikli');

Route::get('/kreiranje_artikla', function () {
    return view('form.article');
})->middleware(['auth'])->name('kreiranje_artikla');

Route::resource('/dobavljaci', SupplierController::class)->middleware(['auth']);

Route::resource('/radne_jedinice', WorkingUnitsController::class)->middleware(['auth']);




require __DIR__.'/auth.php';

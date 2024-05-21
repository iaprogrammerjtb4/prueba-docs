<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PROPROCESOController;
use App\Http\Controllers\DOCDOCUMENTOController;
use App\Http\Controllers\TIPTIPODOCController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::resource('pro_proceso', PROPROCESOController::class)->middleware('auth');

Route::resource('doc_documento', DOCDOCUMENTOController::class)->middleware('auth');

Route::resource('tip_tipo_doc', TIPTIPODOCController::class)->middleware('auth');

Route::get('/uploads/{filename}', function ($filename) {
    $path = storage_path('app/public/uploads/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
})->where('filename', '.*');
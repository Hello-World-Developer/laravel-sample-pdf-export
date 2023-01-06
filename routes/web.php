<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
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

Route::get('/', HomeController::class);
Route::post('/form', [FormController::class,'store'])->name('form.store');
Route::get('pdf/export', PdfController::class)->name('pdf.export');
Route::get('/pdf/export/{id}', [PdfController::class, 'show'])
       ->name('pdf.show');

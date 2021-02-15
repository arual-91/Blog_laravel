<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BiographyController;



Route::get('/', [HomeController::class,'index']);
Route::post('/', [HomeController::class,'store']);

Route::get('/inicio', [HomeController::class,'index']);

Route::post('/inicio', [HomeController::class,'store']);

Route::get('/biografia', [BiographyController::class,'index']);

Route::get('/libros', [BookController::class,'index']);
Route::get('/libros/{id}', [BookController::class, 'show']);
Route::post('/libros/{id}',  [MailController::class,'sendEmail']);

Auth::routes();


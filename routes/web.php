<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'homepage']);
Route::get('/for-loop-vs-for-each', [HomeController::class, 'loopDemo']);
Route::get('/styling', [HomeController::class, 'landingPage']);
// Route::get('/walk', [AnimalController::class, 'walk']);
// Route::get('/cat-walk', [CatController::class, 'walk']);
// Route::get('/dog-walk', [DogController::class, 'walk']);
// Route::get('/cat-meow', [CatController::class, 'meow']);
// Route::get('/dog-bark', [DogController::class, 'bark']);

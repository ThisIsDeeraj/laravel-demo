<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'homepage']);
Route::get('/for-loop-vs-for-each', [HomeController::class, 'loopDemo']);
Route::get('/styling', [HomeController::class, 'landingPage']);
Route::get('/rest-api', [HomeController::class, 'restApiPage']);

Route::get('/walk', [AnimalController::class, 'getwalk']);

Route::post('/walk', [AnimalController::class, 'postwalk']);
// Route::get('/cat-walk', [CatController::class, 'walk']);
// Route::get('/dog-walk', [DogController::class, 'walk']);
// Route::get('/cat-meow', [CatController::class, 'meow']);
// Route::get('/dog-bark', [DogController::class, 'bark']);

//RESTful API DEMO
Route::get('/rest-api-get-data/{id}', [HomeController::class, 'restApiGetData']);
Route::post('/rest-api-post-data', [HomeController::class, 'restApiPostData']);
Route::put('/rest-api-put-data', [HomeController::class, 'restApiPostData']);
Route::patch('/rest-api-patch-data', [HomeController::class, 'restApiPostData']);
Route::delete('/rest-api-delete-data', [HomeController::class, 'restApiPostData']);


Route::get('/users/new-user/register', [RegistrationController::class, 'registerForm'])->name('user-register');

Route::post('/users/new-user/register', [RegistrationController::class, 'register'])->name('user-register');


// CRUD - Create, Retrieve, Update, Delete 
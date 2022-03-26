<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetCategoryController;
use App\Http\Controllers\PetController;


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

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
});

Route::get('/PetCategory', function () {
    return view('backend.pages.PetCategory');
});
Route::get('/PetCategory',[PetCategoryController::class,'PetCategory']) ->name('petcategory');
Route::get('/petcategory/create',[PetCategoryController::class,'petcategorycreate'])->name('petcategory.create');
Route::post('/petcategory/store',[PetCategoryController::class,'petcategorystore'])->name('petcategory.store');
Route::get('/Pet', function () {
    return view('backend.pages.Pet');
});
Route::get('/Pet',[PetController::class,'Pet'])->name('pet');
Route::get('/PetForm',[PetController::class,'petform'])->name('pet.form');
Route::post('/PetPost',[PetController::class,'petpost'])->name('pet.post');
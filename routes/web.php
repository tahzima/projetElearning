<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/categorie/all',[CategorieController::class, 'index'])->name('categorie');
    Route::post('/categorie/add',[CategorieController::class, 'store'])->name('addcategory');
    Route::post('/categorie/update/{id}',[CategorieController::class, 'update'])->name('updateCategorie');
    Route::delete('/categorie/delete/{id}',[CategorieController::class, 'destroy'])->name('deleteCategory');
    Route::get('/categorie/search/{id}',[CategorieController::class, 'show']);
});

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
    // Route::get('/categorie/search/{id}',[CategorieController::class, 'show']);

    Route::get('/formation/all',[FormationController::class, 'index'])->name('formation');
    Route::post('/formation/add',[FormationController::class, 'store'])->name('addformation');
    Route::post('/formation/update/{id}',[FormationController::class, 'update'])->name('updateFormation');
    Route::delete('/formation/delete/{id}',[FormationController::class, 'destroy'])->name('deleteFormation');

    // Route::get('/user/all',[UserController::class, 'index']);
    Route::get('/user/allClient',[UserController::class, 'getClients'])->name('client');
    Route::post('/user/add',[UserController::class, 'storeClient'])->name('addClient');
    Route::post('/user/update/{id}',[UserController::class, 'update'])->name('updateClient');
    Route::delete('/user/delete/{id}',[UserController::class, 'destroy'])->name('deleteClient');
    // Route::get('/user/search/{id}',[UserController::class, 'show'])->name('client');

    // Route::get('/user/all',[UserController::class, 'index']);
    Route::get('/part/all',[PartController::class, 'index'])->name('part');
    Route::post('/part/add',[PartController::class, 'store'])->name('addPart');
    Route::post('/part/update/{id}',[PartController::class, 'update'])->name('updatePart');
    Route::delete('/part/delete/{id}',[PartController::class, 'destroy'])->name('deletePart');
    // Route::get('/user/search/{id}',[UserController::class, 'show'])->name('client');

    // Route::get('/user/all',[UserController::class, 'index']);
    Route::get('/section/all',[SectionController::class, 'index'])->name('section');
    Route::post('/section/add',[SectionController::class, 'store'])->name('addSection');
    Route::post('/section/update/{id}',[SectionController::class, 'update'])->name('updateSection');
    Route::delete('/section/delete/{id}',[SectionController::class, 'destroy'])->name('deleteSection');
    // Route::get('/user/search/{id}',[UserController::class, 'show'])->name('client');
});

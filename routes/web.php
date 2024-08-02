<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CreationController;
use App\Http\Controllers\ProjectController;

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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/formations', function () {
    return view('formations');
})->middleware(['auth', 'verified'])->name('formations');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/address', [AddressController::class, 'edit'])->name('address.edit');
    Route::patch('/address', [AddressController::class, 'update'])->name('address.update');
    Route::get('/avatar', [AvatarController::class, 'edit'])->name('avatar.edit');
    Route::patch('/avatar', [AvatarController::class, 'update'])->name('avatar.update');
});

require __DIR__.'/auth.php';

/* 
Route pour les pages de blog
    $request -> path() : renvoie le chemin de l'URL actuelle
    $request -> url() : renvoie l'URL complète actuelle
    $request -> all() : renvoie toutes les données de la requête
    $request -> input() : renvoie la valeur d'un champ spécifique de la requête
*/
Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function () {
    // Route pour liste projets
    Route::get('/', 'index')->name('index'); 

    /* 
    Route pour afficher un article de blog spécifique avec un slug et un ID
    */
    Route::get('/{slug}-{id}', 'show')-> where([
        'id' => '[0-9]+', 
        'slug' => '[a-z0-9\-]+', 
    ])->name('show'); 
});

Route::prefix('/about')->name('about.')->controller(AboutController::class)->group(function() {
    // Route pour aboutMe
    Route::get('/', 'index')->name('index');
});

Route::prefix('/creation')->name('creation.')->controller(CreationController::class)->group(function() {
    // Route pour aboutMe
    Route::get('/', 'index')->name('index');
});

Route::prefix('/project')->name('project.')->controller(ProjectController::class)->group(function() {
    // Route pour aboutMe
    Route::get('/', 'index')->name('index');
});

// Route pour afficher le formulaire d'édition
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');

// Route pour mettre à jour le post
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
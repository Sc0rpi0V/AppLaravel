<?php

use App\Http\Controllers\{
    ProfileController,
    BlogController,
    AddressController,
    AboutController,
    ArticleController,
    AvatarController,
    CreationController,
    ProjectController,
    ServiceController
};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route pour les pages de blog     
$request -> path() : renvoie le chemin de l'URL actuelle     
$request -> url() : renvoie l'URL complète actuelle     
$request -> all() : renvoie toutes les données de la requête     
$request -> input() : renvoie la valeur d'un champ spécifique de la requête 
*/

// Home route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Formations route
Route::get('/formations', function () {
    return view('formations');
})->middleware(['auth', 'verified'])->name('formations');

// Authenticated routes group
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // Address routes
    Route::prefix('address')->name('address.')->group(function () {
        Route::get('/', [AddressController::class, 'edit'])->name('edit');
        Route::patch('/', [AddressController::class, 'update'])->name('update');
    });

    // Avatar routes
    Route::prefix('avatar')->name('avatar.')->group(function () {
        Route::get('/', [AvatarController::class, 'edit'])->name('edit');
        Route::patch('/', [AvatarController::class, 'update'])->name('update');
    });
});

require __DIR__.'/auth.php';

// Blog routes
Route::prefix('blog')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{slug}-{id}', 'show')->where(['id' => '[0-9]+', 'slug' => '[a-z0-9\-]+'])->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
});

//Article routes
Route::prefix('articles')->name('articles.')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{slug}-{id}', 'show')->where(['id' => '[0-9]+', 'slug' => '[a-z0-9\-]+'])->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
});

// About routes
Route::prefix('about')->name('about.')->controller(AboutController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});

// Creation routes
Route::prefix('creation')->name('creation.')->controller(CreationController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});

// Services routes
Route::prefix('services')->name('services.')->controller(ServiceController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});

// Projects routes
Route::prefix('project')->name('project.')->controller(ProjectController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
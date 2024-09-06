<?php

use App\Http\Controllers\{
    ProfileController,
    BlogController,
    AddressController,
    AboutController,
    ArticleController,
    AvatarController,
    ContactController,
    CreationController,
    ProjectController,
    ServiceController,
    QuoteController,
    NewsletterController,
    SiteInfoController,
    CartController,
    CheckoutController,
    GenderController,
    PhoneController,
    PaiementController,
    AdminController,
    ReportingController,
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

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::view('/team', '_team-admin')->name('team');
    Route::view('/messages', '_messages-admin')->name('messages');
    Route::view('/formations', '_formations-admin')->name('formations');
    Route::get('/analytics', [AdminController::class, 'showAnalytics'])->name('analytics');
    Route::get('/reports', [ReportingController::class, 'index'])->name('reports');
});

// Public routes
Route::view('/', 'welcome')->name('home');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/formations', 'formations')->name('formations');
    Route::view('/messages', 'messages')->name('messages');
    Route::view('/website', 'website')->name('website');
    Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter');
    Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
    Route::view('/devis', 'quoteform')->name('quoteform');
    Route::post('/devis', [QuoteController::class, 'submitQuote'])->name('submit.quote');
});

// Site Info routes
Route::post('/add-site-info', [SiteInfoController::class, 'store']);
Route::delete('/delete-site-info', [SiteInfoController::class, 'deleteSiteInfo']);

// Profile, Address, Avatar, Phone, and Gender routes
Route::middleware('auth')->prefix('profile')->name('profile.')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
});

Route::middleware('auth')->prefix('address')->name('address.')->group(function () {
    Route::get('/', [AddressController::class, 'edit'])->name('edit');
    Route::patch('/', [AddressController::class, 'update'])->name('update');
});

Route::middleware('auth')->prefix('avatar')->name('avatar.')->group(function () {
    Route::get('/', [AvatarController::class, 'edit'])->name('edit');
    Route::patch('/', [AvatarController::class, 'update'])->name('update');
});

Route::middleware('auth')->prefix('phone')->name('phone.')->group(function () {
    Route::get('/', [PhoneController::class, 'edit'])->name('edit');
    Route::patch('/', [PhoneController::class, 'update'])->name('update');
});

Route::middleware('auth')->prefix('gender')->name('gender.')->group(function () {
    Route::get('/', [GenderController::class, 'edit'])->name('edit');
    Route::patch('/', [GenderController::class, 'update'])->name('update');
});

// Blog routes
Route::prefix('blog')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('{blogs}', 'show')->name('show');
});

// Article routes
Route::prefix('articles')->name('articles.')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('{article}', 'show')->name('show');
});

// About routes
Route::prefix('about')->name('about.')->controller(AboutController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Creation routes
Route::prefix('creation')->name('creation.')->controller(CreationController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Services routes
Route::prefix('services')->name('services.')->controller(ServiceController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/consultation', 'consultation')->name('consultation');
    Route::get('/support', 'support')->name('support');
    Route::get('/formation', 'formation')->name('formation');
    Route::get('/developpement', 'developpement')->name('developpement');
    Route::get('/conception', 'conception')->name('conception');
    Route::get('/hebergement', 'hebergement')->name('hebergement');
});

// Cart Routes
Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function () {
    Route::post('/add', 'addToCart')->name('add');
    Route::get('/', 'viewCart')->name('view');
    Route::post('/updateQuantity', 'updateQuantity')->name('updateQuantity');
});

// Checkout Routes
Route::prefix('checkout')->name('checkout.')->controller(CheckoutController::class)->group(function () {
    Route::get('/', 'showForm')->name('form');
    Route::post('/submit', 'handleForm')->name('submit');
    Route::get('/complete', 'orderComplete')->name('complete');
});

// Payment Routes
Route::prefix('paiement')->name('paiement.')->controller(PaiementController::class)->group(function () {
    Route::get('/', 'showForm')->name('view');
    Route::post('/submit', 'handleFormPaiement')->name('submit');
});

// Contact routes
Route::prefix('contact')->name('contact.')->controller(ContactController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'submit')->name('submit');
});

// Projects routes
Route::prefix('project')->name('project.')->controller(ProjectController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('{project}', 'show')->name('show');
});

// Load additional routes
require __DIR__.'/auth.php';
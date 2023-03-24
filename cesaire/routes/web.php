<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/a-propos', [HomeController::class, 'apropos'])->name('apropos');
Route::get('/nos-produits', [HomeController::class, 'nosproduits'])->name('nosproduits');
Route::get('/nous-contacter', [HomeController::class, 'nouscontacter'])->name('nouscontacter');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/auth/register', [HomeController::class, 'register'])->name('register');
Route::get('/auth/login', [HomeController::class, 'login'])->name('login');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/single-product/{id}', [HomeController::class, 'singleproductU'])->name('singleproductU');
Route::get('/profile/edit', [HomeController::class, 'profile'])->name('profile');
Route::get('/ajouter', [HomeController::class, 'ajouter'])->name('ajouter');
Route::get('/adminpage', [HomeController::class ,'adminpage'])->name('adminpage');

Route::post('/ajoutPost', [HomeController::class, 'ajoutPost'])->name('ajoutPost');
Route::get('/ajout', [HomeController::class, 'ajout'])->name('ajout');
Route::post('/ajoutPost', [HomeController::class, 'ajoutPost'])->name('ajoutPost');
Route::get('/read', [HomeController::class, 'read'])->name('read');
Route::get('/update.{id}', [HomeController::class, 'update'])->name('update');
Route::post('/updatePost.{id}', [HomeController::class, 'updatePost'])->name('updatePost');
Route::get('/delete.{id}', [HomeController::class, 'delete'])->name('delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

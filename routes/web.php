<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('acceuil', [HomeController::class,'acceuil'])->name('acceuil');
Route::get('classes', [HomeController::class,'classe'])->name('classes');
Route::get('etudiants', [HomeController::class,'etudiant'])->name('etudiants');
Route::get('matieres', [HomeController::class,'matiere'])->name('matieres');
Route::get('inscription', [HomeController::class,'inscription'])->name('inscription');
Route::get('notes', [HomeController::class,'notes'])->name('notes');
Route::get('appreciations', [HomeController::class,'appreciations'])->name('appreciations');
Route::get('coefficients', [HomeController::class,'coefficients'])->name('coefficients');

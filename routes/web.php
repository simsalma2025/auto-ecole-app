<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
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
    return view('auth.login');
});

Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription');

Route::post('/demandeInscription',[InscriptionController::class,'store'])->name('demande_inscription');
Route::get('/dashboard', function () {
    return view('landing.dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
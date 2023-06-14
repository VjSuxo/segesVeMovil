<?php

use Illuminate\Support\Facades\Route;

use App\Models\Evento;
use App\Models\Expositor;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
    $evento = Evento::get();
    $expositores = Expositor::get();
    return view('welcome', ['eventos' => $evento, 'expositoresP' => $expositores] );
})->name('inicio');

Route::get('/eventos', function () {
    $evento = Evento::get();
    $expositores = Expositor::get();
    return view('eventos', ['eventos' => $evento, 'expositoresP' => $expositores] );
})->name('eventos');

Route::get('/infoEventos/{evento}', function (Evento $evento) {
    return view('infoEventos', ['evento' => $evento] );
})->name('infoeventos');


Auth::routes(['verify' => true]);


Route::middleware(['auth','user-role:admin'])->group(function(){
Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth','user-role:user'])->group(function(){
    Route::get('/homeAdmin', [HomeController::class, 'adminHome'])->name('user.home');
});

Route::middleware(['auth','user-role:controlador'])->group(function(){
    Route::get('/homeAdmin', [HomeController::class, 'adminHome'])->name('controlador.home');
});

Route::middleware(['auth','user-role:expositor'])->group(function(){
    Route::get('/homeAdmin', [HomeController::class, 'adminHome'])->name('expositor.home');
});
<?php

use Illuminate\Support\Facades\Route;

use App\Models\Evento;
use App\Models\Expositor;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','user-role:user'])->group(function(){

});

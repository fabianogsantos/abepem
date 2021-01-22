<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Rota HOME original do Laravel 8
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//rotas importadas do projeto Abepem Laravel 7
//--------------------------------------------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('coloquio',              function(){ return view('coloquio.oevento'); })->name('coloquio');
Route::get('coloquio/diretoria',    function(){ return view('coloquio.diretoria');})->name('coloquio.diretoria');
Route::get('coloquio/comite',       function(){ return view('coloquio.comitecientifico');})->name('coloquio.comitecientifico');
Route::get('coloquio/grupos',       function(){ return view('coloquio.grupos');})->name('coloquio.grupos');
Route::get('coloquio/anais',        function(){ return view('coloquio.anais');})->name('coloquio.anais');

Route::get('congresso',             function(){ return view('congresso.oevento');})->name('congresso');
Route::get('congresso/diretoria',   function(){ return view('congresso.diretoria');})->name('congresso.diretoria');
Route::get('congresso/comite',      function(){ return view('congresso.comitecientifico');})->name('congresso.comitecientifico');
Route::get('congresso/grupos',      function(){ return view('congresso.grupos');})->name('congresso.grupos');
Route::get('congresso/anais',       function(){ return view('congresso.anais');})->name('congresso.anais');

Route::get('forum',                 function(){ return view('forum.oevento');})->name('forum');
Route::get('forum/diretoria',       function(){ return view('forum.diretoria');})->name('forum.diretoria');
Route::get('forum/cadastro',        function(){ return view('forum.cadastro');})->name('forum.cadastro');

Route::get('abepem',                function(){ return view('abepem.quemsomos');})->name('abepem');
Route::get('abepem/estatuto',       function(){ return view('abepem.estatuto');})->name('abepem.estatuto');
Route::get('abepem/diretoria',      function(){ return view('abepem.diretoria');})->name('abepem.diretoria');
Route::get('abepem/conselho',       function(){ return view('abepem.conselho');})->name('abepem.conselho');
Route::get('abepem/associe-se',     function(){ return view('abepem.associe-se');})->name('abepem.associe-se');

Route::get('pesquisar', function(){ return view('pesquisar');})->name('pesquisar');

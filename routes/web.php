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

Route::get('coloquio/edicoes/2005',function(){ return view('coloquio.edicoes.2005'); })->name('coloquio.2005');
Route::get('coloquio/edicoes/2006',function(){ return view('coloquio.edicoes.2006'); })->name('coloquio.2006');
Route::get('coloquio/edicoes/2007',function(){ return view('coloquio.edicoes.2007'); })->name('coloquio.2007');
Route::get('coloquio/edicoes/2008',function(){ return view('coloquio.edicoes.2008'); })->name('coloquio.2008');
Route::get('coloquio/edicoes/2009',function(){ return view('coloquio.edicoes.2009'); })->name('coloquio.2009');
Route::get('coloquio/edicoes/2010',function(){ return view('coloquio.edicoes.2010'); })->name('coloquio.2010');
Route::get('coloquio/edicoes/2011',function(){ return view('coloquio.edicoes.2011'); })->name('coloquio.2011');
Route::get('coloquio/edicoes/2012',function(){ return view('coloquio.edicoes.2012'); })->name('coloquio.2012');
Route::get('coloquio/edicoes/2013',function(){ return view('coloquio.edicoes.2013'); })->name('coloquio.2013');
Route::get('coloquio/edicoes/2014',function(){ return view('coloquio.edicoes.2014'); })->name('coloquio.2014');
Route::get('coloquio/edicoes/2015',function(){ return view('coloquio.edicoes.2015'); })->name('coloquio.2015');
Route::get('coloquio/edicoes/2016',function(){ return view('coloquio.edicoes.2016'); })->name('coloquio.2016');
Route::get('coloquio/edicoes/2017',function(){ return view('coloquio.edicoes.2017'); })->name('coloquio.2017');
Route::get('coloquio/edicoes/2018',function(){ return view('coloquio.edicoes.2018'); })->name('coloquio.2018');
Route::get('coloquio/edicoes/2019',function(){ return view('coloquio.edicoes.2019'); })->name('coloquio.2019');
Route::get('coloquio/edicoes/2020',function(){ return view('coloquio.edicoes.2020'); })->name('coloquio.2020');

Route::get('congresso',             function(){ return view('congresso.oevento');})->name('congresso');
Route::get('congresso/diretoria',   function(){ return view('congresso.diretoria');})->name('congresso.diretoria');
Route::get('congresso/comite',      function(){ return view('congresso.comitecientifico');})->name('congresso.comitecientifico');
Route::get('congresso/grupos',      function(){ return view('congresso.grupos');})->name('congresso.grupos');
Route::get('congresso/anais',       function(){ return view('congresso.anais');})->name('congresso.anais');

Route::get('forum',                 function(){ return view('forum.oevento');})->name('forum');
Route::get('forum/diretoria',       function(){ return view('forum.diretoria');})->name('forum.diretoria');
Route::get('forum/cadastro',        function(){ return view('forum.cadastro');})->name('forum.cadastro');

Route::get('forum/edicoes/edicao1',function(){ return view('forum.edicoes.edicao1'); })->name('forum.edicao1');
Route::get('forum/edicoes/edicao2',function(){ return view('forum.edicoes.edicao2'); })->name('forum.edicao2');
Route::get('forum/edicoes/edicao3',function(){ return view('forum.edicoes.edicao3'); })->name('forum.edicao3');
Route::get('forum/edicoes/edicao4',function(){ return view('forum.edicoes.edicao4'); })->name('forum.edicao4');

Route::get('abepem',                function(){ return view('abepem.quemsomos');})->name('abepem');
Route::get('abepem/estatuto',       function(){ return view('abepem.estatuto');})->name('abepem.estatuto');
Route::get('abepem/diretoria',      function(){ return view('abepem.diretoria');})->name('abepem.diretoria');
Route::get('abepem/conselho',       function(){ return view('abepem.conselho');})->name('abepem.conselho');
Route::get('abepem/associe-se',     function(){ return view('abepem.associe-se');})->name('abepem.associe-se');

Route::get('pesquisar', function(){ return view('pesquisar');})->name('pesquisar');

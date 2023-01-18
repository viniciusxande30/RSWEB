<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

// Route::get('/', function () {
//     return view('site');
// });

Route::get('/', [Controller::class, 'homeIndex'])->name('homeIndex');
Route::get('/sobre-a-rs-web', [Controller::class, 'aboutUs'])->name('aboutUs');
Route::get('/servicos-de-marketing', [Controller::class, 'marketServices'])->name('marketServices');

//Route::get('/rotas', [Controller::class, 'routes'])->name('routes');
//Route::get('/transportadoras', [Controller::class, 'companies'])->name('companies');
Route::get('/consultoria-de-marketing-digital', [Controller::class, 'quotation'])->name('quotation');
//Route::get('/cadastro', [Controller::class, 'register'])->name('register');
Route::get('consultoria-de-marketing-em-{origin}',[Controller::class,'consultoriamktCotacao'])->name('consultoriamktCotacao');


Route::get('criacao-de-sites',[Controller::class,'sitesCreate'])->name('sitesCreate');
Route::get('criacao-de-sites-em-{origin}',[Controller::class,'sitescreateQuotation'])->name('sitescreateQuotation');

//Route::get('transportadoras/{companies}',[Controller::class,'companiesPerfil'])->name('companiesPerfil');
//Route::get('/cotacao-enviada',[Controller::class,'sendQuotation'])->name('sendQuotation');
Route::post('/cotacao-enviada',[Controller::class,'quotationApi'])->name('quotationApi');
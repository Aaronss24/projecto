<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Mail\ContactaMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactaController;
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
    return view('welcome');
});

Route::get('/contacto', function () {
    return 'Visualizando texto';
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("projects",ProjectController::Class);

Route::get('contacta',function() {
    $correo=new ContactaMail;
    Mail::to('aaronsuarezsecades@gmail.com')->send($correo);
    return ("mensaje enviado");

});

Route ::get('contacta',[ContactaController::class,'index'])->name('contacta.index');

Route::post('contacta',[ContactaController::class, 'store'])->name('contacta.store');


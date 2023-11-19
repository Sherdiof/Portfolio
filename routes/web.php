<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
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
//Ruta de inicio
Route::get('home', function () { return view('home'); })->name('home');

//Ruteo de autenticacion
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'home'])->name('login');
//Rutas de vista a visitante
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/about', [AboutController::class, 'index'])->name('abouts.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');


//Rutas protegidas
Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
    //CRUD USUARIOS
    Route::resource('users', UserController::class);
    //CRUD PROYECTOS - EXCEPTO LA DE INDEX
    Route::resource('projects', ProjectController::class)->except('index');
    //CRUD PROYECTOS - CREAR Y EDITAR
    Route::resource('contacts', ContactController::class)->except('create', 'store');
    //PARA IMAGEN DEL PROYECTO
    Route::post('/imagenes', [ImageController::class, 'store'])->name('imagen.store');


});


<?php

use Illuminate\Support\Facades\Route;

/* Controllers */
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;





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




//Rutas del login
Route::get('/', function () {
    return view('home');
});

Route::view('/historia', "historia")->name("historia");
Route::view('/contacto', "contacto")->name("contacto");
Route::view('/aviso-legal', "avisolegal")->name("aviso-legal");
Route::view('/politica-cookies', "cookies")->name("cookies");
Route::view('/politica-privacidad', "privacidad")->name("privacidad");
//formulario
Route::post('/contacto/formualrio', [UserController::class, 'sendFrom'])->name('formulario-contacto');


//Rutas del login
Route::view('/login', "login")->name("login");
Route::view('/registro', "register")->name("registro");
//Rutas del login con lógica
Route::post('/validar-registro', [UserController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [UserController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/crear-receta', [RecipeController::class, 'createRecipe'])->middleware('auth')->name('crear.receta');//falta enlazar el user_id voy a probar a meter el general


//Mi-cuenta
Route::get('/mi-cuenta',[UserController::class, 'account'])->middleware('auth')->name('mi-cuenta');


//recetas
Route::get('/recetas', [RecipeController::class, 'index'])->name('recipe'); //ver recetas
Route::get('/recetas/{id}', [RecipeController::class, 'show'])->name('recipe.slug'); //mostrar recetas
Route::delete('/recetas/{id}/borrar-receta', [RecipeController::class, 'destroy'])->middleware('auth')->name('recipe.delete'); //borrar recetas
Route::put('/recetas/{id}/editar-receta', [RecipeController::class, 'edit'])->middleware('auth')->name('recipe.edit'); //editar recetas
Route::get('/recetas/{id}/editar-receta', [RecipeController::class, 'fakeEdit'])->middleware('auth')->name('ask.recipe.edit'); //pregunta de editar recetas

//favoritos
Route::post('/recetas/{id}/favorito', [FavoriteController::class, 'favorite'])->middleware('auth')->name('favorite'); //pulsar recetas
Route::delete('/recetas/{id}/borrar-favorito', [FavoriteController::class, 'favoriteDestroy'])->middleware('auth')->name('delete.favorite'); //pulsar recetas





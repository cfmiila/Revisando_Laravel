<?php

 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\JogosController;


//Route::view('/jogos', 'jogos');

// Route::get('/jogos', function(){
//     return "Curso de Laravel";

// });

// // Route::view('/jogos','jogos',['name'=>'Camila']);
// Route::get('/jogos/{name?}', function($name= null){
//     return view('jogos', ['nomeJogo'=>$name]);
// })->where('name', '[A-Za-z]+');

Route::get('/jogos', [JogosController::class, 'index']);

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');


Route::fallback(function(){
    return "Erro ao localizar rota!";

});
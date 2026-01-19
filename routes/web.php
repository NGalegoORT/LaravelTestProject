<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola mundo!";
    //return view('welcome');
});


Route::get('/contacto', function () {
    return "Hola desde la ruta /contacto con GET";
});

Route::post('/contacto', function () {
    return "Hola desde la ruta /contacto con POST";
});
/*
Route::match(['get', 'post'], '/unir', function () {
    return "Hola desde la ruta /unir con GET o POST";
});
*/

Route::get ('/cursos/info', function(){
    return "Esta es toda la informacion de tu curso";
});

Route::get ('/cursos/{curso}/{categoria?}', function($curso, $categoria = null){

    if ($categoria){
        return "Este es el curso: $curso de la categoria $categoria";
    } else{
    return "Este es el curso: $curso";
    };

});



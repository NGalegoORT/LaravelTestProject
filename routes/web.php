<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//------------------------CREACION DE CRUD------------------------------
//Ruta para mostrar el listado de registros
Route::get('/posts', [PostController::class, 'index']);

//Ruta para mostrar un formulario de creacion
Route::get('/posts/create', [PostController::class, 'create']);


//Ruta para guardar el nuevo registro
Route::post('/posts', [PostController::class, 'store']);

//Ruta para mostrar un registro en particular
Route::get('/posts/{post}', [PostController::class, 'show']);

//Ruta para mostrar el formulario de edicion
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

//Ruta para actualizar el registro
Route::put('/posts/{post}', [PostController::class, 'update']);

//Ruta para eliminar un registro
Route::delete('/posts/{post}', [PostController::class, 'destroy']);

//-------------------------------FIN CRUD-------------------------------------



/* COMO DEFINIMOS LAS RUTAS, LAS VALIDAMOS Y LAS NOMBRAMOS
Route::get('/contacto', function () {
    return "Hola desde la ruta /contacto con GET";
});

Route::post('/contacto', function () {
    return "Hola desde la ruta /contacto con POST";
});

Route::match(['get', 'post'], '/unir', function () {
    return "Hola desde la ruta /unir con GET o POST";
});


Route::get ('/cursos/info', function(){
    return "Esta es toda la informacion de tu curso";
})->name('info.cursos');

Route::get ('/cursos/{curso}/{categoria?}', function($curso, $categoria = null){

    if ($categoria){
        return "Este es el curso: $curso de la categoria $categoria";
    } else{
    return "Este es el curso: $curso";
    };

})->where(
    ['curso' =>'[A-Za-z]+',
    'categoria' =>'[A-Za-z]+',
//->whereAlpha('curso') esto es equivalente a la expresion regular [A-Za-z]+
//->whereAlphaNumeric('curso') esto es equivalente a la expresion regular [A-Za-z0-9]+ 
//->whereIn('categoria', ['programacion', 'diseno', 'marketing']) esto limita las opciones de categoria a esos tres valores
])->name('cursos.detalle')
;

Route::get('/usuarios/{id}', function($id){
    return "El ID del usuario es: $id";
})->name('usuarios.detalle');

*/
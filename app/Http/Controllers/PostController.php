<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [[
            'title' => 'Primer post',
            'content' => 'Contenido del primer post',
        ],[
            'title' => 'Segundo post',
            'content' => 'Contenido del segundo post',
        ],[
            'title' => 'Tercer post',
            'content' => 'Contenido del tercer post',
        ]];

        $dia = 14;

        //$etiqueta = '<p>Esta etiqueta es: Tecnologia</p>';
        return view('posts.index', compact('posts', 'dia'));
    }

    public function create()
    {
        return view('posts.create') ;
    }

    public function store()
    {
        return "Guardar el nuevo post";
    }

    public function show($post)
    {
        //$prueba = "Valor de prueba";
        return view('posts.show', compact('post'));
        /*
        //Esto se usa para cuando queres renombrar la variable en la vista
        return view('posts.show', [
            'post' => $post
        ]);
        */
    }

    public function edit($post)
    {
        return view('posts.edit');
    }

    public function update($post)
    {
        return "Actualizar el post: $post";
    }

    public function destroy($post)
    {
        return "Eliminar el post: $post";
    }
}
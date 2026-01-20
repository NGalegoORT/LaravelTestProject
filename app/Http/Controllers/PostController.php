<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Listado de posts";
    }

    public function create()
    {
        return "Formulario de creacion de un post";
    }

    public function store()
    {
        return "Guardar el nuevo post";
    }

    public function show($post)
    {
        return "Mostrando el post de: $post";
    }

    public function edit($post)
    {
        return "Formulario de edicion del post: $post";
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
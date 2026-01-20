<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
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
        return view('posts.show');
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
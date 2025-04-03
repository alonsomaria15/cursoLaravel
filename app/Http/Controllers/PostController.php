<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [];
    public function index()
    {
        // return view('posts.index', [
        //     'posts' => $this->posts
        // ]);

        $posts = session()->get('posts', []); // Obtener los posts de la sesión

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
return view('posts.create');
    }

    public function store(Request $request)
    {
        $posts = session()->get('posts', []);

        // Crear un nuevo post con ID autoincremental
        $id = count($posts) + 1;
        $titulo = $request->input('titulo');
        $contenido = $request->input('contenido');

        $posts[] = [
            'id' => $id,
            'titulo' => $titulo,
            'contenido' => $contenido,
        ];
        // Guardar el array actualizado en la sesión
        session()->put('posts', $posts);

        return redirect()->route('posts.index');
    }

    public function show(string $id)
    {
        $posts = session()->get('posts', []);
        $post = collect($posts)->firstWhere('id', $id);
        return view('posts.show', [
            'post' => $post
        ]);
    }
}

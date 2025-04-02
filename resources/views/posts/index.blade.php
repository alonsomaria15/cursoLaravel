@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>POSTS</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear nuevo post</a>
    </div>

    @empty($posts)
        <h6>
            No hay posts disponibles.
        </h6>

    @endempty
    @foreach($posts as $item)
        <li>
            <a href="/posts/{{ $item['id'] }}">{{ $item['titulo'] }} - {{$item['contenido']}} </a>
        </li>
    @endforeach
@endsection

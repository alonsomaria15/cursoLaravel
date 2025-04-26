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
            <a href="{{ route('posts.show', ['id' => $item['id']]) }}">{{ $item['titulo'] }}</a>


        </li>
    @endforeach
    
@endsection

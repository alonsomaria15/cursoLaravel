@extends('layout.app')

@section('content')
<div class="card" >
    <div class="card-header">
        <h1 class="text-3xl font-semibold text-gray-800">{{ $post['titulo'] }}</h1> <!-- Título del post -->
    </div>
    <div class="card-body">
        <form action="{{ route('posts.index') }}" method="get">
            @csrf
            <div class="form-group">
                <p class="text-lg text-gray-700 leading-relaxed">{{ $post['contenido'] }}</p> <!-- Contenido del post -->
            </div>
            <button type="submit" class="btn btn-primary mt-3">Regresar</button>
        </form>
    </div>
</div>
@endsection

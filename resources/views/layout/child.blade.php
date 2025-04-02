@extends('namespace::layout.app')
@section('title','Prueba de child')


@section('content')
<h1>Prueba de child</h1>
<p>Contenido de la pagina</p>
<h3>Hola {{$name}} {{$lastname}}
    su edad es: {{$age}} años
</h3>
@component('componets.alert', ['name'] => 'Lupita')
@slot('title')
Alert
@endslot
<p>Esto es un componente de Alert</p>

@endcomponent

@endsection

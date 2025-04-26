<div {{$atributes->merge(['class' => 'border px-4 py-3 rounded relative'])}}>
    @if ($slot->hasActualContent())
    The scope has non-comment content.
@endif
    {{$slot}}
    {{$title}}
<h2>Este es mi componente de Alert</h2>
<h3>Tipo de Alerta: {{$type}}</h3>
<h3>Nombre:{{$name}}</h3>

@foreach ($languajes('Python') as $item)

<h4>{{$item}}</h4>
@endforeach
<h4>{{$languaje}}</h4>
</div>





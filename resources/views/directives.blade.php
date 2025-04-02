@if($num == 7)

<h2>Es igual</h2>
@elseif($num < 7)
<h2>Es menor</h2>
@else
<h2>Es mayor</h2>
@endif

@isset($data)
<h2>La variable existe</h2>
@endisset

@empty($data)
<h2>La variable no existe</h2>
@endempty

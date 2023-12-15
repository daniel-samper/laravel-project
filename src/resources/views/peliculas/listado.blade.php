<h1>{{$titulo}}</h1>

<h2>{{ $listado[2] }}</h2>

<p> {{ date('Y') }}</p>

{{-- Esto es un comentario--}}

{{ $director ?? 'No hay director' }}

@if($titulo)
    El titulo existe y es {{ $titulo }}
@else
    El título no existe    
@endif
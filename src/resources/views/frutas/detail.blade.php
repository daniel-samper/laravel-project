<h1> {{ $fruta->nombre }}</h1>
<p>
    {{ $fruta->descripcion}}
</p>
<a href="{{ route('frutas.delete',$fruta->id) }}">Eliminar</a>
<a href="{{ route('frutas.edit',$fruta->id) }}">Actualizar</a>

 @if (isset($fruta) && is_object($fruta))
     <h1>Editar fruta</h1>
 @else
     <h1>Crear una fruta</h1>
 @endif



 <form action="{{ isset($fruta) ? route('frutas.update') : route('frutas.save') }}" method="POST">
     {{ csrf_field() }}

     @if (isset($fruta) && is_object($fruta))
     <input type="hidden" name="id" value="{{ $fruta->id }}" /><br>

     @endif

     <label for="nombre">Nombre</label>
     <input type="text" name="nombre" value="{{ $fruta->nombre ?? '' }}" /><br>

     <label for="descripcion">Descripción</label>
     <input type="text" name="descripcion" value="{{ $fruta->descripcion ?? '' }}" /><br>

     <label for="precio">Precio</label>
     <input type="number" name="precio" value="{{ $fruta->precio ?? 0 }}" /><br>

     <input type="submit" value="Guardar" />
 </form>

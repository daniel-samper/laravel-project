 <h1>Crear una fruta</h1>

 <form action="{{route('frutas.save')}}" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"/><br>

    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion"/><br>

    <label for="precio">Precio</label>
    <input type="text" name="nombre"/><br>

    <input type="submit" value="Guardar"/>
 </form>

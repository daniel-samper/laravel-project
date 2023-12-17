<h1>Formulario en Laravel</h1>

<form action="{{route('recibir')}}" method="POST">
    {{ csrf_field()}}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"/>
    
    <label for="email">Correo</label>
    <input type="email" name="email" />
    
    <input type="submit" value="enviar"/>
</form>
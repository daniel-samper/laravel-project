 <h1>Listado de frutas</h1>

 <ul>
     @foreach ($frutas as $fruta)
         <li>

             <a href="{{ url("frutas/detail/$fruta->id") }}">Ir al detalle</a>

             <a href="{{ route('frutas.detail',$fruta->id) }}">
                {{ $fruta->nombre }}</a>
         </li>
     @endforeach
 </ul>

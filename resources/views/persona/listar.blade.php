
<a href="{{ url('/persona_agregar_1') }}">Agregar</a>
<table>
<thead>
  <tr>
    <th>codigo</th>
    <th>nombre</th>
    <th>apellido paterno</th>
    <th>apellido materno</th>
    <th>dni</th>
    <th>opciones</th> 
  </tr>
</thead>
<tbody> 
@foreach ( $personas as $persona )     
  <tr>
    <td>{{ $persona->id }}</td>
    <td>{{ $persona->nombre }}</td>
    <td>{{ $persona->apellido_paterno }}</td>
    <td>{{ $persona->apellido_materno }}</td>
    <td>{{ $persona->dni }}</td>
    <td>
      <a href="{{ url('/persona/'.$persona->id.'/edit') }}">Editar</a>
      <form action="{{ url('/persona/'.$persona->id) }}" method="post">
      @csrf 
      {{ method_field('PATCH') }}
      <input type="hidden" value="0" name="estado"/>
      <button>Eliminar</button>
      </form>
    <td>
  </tr>
@endforeach  
</tbody> 
</table>
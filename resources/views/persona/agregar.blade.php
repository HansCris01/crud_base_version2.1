
<form action="{{ url('/persona_agregar_2') }}" method="post">
    @csrf
  <label for="fname">Nombre:</label><br>
  <input type="text" name="nombre"><br>
  <label for="lname">Apellido paterno:</label><br>
  <input type="text" name="apellido_paterno"><br>

  <label for="fname">Apellido materno:</label><br>
  <input type="text" name="apellido_materno"><br>
  <label for="lname">Dni:</label><br>
  <input type="text" name="dni"><br>

  <button>Grabar</button>
</form>
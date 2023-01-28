<label for="fname">Nombre:</label><br>
  <input type="text" name="nombre" value="{{ $persona->nombre }}"><br>
  <label for="lname">Apellido paterno:</label><br>
  <input type="text" name="apellido_paterno" value="{{ $persona->apellido_paterno }}"><br>

  <label for="fname">Apellido materno:</label><br>
  <input type="text" name="apellido_materno" value="{{ $persona->apellido_materno }}"><br>
  <label for="lname">Dni:</label><br>
  <input type="text" name="dni" value="{{ $persona->dni }}"><br>

  <button>Actualizar</button>
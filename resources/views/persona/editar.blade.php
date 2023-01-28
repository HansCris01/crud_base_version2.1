<form action="{{ url('/persona/'.$persona->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('persona.formulario');
</form>
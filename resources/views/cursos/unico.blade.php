@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('curso') }}" method="POST" role="form">
    {{ csrf_field() }}
    <legend>Ingrese el Id del Curso</legend>

    <div class="form-group">
        <label for="id">Id</label>
        <input type="number" class="form-control" name="id" required autofocus>
    </div>

    <button type="submit" class="btn btn-primary">Obtener</button>

</form>

@endsection
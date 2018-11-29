@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('profesor') }}" method="POST" role="form">
    {{ csrf_field() }}
    <legend>Ingrese el Id del Profesor</legend>

    <div class="form-group">
        <label for="id">Id</label>
        <input type="number" class="form-control" name="id" required>
    </div>

    <button type="submit" class="btn btn-primary">Obtener</button>

</form>

@endsection
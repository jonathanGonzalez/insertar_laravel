@extends('layouts.app')

@section('listarActive')
    active
@stop
@section('contenido')
<div class="row">
  <table class="table" border="1">
  <tr>
    <th>Fecha</th>
    <th>Hora</th>    
    <th>persona</th>    
    <th></th>
  </tr>
  @foreach($todos_los_registros as $registro)
  <tr>
    <td>{{ $registro->fecha }}</td>
    <td>{{ $registro->hora }}</td>
    <td>{{ $registro->persona }}</td>
    <th><a href="#" class="btn btn-primary">Editar usuario</span></th>
  </tr>
  @endforeach
  </table>
</div>
@stop
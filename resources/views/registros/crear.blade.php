@extends('layouts.app')

@section('indexActive')
    active
@stop
@section('contenido')

<h1>Página Principal</h1>
{!! Form::open(['route' => 'registro.store']) !!}
    {!! Form::label('fecha_lbl', 'Fecha de ingreso: ', ['class' => '']) !!}
    {!! Form::text('fecha',null) !!}
    {!! Form::label('hora_lbl', 'Hora de ingreso: ', ['class' => '']) !!}
    {!! Form::text('hora',null) !!}
    {!! Form::label('persona_lbl', 'Persona: ', ['class' => '']) !!}
    {!! Form::text('persona',null) !!}
    {!! Form::submit('Crear nuevo registro', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
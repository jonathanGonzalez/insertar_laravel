<h1>Página Editar</h1>
{!! Form::open(['url' => 'foo/bar']) !!}
    {!! Form::label('fecha_lbl', 'Fecha de ingreso: ', ['class' => '']) !!}
    {!! Form::text('fecha',null) !!}
    {!! Form::label('hora_lbl', 'Hora de ingreso: ', ['class' => '']) !!}
    {!! Form::text('hora',null) !!}
    {!! Form::label('persona_lbl', 'Persona: ', ['class' => '']) !!}
    {!! Form::text('persona',null) !!}
{!! Form::close() !!}
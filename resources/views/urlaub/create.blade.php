@extends('template')

@section('content')
    <h1>Eintrag erstellen</h1>
    {!! Form::open(['url' => 'urlaub']) !!}
    <div class="form-group">
        {!! Form::label('Von', 'Von:') !!}
        {!! Form::text('von',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Bis', 'Bis:') !!}
        {!! Form::text('bis',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Tage', 'Anzahl Tage:') !!}
        {!! Form::text('anzahlTage',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Speichern', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

@endsection

@extends('template')

@section('content')
    <h1>Eintrag bearbeiten</h1>
    {!! Form::model($urlaub,['method' => 'PATCH','route'=>['urlaub.update',$urlaub->id]]) !!}
    <div class="form-group">
        {!! Form::label('Von', 'Von:') !!}
        {!! Form::input('date','von',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Bis', 'Bis:') !!}
        {!! Form::input('date','bis',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Tage', 'Anzahl Tage:') !!}
        {!! Form::input('number','anzahlTage',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Änderungen speichern', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@stop

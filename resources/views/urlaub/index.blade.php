@extends('template')

@section('content')
<h1>Urlaubsverwaltung</h1>
<hr>
<h3>Eintrag erstellen</h3>
{!! Form::open(['class'=>'form-inline'],['url' => 'urlaub']) !!}
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
    {!! Form::submit('Eintrag erstellen', ['class' => 'btn btn-success form-control']) !!}
</div>
{!! Form::close() !!}
<br>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Von</th>
            <th>Bis</th>
            <th>Anzahl Tage</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>
        @foreach($urlaub as $urlb)
        <tr>
            <td>{{ $urlb->von }}</td>
            <td>{{ $urlb->bis }}</td>
            <td>{{ $urlb->anzahlTage }}</td>
            <td><a href="{{ route('urlaub.edit',$urlb->id) }}" class="btn btn-warning">Bearbeiten</a></td>
            <td>
                {!! Form::open(['method' => 'DELETE', 'route'=>['urlaub.destroy', $urlb->id]]) !!}
                {!! Form::submit('Löschen', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

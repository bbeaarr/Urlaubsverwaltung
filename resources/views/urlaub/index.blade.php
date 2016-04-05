@extends('template')

@section('content')
<h1>Urlaubsverwaltung</h1>
<a href="{{url('/urlaub/create')}}" class="btn btn-success">Eintrag erstellen</a>
<hr>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Von</th>
            <th>Bis</th>
            <th>Anzahl Tage</th>
            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>
        @foreach($urlaub as $urlb)
        <tr>
            <td>{{ $urlb->id }}</td>
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

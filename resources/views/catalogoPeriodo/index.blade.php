@extends('adminlte::page')

@section('title', 'Nuevo Balance General')

@section('content_header')
    <h1>Nuevo Balance General</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'catalogoPeriodo.import']) !!}
            <div class="form-group">
                {!! Form::label('File', 'Importar el Balance general') !!}
                {!! Form::file('file') !!}
                @error('file')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Importar', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Cuenta</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catalogoPeriodos as $catalogoPeriodo)
                        <tr>
                            <td>{{$catalogoPeriodo->id}}</td>
                            <td>{{$catalogoPeriodo->idCatalogo}}</td>
                            <td>{{$catalogoPeriodo->idPC}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
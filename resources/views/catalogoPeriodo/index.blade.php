@extends('adminlte::page')

@section('title', 'Balance General')

@section('content_header')
    <h1>Importar Balance General</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'catalogoPeriodo.import','enctype' => 'multipart/form-data', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('fecha_inicio', 'Fecha inicio periodo:') !!}
                {!! Form::date('fecha_inicio') !!}
                @error('fecha_inicio')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                {!! Form::label('fecha_fin', 'Fecha fin periodo:') !!}
                {!! Form::date('fecha_fin') !!}
                @error('fecha_fin')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('nombre', 'Seleccione Balance:') !!}
                {!! Form::file('balance') !!}
                @error('balance')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Importar', ['class'=>'btn btn-success']) !!}

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
                    @foreach ($catalogoPeriodos as $catalogo)
                        <tr>
                            <td>{{$catalogo->id}}</td>
                            <td>{{$catalogo->nombreCuenta}}</td> 
                            <td>{{$catalogo->saldo}}</td>            
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
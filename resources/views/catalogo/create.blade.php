@extends('adminlte::page')

@section('title', 'Nuevo Catalogo')

@section('content_header')
    <h1>Nuevo Catalogo</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'catalogo.import','enctype' => 'multipart/form-data', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Seleccione Catalogo:') !!}
                {!! Form::file('catalogo') !!}
                @error('catalogo')
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
                        <th>Codigo</th>
                        <th>Nombre Cuenta</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catalogos as $catalogo)
                        <tr>
                            <td>{{$catalogo->id}}</td>
                            <td>{{$catalogo->codigo}}</td> 
                            <td>{{$catalogo->nombreCuenta}}</td>            
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

@extends('adminlte::page')

@section('title', 'Nuevo Catalogo')

@section('content_header')
    <h1>Nuevo Catalogo</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'catalogo.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Seleccione Catalogo:') !!}
                {!! Form::file('catalogo') !!}
                @error('catalogo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

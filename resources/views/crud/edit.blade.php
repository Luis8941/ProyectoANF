@extends('adminlte::page')

@section('title', 'Editar Empresas')

@section('content_header')
    <h1>EDITAR EMPRESA {{$empresa->nombre}}</h1>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="alert alert-success">
            <strong>{{session('mensaje')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($empresa,['route'=>['crud.empresa.update',$empresa],
                                'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Digite nombre la empresa']) !!}
            @error('nombre')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('sector', 'Sector') !!}
            {!! Form::text('sector', null, ['class'=>'form-control', 'placeholder'=>'Digita sector de la empresa']) !!}
            @error('sector')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Actualizar Empresa', ['class'=>'btn btn-primary']) !!}

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

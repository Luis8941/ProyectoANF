@extends('adminlte::page')

@section('title', 'Lista de Empresas')

@section('content_header')
    <h1>EMPRESA</h1>
@stop

@section('content')
    @if (session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
    @endif
    <p>Pantalla Inicial</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

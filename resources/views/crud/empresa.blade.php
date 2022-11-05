@extends('adminlte::page')

@section('title', 'Lista de Empresas')

@section('content_header')
    <h1>VISTA DE EMPRESA</h1>
@stop

@section('content')
    @if (session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
    @endif
    <div class="card-header">
        <a href="{{route('crud.empresa.create')}}" class="btn btn-primary">Nueva Empresa</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Sector</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                        <tr>
                            <td>{{$empresa->id}}</td>
                            <td>{{$empresa->nombre}}</td>
                            <td>{{$empresa->sector}}</td>
                            <td><a href="{{route('crud.empresa.edit', $empresa)}}" class="btn btn-primary btn-sm">Editar</a></td>
                            <td>
                                <form action="{{route('crud.empresa.destroy', $empresa)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                                </form>
                            </td>
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

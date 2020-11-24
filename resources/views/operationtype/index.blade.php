@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tipos de operaciones</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8">
            @include('custom.message')
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Tipos de operaciones</h4>
                    <div class="card-tools">
                        <a href="{{ route('operationtype.create') }}"><span class="badge badge-primary"><i class="fas fa-plus"></i> Nuevo</span></a>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($operationtypes as $operationtype)
                                    <tr>
                                        <td>{{$operationtype->name}}</td>
                                        <td>{{$operationtype->description}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <form action="{{ route('operationtype.destroy', $operationtype->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Desea eliminar el tipo de inmueble {{$operationtype->name}}')" class="btn btn-danger btn-sm" href="{{ route('user.destroy', $operationtype->id) }}"><i class="fas fa-trash"></i></button>
                                                </form>
                                                <a type="button" class="btn btn-success btn-sm" href="{{ route('operationtype.edit', $operationtype->id) }}"><i class="fas fa-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $operationtypes->links() }}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function () {
    });
</script>
@stop

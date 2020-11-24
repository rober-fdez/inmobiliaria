@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8">
            @include('custom.message')
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Usuarios</h4>
                    <div class="card-tools">
                        <a href="{{ route('user.create') }}"><span class="badge badge-primary"><i class="fas fa-plus"></i> Nuevo</span></a>
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
                                <th scope="col">Correo</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Estatus</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->cell_phone}}</td>
                                        @if ($user->status == 1)
                                            <td>Activo</td>
                                        @else
                                            <td>Deshabilitado</td>
                                        @endif
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Desea eliminar el usuario {{$user->name}}')" class="btn btn-danger btn-sm" href="{{ route('user.destroy', $user->id) }}"><i class="fas fa-trash"></i></button>
                                                </form>
                                                @if ($user->status == 1)
                                                    <a type="button" class="btn btn-warning btn-sm" href="{{ route('inactivate-user', $user->id) }}"><i class="fas fa-minus"></i></a>
                                                @else
                                                    <a type="button" class="btn btn-primary btn-sm" href="{{ route('active-user', $user->id) }}"><i class="fas fa-plus"></i></a>
                                                @endif
                                                <a type="button" class="btn btn-success btn-sm" href="{{ route('user.edit', $user->id) }}"><i class="fas fa-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $users->links() }}
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

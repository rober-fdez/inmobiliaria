@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('user.index')}}">Usuarios</a></li>
          <li class="breadcrumb-item active" aria-current="page">Crear</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8">
            @include('custom.message')
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Crear nuevo usuario</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="cell_phone">Tel. Celular</label>
                            <input type="text" class="form-control" id="cell_phone" name="cell_phone" cell_phone="cell_phone" value="{{old('cell_phone')}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña<span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirmar contraseña<span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"> Guardar</i></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
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

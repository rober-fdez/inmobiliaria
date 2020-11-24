@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @include('custom.message')
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Editar usuario {{$user->name}}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nombre<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="cell_phone">Tel. Celular</label>
                            <input type="text" class="form-control" id="cell_phone" name="cell_phone" cell_phone="cell_phone" value="{{ $user->cell_phone}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Nueva contraseña<span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirmar contraseña<span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
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

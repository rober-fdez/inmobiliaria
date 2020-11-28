@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('area.index')}}">Áreas</a></li>
          <li class="breadcrumb-item active" aria-current="page">Crear</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8">
            @include('custom.message')
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Crear nueva área</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('area.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" class="form-control" id="description" name="description" description="description" value="{{old('description')}}">
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

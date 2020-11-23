@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Inicio / Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Usuarios</h3>
        <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Label</span>
        </div>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                {{$dataTable->table()}}
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        The footer of the card
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script> --}}
    {{$dataTable->scripts()}}
@stop

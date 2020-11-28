@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Propiedades</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            @include('custom.message')
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Propiedades</h4>
                    <div class="card-tools">
                        <a href="{{ route('property.create') }}"><span class="badge badge-primary"><i class="fas fa-plus"></i> Nueva</span></a>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Page Content -->
                    {{-- <div class="container"> --}}
                        <div class="row text-center text-lg-left">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <a href="#" class="d-block mb-4 h-100">
                                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                                            </a>
                                    </div>
                                    <div>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero magnam optio, doloremque alias quo quas repellat delectus amet voluptatem sint, quam a dignissimos ratione ex et aliquam excepturi numquam impedit?
                                    </div>

                                </div>
                              </div>
                              <!-- /.card -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                                        </a>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                  The footer of the card
                                </div>
                                <!-- /.card-footer -->
                              </div>
                              <!-- /.card -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                                        </a>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                  The footer of the card
                                </div>
                                <!-- /.card-footer -->
                              </div>
                              <!-- /.card -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                                        </a>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                  The footer of the card
                                </div>
                                <!-- /.card-footer -->
                              </div>
                              <!-- /.card -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                                </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
                                </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
                                </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
                                </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
                                </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
                                </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
                                </a>
                        </div>
                        {{-- </div> --}}

                    {{-- </div> --}}
                    <!-- /.container -->
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

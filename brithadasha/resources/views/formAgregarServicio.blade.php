@extends('layouts.plantilla')

@section('title','Admin Servicios')

@section('content')



    <div class=" col-md-9 mt-1 p-1 mx-auto mx-3 container-fluid">
<h1>@yield('h1')</h1>
</div>
<div class="mx-auto mt-1 p-1  col-6 table table-bordered table-hover table-striped alert bg-light p-4">

    <form action="/admin/servicios/add" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="rol_name">Servicio:</label>
            <input type="text" class="form-control" name="rol_name"  value="{{ old('rol_name') }}" id="rol_name" placeholder="Nombre del Servicio">
        </div>

        <div class="form-group">
            <label for="rol_description">Descripcion:</label>
            <input type="text" class="form-control" name="rol_description"  value="{{ old('rol_description') }}" id="rol_description" placeholder="Description del Servicio">
        </div>

        Imagen: <br>
        <input type="file" name="rol_img" class="form-control">
        <br>
        <button type="submit" class="btn btn-dark px-4">
            <i class="far fa-plus-square fa-lg mr-2"></i>
            Agregar Servicio
        </button>
        <a href="/admin/servicios/index" class="btn btn-outline-secondary ml-3">
            Ir al panel de Servicios
        </a>

        @if(count($errors))
            <div class="form-group mt-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

    </form>
</div>

    @endsection

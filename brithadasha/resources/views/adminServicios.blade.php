@extends('layouts.plantilla')

@section('title','Admin Servicios')

@section('content')

    {{-- mensajes de ok --}}
    @if( session()->has('mensaje') )
        <div class="alert alert-success">
            {{ session()->get('mensaje') }}
        </div>
    @endif

    <table class=" mx-auto mt-1 p-1  col-6 table table-bordered table-hover table-striped">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Servicio</th>
            <th>Descripcion</th>
            <th>Miniatura</th>
            <th></th>
            <th></th>
            {{-- <th colspan="2">
                 <a href="/formAgregarservicio" class="btn btn-dark">Agregar</a>
             </th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach( $servicios as $servicio )
            <tr>
                <td>{{$servicio->rol_id}}</td>
                <td>{{$servicio->rol_name}}</td>
                <td>{{$servicio->rol_descripcion}}</td>
                <td><img  src="{{ asset('images/servicios') }}/{{ $servicio->rol_img  }}" class="img-thumbnail" width="80px" ></td>
                <td>
                    <a href="formModificarservicio/{{$servicio->rol_id}}" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <form action="/admin/eliminarservicio/{{$servicio->rol_id}}">
                        @csrf
                        <button type="submit" onclick="return confirm('¿Desea eliminar ésta servicio?')" class="btn btn-outline-secondary">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        <th colspan="1">
            <a href="/admin/servicios/add" class="btn btn-dark">Agregar</a>
        </th>
       {{-- <th>{{ $servicios->links() }}</th>--}}
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        </tbody>
    </table>


    @endsection


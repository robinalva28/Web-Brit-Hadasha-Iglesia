@extends('layouts.plantilla')

@section('title','Admin Servicios')

@section('content')


    <table role="table" class="table  table-hover table-striped table-borderless mx-auto mt-1 p-1 col-md-12 ">

        <thead role="rowgroup" class="thead-dark">


            @if(Auth::user()->isAdmin)
           {{--     <h3><strong>PUBLICACIONES DE {{strtoupper($productos[0]->getUsuario->nombre
                            . ' '.$productos[0]->getUsuario->apellido)}}</strong></h3>--}}
            @else
                <h3><strong>@yield('h1')</strong></h3>
            @endif


        <tr role="row" class="mr-3">
            <th role="columnheader" >Nombre</th>
            <th role="columnheader" >Apellido</th>
            <th role="columnheader" >Email</th>
            <th role="columnheader">Servicios</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody role="rowgroup">
        @foreach( $users as $user )
            <tr role="row" >
                <td role="cell" class="tdnombre tabla-valor"><p>{{ $user->user_name }}</p></td>
                <td role="cell" class="tdapellido tabla-valor"><p>{{ $user->user_surname }}</p></td>
                <td role="cell" class="tdemail tabla-valor"><p>{{$user->email}}</p></td>
                <td role="cell" class="tdservicios tabla-valor"><p>servicios</p></td>


                <td role="cell"  class="tabla-valor" colspan="1"><p>
                        <a href="formAddRol/{{$user->user_id}}" class="btn btn-outline-secondary">
                            Agregar Servicio
                        </a>
                    </p></td>
                <td role="cell"  class="tabla-valor" colspan="1"><p>
                    <form action="eliminarRol/{{$user->user_id}} " method="post">
                        @csrf
                        <button type="submit" onclick="return confirm('¿Desea eliminar éste producto?')" class="btn btn-outline-secondary">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>

        @endforeach

        <th role="columnheader" colspan="20">
            <a href="/formAgregarProducto" class="btn btn-dark">
                Nueva publicación
            </a>
            <br>
            <br>

        </th>



        </tbody>
    </table>

    @Endsection

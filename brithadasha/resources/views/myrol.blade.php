@extends('layouts.plantilla')

@section('title','Mi Servicio')

@section('content')

{{-- mensajes de ok --}}
@if( session()->has('mensaje') )
    <div class="alert alert-danger">
        {{ session()->get('mensaje') }}
    </div>
@endif

<?php $i= 0 ?>
@foreach($servicios as $servicio)

    <?php $i++ ?>
@endforeach

@if($i==0)
{{--MENSAJE A MOSTRAR SI EL USER LOGUEADO NO POSEE SERVICIOS ACTIVOS--}}

<div class="jumbotron col-8 mx-auto" style="border-radius: 14px">
   {{-- <a href="/todosLosProductos" class="btn btn-link">Ver todo</a>
    <a href="/allCategorias" class="btn btn-link">Ir a categorías</a>
    <a href="/" class="btn btn-link">Ir a principal</a>
   --}} <br>
    <h1 class="display-4">¡Aun no perteneces a ningun servicio!</h1>
    <p class="lead">Puedes anotarte al servicio que desees haciendo click <a href="https://docs.google.com/forms/d/e/1FAIpQLSfvPMMSXtR8QUIZLcl1sMnxa_r70Qic8qjbOK3BCFyKL6WviA/viewform?usp=sf_link">
            aqui.</a></p>
   {{-- <hr class="my-4">
    <p>Si ya existen productos y/o servicios publicados recarga la página.</p>
    <a class="btn btn-primary btn-lg" href="/formAgregarProducto" role="button">Nueva publicación</a>--}}
</div>

@else

    @foreach ($servicios as $servicio)

            <div class="container">
                <div class="row col-6 h1">Mis Servicios</div><br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-light">
                            <img src="{{asset('img/Alabanza.jpg')}}" class="card-img-top" alt="imagen del servicio">
                            <div class="card-body">
                                <h5 class="card-title">{{$servicio->rol_name}}</h5>
                                <p class="card-text">Este es un texto que describe las responsabilidades y beneficios de pertenecer al servicio de alabanza.</p>
                            </div>
                        </div>

        @endforeach

@endif

        {{--
        <div class="container">
            <div class="row col-6 h1">Mis Servicios</div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card bg-light">
                        <img src="{{asset('img/Alabanza.jpg')}}" class="card-img-top" alt="imagen del servicio">
                        <div class="card-body">
                            <h5 class="card-title">Alabanza</h5>
                            <p class="card-text">Este es un texto que describe las responsabilidades y beneficios de pertenecer al servicio de alabanza.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>--}}
    </div>
</div>

@endsection

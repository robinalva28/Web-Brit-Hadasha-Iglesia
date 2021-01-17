@extends('layouts.plantilla')

@section('title','Mi Servicio')

@section('content')

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
       {{-- <div class="col">
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

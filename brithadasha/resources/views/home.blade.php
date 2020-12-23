@extends('layouts.plantilla')
@section('title','Inicio')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    You are logged in!<br>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit">logout!</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

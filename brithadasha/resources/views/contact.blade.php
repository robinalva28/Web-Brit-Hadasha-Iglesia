@extends('layouts.plantilla')

@section('title','Contact')

@section('content')
    <form action="#">
        <div class="container col-lg-4 p-3">
            <div class="card-header">{{ __('Contact') }}</div>
            <div class="bg-light p-4" style="border-radius: 5px;">
                <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Leave an email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="mail@ejemplo.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Leave a message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-success" value="Contact">
            </div>
        </div>
    </form>
@endsection

@extends('layouts.plantilla')

@section('title','Register')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card border-0 bg-transparent ">
                <div class="card-header border-0">{{ __('Register') }}</div>

                <div class="card-body bg-light">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{--NAME--}}
                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="user_name" type="text" class="bg-transparent form-control @error('user_name') is-invalid @enderror" name="user_name"
                                       value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                  {{--      --}}{{--SURNAME--}}{{--
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('user_surname') is-invalid @enderror" name="user_surname"
                                       value="{{ old('user_surname') }}" required autocomplete="surname" autofocus>

                                @error('user_surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        --}}{{--DATE OF BIRTH--}}{{--
                         <div class="form-group row">
                                <label for="user_birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>

                                <div class="col-md-6">
                                    <input id="user_birthdate" type="date" class="form-control @error('user_birthdate') is-invalid @enderror" name="user_birthdate"
                                           value="{{ old('user_birthdate') }}" required autocomplete="user_birthdate" autofocus>

                                    @error('user_birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>--}}


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-transparent form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-transparent form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="bg-transparent form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

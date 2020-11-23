@extends('layout')

@section('title', __('sign up'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <x-card class="signup-card" :header="__('sign up')">
                    <x-form method="POST" route="signup">
                        <div class="form-group">
                            <label for="username">
                                {{ __('username') }}
                            </label>

                            <input
                                name="username" id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror"
                                value="{{ old('username') }}" autocomplete="username" autofocus>

                            @error('username')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('e-mail address') }}</label>

                            <input
                                name="email" id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                autocomplete="email">

                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('password') }}</label>

                            <input
                                name="password" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                autocomplete="new-password">

                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('confirm password') }}</label>

                            <input
                                name="password_confirmation" id="password-confirm" type="password"
                                class="form-control" autocomplete="new-password">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-primary">
                                {{ __('sign up') }}
                            </button>
                        </div>
                    </x-form>
                </x-card>
            </div>
        </div>
    </div>
@endsection

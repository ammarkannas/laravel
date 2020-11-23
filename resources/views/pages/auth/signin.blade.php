@extends('layout')

@section('title', __('sign in'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <x-card class="signin-card" :header="__('sign in')">
                    <x-form method="POST" route="signin">
                        <div class="form-group">
                            <label for="email">{{ __('e-mail address') }}</label>

                            <input
                                name="email" id="email" type="email" tabindex="1"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" autocomplete="email" autofocus>

                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="password">{{ __('password') }}</label>

                                <x-a class="small" route="password.request" :text="__('forgot your password?')" />
                            </div>

                            <input
                                name="password" id="password" type="password" tabindex="2"
                                class="form-control @error('password') is-invalid @enderror"
                                autocomplete="current-password">

                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input
                                    name="remember" class="form-check-input" type="checkbox" tabindex="3"
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('remember me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" tabindex="4">
                                {{ __('sign in') }}
                            </button>
                        </div>
                    </x-form>
                </x-card>
            </div>
        </div>
    </div>
@endsection

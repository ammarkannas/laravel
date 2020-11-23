@extends('layouts.app')

@section('title', __('reset password'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <x-card class="password-reset-card" :header="__('reset password')">
                    <x-form method="POST" route="password.update">
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label for="email">{{ __('e-mail address') }}</label>

                            <input
                                name="email" id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

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

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">
                                {{ __('reset password') }}
                            </button>
                        </div>
                    </x-form>
                </x-card>
            </div>
        </div>
    </div>
@endsection

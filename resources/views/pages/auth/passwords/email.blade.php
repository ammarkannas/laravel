@extends('layouts.app')

@section('title', __('reset password'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <x-card class="password-reset-card" :header="__('reset password')">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-form method="POST" route="password.email">
                        <div class="form-group">
                            <label for="email">{{ __('e-mail address') }}</label>

                            <input
                                name="email" id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-primary">
                                {{ __('send password reset link') }}
                            </button>
                        </div>
                    </x-form>
                </x-card>
            </div>
        </div>
    </div>
@endsection

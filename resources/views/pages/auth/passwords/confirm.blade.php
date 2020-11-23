@extends('layouts.app')

@section('title', __('confirm password'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <x-card class="password-confirm-card" header="{{ __('confirm password') }}">
                    {{ __('please confirm your password before continuing.') }}

                    <x-form>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="password">{{ __('password') }}</label>
                                <x-a class="small" route="password.request" :text="__('forgot pour password?')" />
                            </div>

                            <input
                                name="password" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                autocomplete="current-password">

                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('confirm password') }}
                            </button>
                        </div>
                    </x-form>
                </x-card>
            </div>
        </div>
    </div>
@endsection

@extends('layout')

@section('title', __('verify your email address'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <x-card class="verify-email-card" :header="__('verify your email address')">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('a fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('before proceeding, please check your email for a verification link.') }}
                    {{ __('if you did not receive the email') }},

                    <x-form method="POST" route="verification.resend">
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                            {{ __('click here to request another') }}
                        </button>
                    </x-form>
                </x-card>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<section class="content">
    <div class="card center card-login">
        <div class="card-header">
            <h3 class="card-header-text">{{ __('Verify Your Email Address') }}</h3>
        </div>
        <div class="card-body">
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }} <br>
            {{ __('If you did not receive the email') }}
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="login-button">{{ __('click here to request
                    another') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection

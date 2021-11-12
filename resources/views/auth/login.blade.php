@extends('layouts.app')

@section('content')
<h2 class="center">{{ __('Login') }}</h2>

<section class="content">
    <div class="card center card-login">
        <div class="card-header">
            <h3 class="card-header-text">{{ __('Login_Greetingstext') }}</h3>
        </div>
        <div class="card-body">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row ">
                    <div class="col-12 centered">
                        <form>
                            <div class="input-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input class="input-centered" type="email" name="email" />
                            </div>

                            <div class="input-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input class="input-centered" type="password" name="password" />
                            </div>

                            <button type="submit" class="login-button">Sign In</button>
                        </form>
                    </div>

                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="col-12 centered">
                <a href="" class="register-button">{{ __('Register') }}</a>
                <a href="" class="forgot-password-button">{{ __('Forgot Password') }}</a>
            </div>
        </div>
    </div>
</section>

@endsection

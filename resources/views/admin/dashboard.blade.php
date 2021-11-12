@extends('layouts.app')
@section('content')
<div class="center">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            {{ __('Hello Super Admin You are logged in!') }}
        </div>
    </div>
</div>

@endsection

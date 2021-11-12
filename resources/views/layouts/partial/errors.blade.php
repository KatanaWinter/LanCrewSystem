@if ($message = Session::get('success'))
<div class="centered alert alert-success alert-block">
    <strong>{!! $message !!}</strong>
    <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
</div>
@endif

@if ($message = Session::get('error'))
<div class="centered alert alert-danger alert-block">
    <strong>{!! $message !!}</strong>
    <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="centered alert alert-warning alert-block">
    <strong>{!! $message !!}</strong>
    <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
</div>
@endif

@if ($message = Session::get('info'))
<div class="centered alert alert-info alert-block">
    <strong class="">{!! $message !!}</strong>
    <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
</div>
@endif


@if ($message = Session::get('mailNotVerify'))
<div class="centered alert alert-info alert-block">

    <form class="login-form" method="POST" action="{{ route('register.resendVerifyMail') }}">
    {{-- <form class="login-form" method="POST" action="{{ route('verification.resend') }}"> --}}
        @csrf
        <div class="w100">
            <input name="hiddenEmail" type="hidden" value="{{ old('email') }}">
            <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong class="">{!! $message !!}</strong>
        </div>
        <button class="blue-button" type="submit">Resend Mail</button>
    </form>
</div>
@endif

{{-- @if ($errors->any())
<div class="centered alert alert-danger">
    Check the following errors :(
    <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
</div>
@endif --}}




@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

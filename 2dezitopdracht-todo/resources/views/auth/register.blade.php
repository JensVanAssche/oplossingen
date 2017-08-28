@extends('layouts.master')

@section ('title')

Registreer

@stop

@section('content')

<div class="content">
    <h1>Registreer</h1>
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <label for="name">Naam</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        <label for="email">E-Mail</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <label for="password">Wachtwoord</label>
        <input id="password" type="password" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <label for="password-confirm">Bevestig Wachtwoord</label>
        <input id="password-confirm" type="password" name="password_confirmation" required>

        <button type="submit">Registreer</button>
    </form>
</div>


@endsection

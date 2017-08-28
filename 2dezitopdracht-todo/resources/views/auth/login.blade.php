@extends('layouts.master')

@section ('title')

Login

@stop

@section('content')

<div class="content">
    @if (session('status'))
        <div class="session_error">{{ session('status') }}</div>
    @endif
    
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <label for="email">E-Mail</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

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

        <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Onthoudt mij </label>

        <button type="submit">Login</button>
    </form>
</div>

@endsection

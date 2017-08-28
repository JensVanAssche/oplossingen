@extends ('layouts.master')

@section ('title')

Home

@stop


@section ('content')

<div class="content">
	@if (session('status'))
        <div class="session_error">{{ session('status') }}</div>
    @endif

    <h1>Home</h1>
    <p>2de zit opdracht van Jens Van Assche</p>

    @if(Auth::check())

	@else

	<p>Registreer eerst of login</p>

	@endif
    
</div>


@stop
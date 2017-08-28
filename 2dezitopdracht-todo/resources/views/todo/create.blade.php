@extends ('layouts.master')

@section ('title')

Todo add

@stop


@section ('content')

<div class="content">
    <h1>Voeg item toe</h1>
    <a href="/todo" class="return">Terug</a>
    @if (count($errors))
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <form method="POST" action="/todo">
        {{ csrf_field() }}
        <label for="todo">Vul een taak in</label>
        <input type="text" id="todo" name="todo">
        <button type="submit">Voeg toe</button>
    </form>
</div>


@stop
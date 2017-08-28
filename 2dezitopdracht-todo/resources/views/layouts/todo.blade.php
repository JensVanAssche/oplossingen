@extends ('layouts.master')

@section ('title')

Todo

@stop


@section ('content')

@if(count($incompleteTodo) == 0 && count($completeTodo) == 0)

    <div class="content">
        @if (session('status'))
            <div class="session_notification">{{ session('status') }}</div>
        @endif
        
        <h1>Todo applicatie</h1>
        <p>nog geen items</p>
        <a href="todo/add">Voeg item toe</a>
    </div>

@else

<div class="content">
    @if (session('status'))
        <div class="session_notification">{{ session('status') }}</div>
    @endif

    <h1>Todo applicatie</h1>    
    <a href="todo/add">Voeg item toe</a>
    
    <h2>Todo</h2>
    @if (count($incompleteTodo) == 0)
        <p>Geen todo taken!</p>
    @else

    <ul class="todo">
        @foreach ($incompleteTodo as $todo)
            <li><a href="todo/edit_{{ $todo->id }}"><i class="fa-check-circle fa"></i></a> {{ $todo->todo }} <a href="todo/delete_{{ $todo->id }}"><i class="fa-times fa"></i></a></li>
        @endforeach
    </ul>
    @endif

    <h2>Done</h2>
    @if (count($completeTodo) == 0)
        <p>Geen done taken!</p>
    @else
    <ul class="done">
        @foreach ($completeTodo as $todo)
            <li><a href="todo/edit_{{ $todo->id }}"><i class="fa-check-circle fa"></i></a> <span>{{ $todo->todo }}</span> <a href="todo/delete_{{ $todo->id }}"><i class="fa-times fa"></i></a></li>
        @endforeach
    </ul>
    @endif
</div>

@endif

@stop
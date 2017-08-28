<div class="header">
    <ul>
        <li class="left"><a href="/">Home</a></li>
        @if(Auth::check())
        <li class="left">|</li>
        <li class="left"><a href="/dashboard">Dashboard</a></li>
        <li class="left">|</li>
        <li class="left"><a href="/todo">Todo</a></li>

        <li class="right"><a href="/logout">{{ Auth::user()->name }} (Logout)</a></li>
        @else
        <li class="right"><a href="/register">Registreer</a></li>
        <li class="right">|</li>
        <li class="right"><a href="/login">Login</a></li>
        @endif
    </ul>
</div>
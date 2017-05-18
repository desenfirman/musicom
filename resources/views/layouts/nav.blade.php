 <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <a class="navbar-brand" href="#">Logo</a>

    <div class="collapse navbar-collapse" >

        <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
             <a class="nav-link" href="/">Home</a>
         </li>
         @if(! Auth::check())
         <li class="nav-item active">
            <a class="nav-link" href="/register">Register</a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="/login">Login</a>
        </li>
        @endif
    </ul>

    <ul class="nav navbar-nav navbar-right">
     @if(Auth::check())
     <li class="nav-item navbar-right nav-link">
        You are signed in as {{ Auth::user()->username }}
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/logout">Logout</a>
    </li>
    @endif
</ul>
</div>
</nav>

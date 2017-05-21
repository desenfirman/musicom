  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top" role="navigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Logo</a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
               <a class="nav-link" href="/">Home</a>
           </li>
           @if(! Auth::check())
           <li class="nav-item ">
              <a class="nav-link" href="/register">Register</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
          </li>
          @endif
          @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="/">Discover</a>
          </li>
          @endif
        </ul>

    @if(Auth::check())

    <ul class="nav justify-content-end">

     <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>
                        <strong>{{ Auth::user()->username }}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>

                    <div class="dropdown-menu" style="width: 300px; left: -165px;">
                      <div class="navbar-login" >
                        <div class="row">
                            <div class="col-lg-5">
                                <p class="text-center">
                                    <span class="glyphicon glyphicon-user icon-size">DF</span>
                                </p>
                            </div>
                            <div class="col-lg-7">
                                <p class="text-left"><strong>{{ Auth::user()->username }}</strong></p>
                                <p class="text-left small">{{ Auth::user()->email }}</p>
                                <p class="text-left">
                                    <a href="/profile" class="btn btn-primary btn-block btn-sm">Profile</a>
                                </p>
                            </div>
                        </div>
                        <div class="dropdown-item">
                          <a href="/logout">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a>
                        </div>
                      </div>

                    </div>

    </li>
     <!-- <li class="nav-item navbar-right nav-link">
        You are signed in as {{ Auth::user()->username }}
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/logout">Logout</a>
    </li> -->

</ul>
@endif
</div>
</nav>

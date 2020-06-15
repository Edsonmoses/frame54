 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-customs navbar-fixed-top wt-bg" style="background: #000">
    <div class="container-fluid topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img class="frame-logo"src="/user/img/Frame54-G.svg" alt="Frame54-G" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
                <ul class="nav navbar-nav navbar-right">
                <li class="header2">
                    @if (Auth::guest())
                        <a href="{{ route('login') }}">LOGIN</a>
                    @else
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            LOGOUT
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </li>
                <li class="header2"><div class="divider"></div></li>
                <li class="header2">
                    @if (Auth::guest())
                    <a href="{{ route('register') }}">JOIN</a>
                    @else
                    <a href="{{ route('profile.profile', Auth::user()->id) }}">
                         <img alt="{{ Auth::user()->name }}" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image2" class="img-circle img-responsive">
                      <!--View Profile-->
                     </a>
                    @endif
                </li>
                <li class="joinUs">
                    @if (Auth::guest())
                     <a href="{{ route('submitPhoto') }}"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                        UPLOAD</a>
                    @else
                        <a href="{{ route('submitPhoto') }}"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                            UPLOAD</a>
                     @endif
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
     </div>
    <!-- /.container -->
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->

<header class="intro-header" style="background-image: url( @yield('bg-img'))" style="margin-top: 10%">
    <div class="container" style="display: none">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <div class="col-xs-10 col-xs-offset-1">
                        <form action="{{ route('search') }}" method="GET" role="search">
                            
                        <div class="input-group">
                        <input class="form-control" placeholder="Search . . ." name="term" id="ed-srch-term" type="text">
                        <div class="input-group-btn">
                        <button type="submit" id="searchbtn">
                        <i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        </div>
                        </form>
                        </div>
                    <h1>@yield('title')</h1>
                    <hr class="small">
                    <span class="subheading">@yield('sub-heading')</span>
                </div>
            </div>
        </div>
    </div>
</header>

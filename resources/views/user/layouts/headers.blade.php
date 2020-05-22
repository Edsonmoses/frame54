 <!-- Navigation -->
 <nav class="navbar navbar-default navbar-customs navbar-fixed-top" style="background:#fff">
    <div class="container-fluid topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="search-container">
                        <form action="{{ route('search') }}" method="GET" role="search">
                           
                        <div class="input-group">
                        <input class="form-control" placeholder="Search . . ." name="term" id="ed-srch-term" type="text">
                        <div class="input-group-btn">
                        <button type="submit" id="searchbtn">
                        search</button>
                        </div>
                        </div>
                        </form>
                   </div>
                </li>

                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="profile">About</a>
                </li>
                <li>
                    <a href="{{ route('submitPhoto') }}">Submit Photo</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li>
                    @if (Auth::guest())
                        <a href="{{ route('login') }}">Login</a>
                    @else
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </li>
                <li>
                    @if (Auth::guest())
                        <a href="{{ url('/') }}"></a>
                    @else
                    <a href="{{ route('profile.profile', Auth::user()->id) }}">
                         <img alt="{{ Auth::user()->name }}" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image2" class="img-circle img-responsive">
                      <!--View Profile-->
                     </a>
                    @endif
                </li>
                <li>
                    @if (Auth::guest())
                     <a href="{{ route('register') }}" style="margin-left:-40px">Join Us</a>
                     @endif
                </li>
                <li>
                     <a href="{{  url('/') }}"></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        <ul class="nav navbar-nav pull-sm-left menu2">
            <li>
                <a href="a">A</a>
            </li>
            <li>
                <a href="b">B</a>
            </li>
            <li>
                <a href="c">C</a>
            </li>
            <li>
                <a href="d">D</a>
            </li>
            <li>
                <a href="e">E</a>
            </li>
            <li>
                <a href="f">F</a>
            </li>
            <li>
                <a href="g">G</a>
            </li>
            <li>
                <a href="d">H</a>
            </li>
            <li>
                <a href="i">I</a>
            </li>
            <li>
                <a href="j">J</a>
            </li>
            <li>
                <a href="k">K</a>
            </li>
            <li>
                <a href="l">L</a>
            </li>
            <li>
                <a href="m">M</a>
            </li>
            <li>
                <a href="n">N</a>
            </li>
            <li>
                <a href="o">O</a>
            </li>
            <li>
                <a href="p">P</a>
            </li>
            <li>
                <a href="q">Q</a>
            </li>
            <li>
                <a href="r">R</a>
            </li>
            <li>
                <a href="s">S</a>
            </li>
            <li>
                <a href="t">T</a>
            </li>
            <li>
                <a href="u">U</a>
            </li>
            <li>
                <a href="v">V</a>
            </li>
            <li>
                <a href="w">W</a>
            </li>
            <li>
                <a href="x">X</a>
            </li>
            <li>
                <a href="y">Y</a>
            </li>
            <li>
                <a href="z">Z</a>
            </li>
        </ul>
    </div>
    <!-- /.container -->
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->

<header class="intro-header" style="background-image: url(@yield('bg-img')); margin-top:10%;">
    <div class="container" style=" display:none;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <div class="col-xs-10 col-xs-offset-1">
                        <form action="{{ route('search') }}" method="POST" role="search">
                            
                        <div class="input-group">
                        <input class="form-control" placeholder="Search . . ." name="query" id="ed-srch-term" type="text">
                        <div class="input-group-btn">
                        <button type="submit" id="searchbtn">
                        search</button>
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
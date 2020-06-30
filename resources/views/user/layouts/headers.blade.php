 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img class="frame-logo"src="/user/img/Frame54-W.svg" alt="Frame54-G" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <!-- Authentication Links -->
                   @guest
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                   </li>
                   <li><div class="divider"></div></li>
                   @if (Route::has('register'))
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Join') }}</a>
                       </li>
                   @endif
                   <li class="nav-item joinUs">
                    <a class="nav-link" href="{{ route('submitPhoto') }}"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                       UPLOAD</a>
                   </li>
               @else
                   <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }} <span class="caret"></span>
                       </a>

                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                       </div>
                   </li>
                   <li class="nav-item joinUs">
                    <a class="nav-link header2" href="{{ route('submitPhoto') }}"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                       UPLOAD</a>
                   </li>
               @endguest

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url(@yield('bg-img'))">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 style="text-align: left !important">@yield('title')</h3>
                            <form action="{{ route('search') }}" method="GET" role="search">

                            <div class="input-group">
                            <input class="form-control" placeholder="Search Free hi-resolution Afrocentric images" name="term" id="ed-srch-term" type="text">
                            <div class="input-group-btn">
                            <button type="submit" id="searchbtn">
                            <small>|</small><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                            </div>
                            </form>
                            </div>
                            <div style="clear: both"></div>
                        <span class="subheading" style="text-align: left !important; padding-left:78px;">@yield('sub-heading')</span>
                        <span class="subheading"><p class="photoby">Photo by :</p></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

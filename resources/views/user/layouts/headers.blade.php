 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-trans navbar-fixed-top">
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
                       <a class="nav-link" type="button" data-toggle="modal" data-target=".login-modal-lg">{{ __('Login') }}</a>
                   </li>
                   <li><div class="divider"></div></li>
                   @if (Route::has('register'))
                       <li class="nav-item">
                           <a class="nav-link" type="button" data-toggle="modal" data-target=".register-modal-lg">{{ __('Join') }}</a>
                       </li>
                   @endif
                   <li class="nav-item joinUs">
                    <a class="nav-link" href="{{ route('submitPhoto') }}"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                        SUBMIT PHOTO</a>
                   </li>
                   <li class="nav-item header-moon">
                    <a class="nav-link" href="#" id="darktheme"><i class="fa fa-moon-o" aria-hidden="true"></i></a>
                  </li>
               @else
               <li class="nav-item header-bell hbell">
                <a class="nav-link" href="#"><i class="fa fa-bell-o" aria-hidden="true"></i>
                </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle page-dots" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     ...
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <i class="fa fa-sort-asc" aria-hidden="true"></i>
                        <ul id="profile">
                            <li></li>
                            <li><a href="{{ route('home.blog') }}"> Blog</a></li>
                            <li></li>
                            <li><a href="{{ route('profile.collections', Auth::user()->id) }}"> Collections</a></li>
                            <li></li>
                            <li><a href="{{ route('profile.community', Auth::user()->id) }}"> Community</a></li>
                            <li></li>
                            <li><a href="{{ route('home.about') }}">About</a></li>
                            <li><a href="{{ route('home.press') }}">Press</a></li>
                            <li><a href="{{ route('home.developers') }}">API/Developer</a></li>
                     </ul>
                     <ul class="login-social">
                         <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                         <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                     <div style="border-top: 1px solid #fff; margin: 0px 0 10px 0 !important;"></div>
                     <div class="footer-out">
                        <a class="a" href="{{ route('home.help') }}">Help •</a>
                        <a class="artnames" href="{{ route('home.framelicense') }}"> License •</a>
                        <a class="artnames" href="{{ route('home.press') }}"> Press •</a>
                        <a class="artnames" href="{{ route('home.team') }}">Join the Team</a>
                     </div>
                    </div>
                </li>
                   <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img alt="{{ Auth::user()->name }}" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image2" class="img-circle img-responsive"> <!--<span class="caret"></span>-->
                       </a>

                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <i class="fa fa-sort-asc" aria-hidden="true"></i>
                           <ul id="profile">
                               <li></li>
                            <li><a href="{{ route('profile.profile', Auth::user()->id) }}"> View Profile</a></li>
                            <li></li>
                            <li><a href="{{ route('profile.analytics', Auth::user()->id) }}"> Analytics</a></li>
                            <li></li>
                            <li><a href="{{ route('profile.settings', Auth::user()->id) }}"> Account Settings</a></li>
                            <li></li>
                            <li><a href="{{ route('profile.following', Auth::user()->id) }}">Following</a></li>
                        </ul>
                        <div style="border-top: 1px solid #fff; margin: 10px 0 10px 0 !important;"></div>
                        <div class="footer-out">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>
                           <a class="artname" href="#"><b>@</b>{{Auth::user()->name }}</a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                        </div>
                       </div>
                   </li>
                   <li class="nav-item joinUs">
                    <a class="nav-link header2" href="{{ route('submitPhoto') }}"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                        SUBMIT PHOTO</a>
                   </li>
                   <li class="nav-item header-moon">
                     <a class="nav-link" href="#"><i class="fa fa-moon-o" aria-hidden="true"></i></a>
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
                <div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1">
                    <div class="site-heading">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2 style="text-align: left !important; color:#fff !important;">@yield('title')</h3>
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

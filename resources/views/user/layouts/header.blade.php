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
            
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <div class="search-container">
                        <form action="{{ route('search') }}" method="GET" role="search">
                           
                        <div class="input-group">
                        <input class="form-control" placeholder="Search . . ." name="term" id="ed-srch-term" type="text">
                        <div class="input-group-btn">
                        <button type="submit" id="searchbtn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </div>
                        </div>
                        </form>
                   </div>
                </li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Topics</a>
                </li>
                <li>
                    <a href="#">Explore</a>
                </li>
                <li class="dropdown">
                    <a href="#" onclick="myFunction()" class="dropbtn">....</a>
                    <div id="myDropdown" class="dropdown-content">
                        <i class="fa fa-caret-up"></i>
                        <p></p>
                        <a href="about">About</a>
                        <a href="wallpapers">Wallpapers</a>
                        <a href="blog">Blog</a>
                        <a href="collections">Collections</a>
                        <a href="community">Community</a>
                        <a href="history">History</a>
                        <a href="blog">Made with Frame54</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter-square " aria-hidden="true"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook-square " aria-hidden="true"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <hr/>
                        <ul class="nav navbar-nav">
                            <li><a href="#">Help</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Join the team</a></li>
                        </ul>
                      </div>
                </li>
                <li class="submitPhoto">
                    <a href="{{ route('submitPhoto') }}">Submit Photo</a>
                </li>
                <li><div class="divider"></div></li>
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
                <li class="joinUs">
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
        <!--/.scrollmenu-->
        <div class="scrollmenus">
            <a href="#Editorial" class="active-scroll">Editorial<span class="first-child"></span></a>
         <div class="scrollmenu">
            <a href="animals">Animals</a>
            <a href="athletics">Athletics</a>
            <a href="arts-&-culture">Arts & Culture</a>
            <a href="business-&-work">Business & Work</a>
            <a href="current-events">Current Events</a>
            <a href="fashion">Fashion</a>
            <a href="travel">Travel</a>
            <a href="history">History</a>
            <a href="film">Film</a>
            <a href="technology">Technology</a>
            <a href="health-&-wellness">Health & Wellness</a>
            <a href="nature">Nature</a>
            <a href="spirituality">Spirituality</a>
            <a href="food-&-drink">Food & Drink</a>
            <a href="people">People</a>
            <a href="textures-&-patterns">Textures & Patterns</a>
            <a href="experimental">Experimental</a>
            <a href="wallpapers">Wallpapers</a>
            <a href="interiors">Interiors</a>
            <a href="editorial">Editorial</a>
            <a href="family">Family</a>
            <a href="athletics">Athletics</a>
          </div>
          <a class="scroll-right" href="#View all">View all</a>
        </div>
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
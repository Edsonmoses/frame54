  <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12">
                    <img class="footer-logo"src="/user/img/Frame54-G.svg" alt="Frame54-G" />
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-6 col-lg-3">
                            <ul class="footer-menu">
                                <li><a href="{{ route('home.about') }}">About</a></li>
                                <li><a href="{{ route('home.blog') }}">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-6 col-lg-3">
                            <ul class="footer-menu">
                                <li><a href="{{ route('home.team') }}">Join the team</a></li>
                                <li><a href="{{ route('home.help') }}">Help Center</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-6 col-lg-3">
                            <ul class="footer-menu">
                                <li><a href="{{ route('home.press') }}">Press</a></li>
                                <li><a href="{{ route('home.framePolicy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-6 col-lg-3">
                            <ul class="footer-menu">
                                <li><a href="{{ route('home.conditions') }}">Terms</a></li>
                                <li><a href="{{ route('home.security') }}">Security</a></li>
                            </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8"></div>
                <div class="col-md-12 col-xs-12 col-sm-6 col-lg-4">
                    <ul class="list-inline footer-socials">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-sm">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-sm">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-sm">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-sm">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
                <p class="copyright text-muted">Copyright &copy; {{ config('app.name', 'Laravel') }} <?php echo date("Y"); ?></p>
            </div>
        </div>
    </footer>

  <!-- Collection modal -->
    <div class="modal fade bd-collection-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg collection">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-5 col-lg-5">
                    <img src="/user/img/holder.jpeg" alt="holder" />
                </div>
                <div class="col-md-7 col-xs-12 col-sm-7 col-lg-7">
                    <h2>Add to Collection</h2>
                    <form>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                <input type="text" class="form-control input" id="subject" placeholder="Create a new collection">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                <input type="text" class="form-control input" id="subject" readonly>
                                <span>0 Photos <br><i class='fa fa-lock' aria-hidden='true'></i> My first collection</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                <input type="text" class="form-control input" id="subject" readonly>
                                <span>0 Photos <br><i class='fa fa-lock' aria-hidden='true'></i> My first collection</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                <input type="text" class="form-control input" id="subject" readonly>
                                <span>0 Photos <br><i class='fa fa-lock' aria-hidden='true'></i> My first collection</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- Collection modal end -->
<!-- login Modal -->
<div class="modal fade login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-">
      <div class="modal-contents  login-section fadeInDown">
            <div class="modal-header popup-hd">
                <div class="popup-logo">
                    <img src="/user/img/Frame54-W.svg" alt="Frame54-W" />
                    <p>FREE Afrocentric stock photos shared by creators everywhere.</p>
                </div>
                <div class="popclose">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
        <div class="modal-body">
          <div class="containers">
            <div role="tabpanel">
                <div class="containers">
                <div class="row ">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs loginTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#loginTab" aria-controls="loginTab" role="tab" data-toggle="tab">SIGN IN</a>

                    </li>
                    <li role="presentation"><a href="#registerTab" aria-controls="registerTab" role="tab" data-toggle="tab">SIGN UP</a>

                    </li>
                </ul>
                    </div>
                </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="loginTab">
                        <div class="containers">
                            <div class="wrapper">
                              <div id="formContent">
                                <!-- Tabs Titles -->
                                <!-- Icon -->
                                <div class="fadeIn first">
                                  @if (session('status'))
                                  <div class="alert alert-success">
                                      {{ session('status') }}
                                  </div>
                                  @endif
                                  @if (session('warning'))
                                      <div class="alert alert-warning">
                                          {{ session('warning') }}
                                      </div>
                                  @endif
                                  <div class="panel-login">
                                  <div class="panel-heading">
                                    <div class="row ">
                                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-sm-10 col-lg-10 col-lg-offset-1">
                                            <div class="row ">
                                                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                                    <div class="networks-social">with your social network</div>
                                                </div>
                                                <div class="login-social">
                                                    <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                        <a class="btn-icon btn-block text-left " href="{{ url('login/google') }}"><span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google</a>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                        <a class="btn-icon btn-block text-left " href="{{ url('login/facebook') }}"><span><img src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1" width="25"></span> Facebook</a>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                        <a class="btn-icon btn-block text-left " href="{{ url('login/twitter') }}"><span><img src="https://img.icons8.com/color/48/000000/twitter.png" class="img-fluid mr-1" width="25"></span> Twitter</a>
                                                    </div>
                                                </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                                <div class="networks-social" style="font-size: 30px !important">or</div>
                                            </div>
                                            </div>
                                        </div>
                                  </div>
                                      <hr>
                                  </div>
                                 </div>
                                </div>

                                <!-- Login Form -->
                                <form id="login-form" role="form" method="POST" action="{{ route('login') }}">
                                  {{ csrf_field() }}
                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <input id="email" type="email" placeholder="E-Mail Address" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                 <br>
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                  </div>
                                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <input id="password" type="password" placeholder="Password" class="fadeIn third @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                  <br>
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                                  <div class="form-group row mb-0">
                                      <div class="form-check" style="float: left; padding-left: 52px; font-size: 17px; color: #666;">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                          <label class="form-check-label" for="remember" style="font-weight: 200 !important;">
                                              {{ __('Keep me signed in') }}
                                          </label>
                                      </div>
                                      @if (Route::has('password.request'))
                                      <a class="btn btn-link underlineHover" href="{{ route('password.request') }}" style=" margin-top:-15px !important; text-transform: none; float: right; padding-right: 81px; font-size: 17px; color: #666;">
                                          {{ __('Forgot your password?') }}
                                      </a>
                                     @endif
                                      <div class="col-md-12 offset-md-1">
                                          <div class=" text-center">
                                              <input type="submit" class="fadeIn fourth" style="font-size: 30px; padding:10px 36% 10px 24% !important;" value="Log In">
                                          </div>
                                          <div class="login-color">By joining Frame 54, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></div>
                                      </div>
                                  </div>

                                </form>
                              </div>
                            </div>
                          </div>
                        <!--loginTab-->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="registerTab">
                        <div class="containers">
                            <div class="wrapper">
                              <div id="formContent">
                                <!-- Tabs Titles -->
                                <!-- Icon -->
                                <div class="fadeIn first">
                                  <div class="panel-login">
                                    <div class="panel-heading">
                                        <div class="row ">
                                            <div class="col-md-10 col-md-offset-1 col-xs-10 col-sm-10 col-lg-10 col-lg-offset-1">
                                                <div class="row ">
                                                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                                        <div class="networks-social">with your social network</div>
                                                    </div>
                                                    <div class="login-social">
                                                        <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                            <a class="btn-icon btn-block text-left " href="{{ url('login/google') }}"><span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google</a>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                            <a class="btn-icon btn-block text-left " href="{{ url('login/facebook') }}"><span><img src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1" width="25"></span> Facebook</a>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                            <a class="btn-icon btn-block text-left " href="{{ url('login/twitter') }}"><span><img src="https://img.icons8.com/color/48/000000/twitter.png" class="img-fluid mr-1" width="25"></span> Twitter</a>
                                                        </div>
                                                    </div>
                                                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                                    <div class="networks-social" style="font-size: 30px !important">or</div>
                                                </div>
                                                </div>
                                            </div>
                                      </div>
                                        <hr>
                                    </div>
                                   </div>
                                </div>

                                <!-- Register Form -->
                                    <form id="register-form" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <input id="name" type="text" placeholder="{{ __('Name') }}" class="fadeIn second @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input id="password" type="password" placeholder="{{ __('Password') }}" class="fadeIn second @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                                            <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="fadeIn second" name="password_confirmation" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group row mb-0">
                                            <div class="text-center ml-5 ml-5-c">Your password should be at least 6 characters long and must contain letters,
                                                numbers & special characters. Cannot contain whitespace</div>
                                            <div class="checkbox login-colors ml-5 ">
                                                <label>
                                                <input type="checkbox" name="promotions" value="1" checked>I wish to receive news, promotions & the best photos from Frame 54 by email.
                                                </label>
                                            </div>
                                                <div class="text-center">
                                                    <input type="submit" class="fadeIn fourth" style="font-size: 1em; padding:10px 7% 10px 7% !important;" value="{{ __('Create your Frame 54 Account') }}">
                                                </div>
                                                <div class="login-color">By joining Frame 54, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                              </div>
                            </div>
                          </div>

                    <!--registerTab-->
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!--end login Model-->
  <!-- Register Modal -->
<div class="modal fade register-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-contents  login-section fadeInDown">
            <div class="modal-header popup-hd">
                <div class="popup-logo">
                    <img src="/user/img/Frame54-W.svg" alt="Frame54-W" />
                    <p>FREE Afrocentric stock photos & videos shared by creators everywhere.</p>
                </div>
                <div class="popclose">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
        <div class="modal-body">
          <div class="containers">
            <div role="tabpanel">
                <div class="containers">
                <div class="row ">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs loginTabs" role="tablist">
                    <li role="presentation"><a href="#loginTabs" aria-controls="loginTabs" role="tab" data-toggle="tab">SIGN IN</a>

                    </li>
                    <li role="presentation"  class="active"><a href="#registerTabs" aria-controls="registerTabs" role="tab" data-toggle="tab">SIGN UP</a>

                    </li>
                </ul>
                    </div>
                </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="loginTabs">
                        <div class="containers">
                            <div class="wrapper">
                              <div id="formContent">
                                <!-- Tabs Titles -->
                                <!-- Icon -->
                                <div class="fadeIn first">
                                  @if (session('status'))
                                  <div class="alert alert-success">
                                      {{ session('status') }}
                                  </div>
                                  @endif
                                  @if (session('warning'))
                                      <div class="alert alert-warning">
                                          {{ session('warning') }}
                                      </div>
                                  @endif
                                  <div class="panel-login">
                                  <div class="panel-heading">
                                    <div class="row ">
                                        <div class="col-md-10 col-md-offset-1 col-xs-10 col-sm-10 col-lg-10 col-lg-offset-1">
                                            <div class="row ">
                                                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                                    <div class="networks-social">with your social network</div>
                                                </div>
                                                <div class="login-social">
                                                    <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                        <a class="btn-icon btn-block text-left " href="{{ url('login/google') }}"><span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google</a>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                        <a class="btn-icon btn-block text-left " href="{{ url('login/facebook') }}"><span><img src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1" width="25"></span> Facebook</a>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                        <a class="btn-icon btn-block text-left " href="{{ url('login/twitter') }}"><span><img src="https://img.icons8.com/color/48/000000/twitter.png" class="img-fluid mr-1" width="25"></span> Twitter</a>
                                                    </div>
                                                </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                                <div class="networks-social" style="font-size: 30px !important">or</div>
                                            </div>
                                            </div>
                                        </div>
                                  </div>
                                      <hr>
                                  </div>
                                 </div>
                                </div>

                                <!-- Login Form -->
                                <form id="login-forms" role="form" method="POST" action="{{ route('login') }}">
                                  {{ csrf_field() }}
                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <input id="email" type="email" placeholder="E-Mail Address" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                 <br>
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                  </div>
                                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <input id="password" type="password" placeholder="Password" class="fadeIn third @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                  <br>
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                                  <div class="form-group row mb-0">
                                      <div class="form-check" style="float: left; padding-left: 52px; font-size: 17px; color: #666;">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                          <label class="form-check-label" for="remember" style="font-weight: 200 !important">
                                              {{ __('Keep me signed in') }}
                                          </label>
                                      </div>
                                      @if (Route::has('password.request'))
                                      <a class="btn btn-link underlineHover" href="{{ route('password.request') }}" style="text-transform: none; margin-top:-15px; float: right; padding-right: 81px; font-size: 17px; color: #666;">
                                          {{ __('Forgot your password?') }}
                                      </a>
                                     @endif
                                      <div class="col-md-12 offset-md-1">
                                          <div class=" text-center">
                                              <input type="submit" class="fadeIn fourth" style="font-size: 30px; padding:10px 36% 10px 24% !important;" value="Log In">
                                          </div>
                                          <div class="login-color">By joining Frame 54, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></div>
                                      </div>
                                  </div>

                                </form>
                              </div>
                            </div>
                          </div>
                        <!--loginTab-->
                    </div>
                    <div role="tabpanel" class="tab-pane  active" id="registerTabs">
                        <div class="containers">
                            <div class="wrapper">
                              <div id="formContent">
                                <!-- Tabs Titles -->
                                <!-- Icon -->
                                <div class="fadeIn first">
                                  <div class="panel-login">
                                    <div class="panel-heading">
                                        <div class="row ">
                                            <div class="col-md-10 col-md-offset-1 col-xs-10 col-sm-10 col-lg-10 col-lg-offset-1">
                                                <div class="row ">
                                                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                                        <div class="networks-social">with your social network</div>
                                                    </div>
                                                    <div class="login-social">
                                                        <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                            <a class="btn-icon btn-block text-left " href="{{ url('login/google') }}"><span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google</a>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                            <a class="btn-icon btn-block text-left " href="{{ url('login/facebook') }}"><span><img src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1" width="25"></span> Facebook</a>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                            <a class="btn-icon btn-block text-left " href="{{ url('login/twitter') }}"><span><img src="https://img.icons8.com/color/48/000000/twitter.png" class="img-fluid mr-1" width="25"></span> Twitter</a>
                                                        </div>
                                                    </div>
                                                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                                    <div class="networks-social" style="font-size: 30px !important">or</div>
                                                </div>
                                                </div>
                                            </div>
                                      </div>
                                        <hr>
                                    </div>
                                   </div>
                                </div>

                                <!-- Register Form -->
                                    <form id="register-forms" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <input id="name" type="text" placeholder="{{ __('Name') }}" class="fadeIn second @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input id="password" type="password" placeholder="{{ __('Password') }}" class="fadeIn second @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                                            <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="fadeIn second" name="password_confirmation" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group row mb-0">
                                            <div class="text-center ml-5 ml-5-c">Your password should be at least 6 characters long and must contain letters,
                                                numbers & special characters. Cannot contain whitespace</div>
                                            <div class="checkbox login-colors ml-5 ">
                                                <label>
                                                <input type="checkbox" name="promotions" value="1" checked>I wish to receive news, promotions & the best photos from Frame 54 by email.
                                                </label>
                                            </div>
                                                <div class="text-center">
                                                    <input type="submit" class="fadeIn fourth" style="font-size: 1em; padding:10px 7% 10px 7% !important;" value="{{ __('Create your Frame 54 Account') }}">
                                                </div>
                                                <div class="login-color">By joining Frame 54, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                              </div>
                            </div>
                          </div>

                    <!--registerTab-->
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!--like section-->
  <form class="form-horizontal" id="liked-form" method="POST" action="{{ route('post.like')}}" style="display: none">
    {{ csrf_field() }}

    <div class="col-md-5">
        <input id="like" hidden type="text" class="form-control" name="like" value="1">
</div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <div class="download" style="font-size: 25px; margin: 80px 0 30px 0;">
                        <button type="submit" style="padding: 15px 36px 15px 36px !important; background:#ff0000;">Delete account</button>

                    </div>
                </div>
            </div>
        </form>
  <!--end login Model-->
    <!-- jQuery -->
    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('user/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('user/js/contact_me.js') }}"></script>
   <!-- dropzone JavaScript-->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('user/js/clean-blog.min.js') }}"></script>
    <script type="text/javascript">
     $("a#darktheme").click(function()
        {
        $("#submit_this").submit();
        return false;
        });
        $(window).load(function(){
        $('#myModal').modal('show');
        $('#termsPopup').modal('show');
        $('#uGuidelines').modal('show');
            });

            $(".gal").masonry();

            $('.post').hover(
                function(){
                    $('#content').masonry('reload');
                },
                function(){
                    $('#content').masonry('reload');
                }
            );

    </script>

   <!-- //infinty loading -->
   <script type="text/javascript">
    var page = 1;

        $(window).scroll(function() {

            if($(window).scrollTop() + $(window).height() >= $(document).height()) {

                page++;

                loadMoreData(page);

            }

        });


        function loadMoreData(page){

          $.ajax(

                {

                    url: '?page=' + page,

                    type: "get",

                    beforeSend: function()

                    {

                        $('.ajax-load').show();

                    }

                })

                .done(function(data)

                {

                    if(data.html == " "){

                        $('.ajax-load').html("No more records found");

                        return;

                    }

                    $('.ajax-load').hide();

                    $("#post-data").append(data.html);

                })

                .fail(function(jqXHR, ajaxOptions, thrownError)

                {

                      alert('server not responding...');

                });

        }
            </script>
<script type="text/javascript">
    $(function() {

$('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
    });
    $(function() {

$('#login-form-links').click(function(e) {
    $("#login-forms").delay(100).fadeIn(100);
     $("#register-forms").fadeOut(100);
    $('#register-form-links').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-links').click(function(e) {
    $("#register-forms").delay(100).fadeIn(100);
     $("#login-forms").fadeOut(100);
    $('#login-form-links').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
    });
</script>
    @section('footer')
        @show

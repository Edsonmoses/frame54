@extends('user/app')

@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')

@endsection
@section('title','Login Here')
@section('sub-heading','')

@section('main-content')
<div class="container" style="height: 400px">
  <!-- Register Modal -->
  <div class="modal fade registers-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                    <li role="presentation"><a href="#tabLogin" aria-controls="tabLogin" role="tab" data-toggle="tab">SIGN IN</a>

                    </li>
                    <li role="presentation"  class="active"><a href="#tabRegister" aria-controls="tabRegister" role="tab" data-toggle="tab">SIGN UP</a>

                    </li>
                </ul>
                    </div>
                </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="tabLogin">
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
                                                        <a class="btn-icon btn-block text-left " href="{{ url('/login/google') }}"><span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google</a>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                        <a class="btn-icon btn-block text-left " href="{{ url('/login/facebook') }}"><span><img src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1" width="25"></span> Facebook</a>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                        <a class="btn-icon btn-block text-left " href="{{ url('/login/twitter') }}"><span><img src="https://img.icons8.com/color/48/000000/twitter.png" class="img-fluid mr-1" width="25"></span> Twitter</a>
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
                                <form id="form-login" role="form" method="POST" action="{{ route('login') }}">
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
                    <div role="tabpanel" class="tab-pane  active" id="tabRegister">
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
                                                            <a class="btn-icon btn-block text-left " href="{{ url('/login/google') }}"><span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Google</a>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                            <a class="btn-icon btn-block text-left " href="{{ url('/login/facebook') }}"><span><img src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1" width="25"></span> Facebook</a>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4">
                                                            <a class="btn-icon btn-block text-left " href="{{ url('/login/twitter') }}"><span><img src="https://img.icons8.com/color/48/000000/twitter.png" class="img-fluid mr-1" width="25"></span> Twitter</a>
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
                                    <form id="form-register" method="POST" action="{{ route('register') }}">
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
  <!--end register Model-->
    </div>
@endsection
@section('footer')
<script type="text/javascript">
 $(window).load(function(){
        $('.registers-modal-lg').modal('show');
            });

    $(function() {

$('#link-login-form').click(function(e) {
    $("#form-login").delay(100).fadeIn(100);
     $("#form-register").fadeOut(100);
    $('#link-register-form').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#link-register-form').click(function(e) {
    $("#form-register").delay(100).fadeIn(100);
     $("#form-login").fadeOut(100);
    $('#link-login-form').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
    });
</script>
@endsection

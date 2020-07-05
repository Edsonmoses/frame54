@extends('user/app')

@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')

@endsection
@section('title','Login Here')
@section('sub-heading','')

@section('main-content')

<!-- Post Content -->
    <div class="container login-section">
      <div class="wrapper fadeInDown">
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
                    <div class="col-xs-6">
                        <a href="#" class="active" id="login-form-link">Login</a>
                    </div>
                    <div class="col-xs-6">
                        <a href="#" id="register-form-link">Register</a>
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
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" placeholder="Password" class="fadeIn third @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group row mb-0">
                <div class="form-check" style="float: left; padding-left: 87px; font-size: 17px; color: #666;">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember" style="font-weight: 200 !important">
                        {{ __('Keep me signed in') }}
                    </label>
                </div>
                @if (Route::has('password.request'))
                <a class="btn btn-link underlineHover" href="{{ route('password.request') }}" style="text-transform: none; float: right; padding-right: 81px; font-size: 17px; color: #666;">
                    {{ __('Forgot your password?') }}
                </a>
               @endif
                <div class="col-md-12 offset-md-1">
                    <div class=" text-center">
                        <input type="submit" class="fadeIn fourth" style="font-size: 30px; padding:10px 36% 10px 36% !important;" value="Log In">
                    </div>
                    <p class="login-color">By joining Frame 54, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></p>
                </div>
            </div>

          </form>
          <!-- Register Form -->
          <form id="register-form" method="POST" action="{{ route('register') }}" style="display: none;">
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

            <div class="form-group row mb-0">
                <p class="text-center">Your password should be at least 6 characters long and must contain letters,
                    numbers & special characters. Cannot contain whitespace</p>
                <div class="checkbox login-colors">
                    <label>
                      <input type="checkbox" name="promotions" value="1">I wish to receive news, promotions & the best photos from Frame 54 by email.
                    </label>
                  </div>
                <div class="col-md-12 offset-md-1">
                    <div class="text-center">
                        <input type="submit" class="fadeIn fourth" style="font-size: 30px; padding:10px 18% 10px 7% !important;" value="{{ __('Create your Frame 54 Account') }}">
                    </div>
                    <p class="login-color">By joining Frame 54, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></p>
                </div>
            </div>
        </form>

          <!-- Remind Passowrd -->
          <div id="formFooter" style="display:none">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
              </label>
          </div>
          <a href='{{ route('register') }}' class="btn btn-link underlineHover">
            JOIN
         </a>
           <a href="#"> |     </a>
            @if (Route::has('password.request'))
                <a class="btn btn-link underlineHover" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </div>

        </div>
      </div>
    </div>
@endsection
@section('footer')
@endsection

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
          <div class="fadeIn first"  style="padding-top:10px;">
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
            <img src="/user/img/Frame54-G.svg" id="icon" alt="Frame54 Logo" style="padding: 15px;" />
          </div>
       <a class="btn btn-link" href="{{ url('login/facebook') }}">Login with</a>
       <div class="container">
       <div class="row justify-content-center login-social">
        <div class="col-sm-3 mt-5">
            <a class="btn btn-icon btn-block text-left " href="{{url('/login/google') }}"><span><img src="https://img.icons8.com/color/48/000000/google-logo.png" class="img-fluid mr-1" width="25"></span> Login with Google</a></div>
        <div class="col-sm-3 mt-2"><a class="btn btn-icon btn-block text-left " href="{{ url('/login/facebook')}}"><span><img src="https://i.imgur.com/URmkevm.png" class="img-fluid mr-1" width="25"></span> Login with Facebook</a> </div>
        <div class="col-sm-3 mt-2"><a class="btn btn-icon btn-block text-left " href="{{ url('/login/twitter')  }}"><span><img src="https://img.icons8.com/color/48/000000/twitter.png" class="img-fluid mr-1" width="25"></span> Login with Twitter</a> </div>
    </div>
       </div>
      @if ($errors->any())
          <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
              @endforeach
          </div>
      @endif
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

        </div>
      </div>
    </div>
@endsection
@section('footer')
@endsection

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

          <!-- Login Form -->
          <form role="form" method="POST" action="{{ route('login') }}">
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
           <br/>
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>

          <!-- Remind Passowrd -->
          <div id="formFooter">
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

@extends('user/layouts/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','FREE Afrocentric stock photos & videos shared by creators everywhere.')
@section('sub-heading','Trending: ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		.fa-thumbs-up:hover{
			color:#f41115;
		}
	</style>
@endsection
@section('main-content')
	<!-- Main Content -->
	<div class="container">
		 <!--/.scrollmenu-->
		 <div class="scrollmenu">
			@foreach ($categories as $category)
				<a href="{{ route('category',$category->slug, $post->id) }}">{{ $category->name }}</a>
		   @endforeach
		  </div><br/>

	    <div class="row" id="app">
            <h3>Free PanAfrican Stock Photos</h3>
		   <div class="gal" id="post-data">
            @foreach ($posts as $posts)
                <div class="frame">

                <a href="{{ $posts->slug }}">
                    <div class="ftitle"><img alt="{{ $post->name ? $post->name : $post->title }}" src="/uploads/avatars/{{$post->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$post->name? $post->name : 'Frame54'}}</span></div>
                    <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img">
                    @if($posts->ads === 1)
                    <div class="fdetails"><span class="ads">AD</span></div>
                    @else
                    <div class="fdetails"><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('photo.download', $post->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span></div>
                    @endif
                </a>
                </div>
            @endforeach
            </div>
	    </div>
	</div>
	<div class="ajax-load text-center" style="display:none">

		<p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Images</p>

	</div>
    <hr>

<!-- login Modal -->
<div class="modal fade login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-contents  login-section fadeInDown">
            <div class="modal-header popup-hd">
                <div class="popup-logo">
                    <img src="/user/img/Frame54-W.svg" alt="Frame54-W" />
                    <p>FREE Afrocentric stock photos & videos shared by creators everywhere.1</p>
                </div>
                <div class="popclose">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
        <div class="modal-body">
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs loginTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#loginTab" aria-controls="loginTab" role="tab" data-toggle="tab">SIGN UP</a>

                    </li>
                    <li role="presentation"><a href="#registerTab" aria-controls="registerTab" role="tab" data-toggle="tab">SIGN IN</a>

                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="loginTab">
                        <div class="container">
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
                                      <p class="networks-social">with your social network</p>
                                      <div class="row ">
                                          <div class="col-xs-4">
                                            <a href="#" class="fa fa-google">  google</a>
                                          </div>
                                          <div class="col-xs-4">
                                            <a href="#" class="fa fa-facebook"> facebook</a>
                                          </div>
                                          <div class="col-xs-4">
                                            <a href="#" class="fa fa-twitter">  twitter</a>
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
                        <!--loginTab-->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="registerTab">
                        <div class="container">
                            <div class="wrapper">
                              <div id="formContent">
                                <!-- Tabs Titles -->
                                <!-- Icon -->
                                <div class="fadeIn first">
                                  <div class="panel-login">
                                    <div class="panel-heading">
                                        <p class="networks-social">with your social network</p>
                                        <div class="row ">
                                            <div class="col-xs-4">
                                              <a href="#" class="fa fa-google">  google</a>
                                            </div>
                                            <div class="col-xs-4">
                                              <a href="#" class="fa fa-facebook"> facebook</a>
                                            </div>
                                            <div class="col-xs-4">
                                              <a href="#" class="fa fa-twitter">  twitter</a>
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
  <!--end login Model-->

@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

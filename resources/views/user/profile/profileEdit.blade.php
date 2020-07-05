@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Bitfumes Blog')
@section('sub-heading','Learn Together and Grow Together')
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
    <!--Main row-->
    <div class="row">
    <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
        <h2>Edit Profile</h2>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-5 col-lg-3" >
        <div class="download">
            <a href="#"> <small class="btns"><i class="fa fa-check" aria-hidden="true"></i>Account Confirmed</small></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
            <img alt="{{Auth::user()->name}}" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image1" class="img-circle img-responsive">
            <form enctype="multipart/form-data" action="{{route('profile.updateAvatar')}}" method="POST">
                <label>Change your profile image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="download">
                <input type="submit" value="Update Avatar" class="btns">
                </div>
                <br>
              </form>
        </div>
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
        <form role="form" action="{{ route('profile.update',Auth::user()->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="@if (old('name')){{ old('name') }}@else{{ $user->name }}@endif">
                </div>

                <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="@if (old('lname')){{ old('lname') }}@else{{ $user->lname }}@endif">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" value="@if (old('email')){{ old('email') }}@else{{ $user->email }}@endif">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City" value="@if (old('city')){{ old('city') }}@else{{ $user->city}}@endif">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="@if (old('country')){{ old('country') }}@else{{ $user->country}}@endif">
                </div>
                <div class="form-group">
                    <label for="birth">Date of Birth</label>
                    <input type="date" class="form-control" id="birth" name="birth" placeholder="Date of Birth" value="@if (old('birth')){{ old('birth') }}@else{{ $user->birth}}@endif">
                </div>
            </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label for="username">Username <small>(only letters, numbers & underscores)</small></label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="username" value="@if (old('username')){{ old('username') }}@else{{ $user->username}}@endif">
                    </div>

                    <div class="form-group">
                    <label for="portfolio">Personal site/Portfolio</label>
                    <input type="text" class="form-control" id="portfolio" name="portfolio" placeholder="portfolio" value="@if (old('portfolio')){{ old('portfolio') }}@else{{ $user->portfolio}}@endif">
                    </div>
                    <div class="form-group">
                        <label for="interests">Interests <small>(maximum 5)</small></label>
                        <input type="text" class="form-control" id="interests" name="interests" placeholder="Interests" value="@if (old('interests')){{ old('interests') }}@else{{ $user->interests}}@endif">
                    </div>
                   <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea rows="4" cols="50" class="form-control" id="bio" name="bio" placeholder="bio" value="@if (old('bio')){{ old('bio') }}@else{{ $user->bio}}@endif">@if (old('bio')){{ old('bio') }}@else{{ $user->bio}}@endif</textarea>
                  </div>
            </div>
                <div class="col-lg-6">
                    <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="location" value="@if (old('location')){{ old('location') }}@else{{ $user->location}}@endif">
                    </div>

                    <div class="form-group">

                    <label for="twitter">Twitter username</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter" value="@if (old('twitter')){{ old('twitter') }}@else{{ $user->twitter}}@endif">
                    <small>So that we can feature you on @frame54</small>
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram username</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram" value="@if (old('instagram')){{ old('instagram') }}@else{{ $user->instagram}}@endif">
                        <small>So that we can feature you on @frame54</small>
                    </div>
                    <div class="form-group">
                        <label for="paypal">PayPal address or Merchant ID for receiving donations</label>
                        <input type="text" class="form-control" id="paypal" name="paypal" placeholder="PayPal address or Merchant ID for receiving donations" value="@if (old('paypal')){{ old('paypal') }}@else{{ $user->paypal}}@endif">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" name="messages" value="1"> Display a ‘Message‘ button on your profile
                            </label>
                          </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="download text-center" style="font-size: 25px; margin: 80px 0 30px 0;">
                    <button type="submit" class="btns" style="padding: 15px 36px 15px 36px !important;">Update Account </button>

                </div>
            </div>
        </div>
    </form>
  </div>
  <!--Main row end-->
  <hr>
  <div class="row">
      <h2>Account Settings</h2>
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <ul class="footer-menu">
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#">Email settingsr</a></li>
        </ul>
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <ul class="footer-menu">
            <li><a href="#">Change password</a></li>
            <li><a href="#">Connect accounts</a></li>
        </ul>
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <ul class="footer-menu">
            <li><a href="#">Applications</a></li>
            <li><a href="#">Close account</a></li>
        </ul>
    </div>
</div>
  </div>
	<hr>
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
@endsection

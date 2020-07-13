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
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
        <h2>Email Settings</h2>
        <p>Send me emails related to:</p>
        <form role="form" action="{{ route('profile.updateEmail',Auth::user()->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}
        <div class="row">
            <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Announcements
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Community Updates
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Curated Collections
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Events Near Me
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Feedback & Surveys
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Milestones and Notifications
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Recommended Photos, Collections, & Photographers
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Resources, Tips, & Guides
                  </label>
                </div>
              </div>
        </div>
     </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="download" style="font-size: 25px; margin: 80px 0 30px 0;">
                    <button type="submit" class="btns" style="padding: 15px 36px 15px 36px !important;">Update email settings</button>

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
            <li><a href="{{ route('profile.profile', Auth::user()->id) }}">Edit Profile</a></li>
            <li><a class="active" href="{{ route('profile.emailSetting', Auth::user()->id) }}">Email setting</a></li>
        </ul>
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <ul class="footer-menu">
            <li><a href="/changePassword">Change password</a></li>
            <li><a href="{{ route('profile.connect', Auth::user()->id) }}">Connect accounts</a></li>
        </ul>
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <ul class="footer-menu">
            <li><a href="{{ route('profile.applications', Auth::user()->id) }}">Applications</a></li>
            <li><a href="{{ route('profile.close', Auth::user()->id) }}">Close account</a></li>
        </ul>
    </div>
</div>
<hr>
  </div>

@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
@endsection

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
	<div class="container close-section">
    <!--Main row-->
    <div class="row sheight">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" >
        <h2>Close account</h2>
        <h3>WARNING:</h3>
         <p>Closing your account is irreversible. It deletes all of your photos, collections and stats.</p>
         <p>This actions takes 2 weeks to delete all your data.</p>
          <div class="container" >
                    <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="new-password" class="control-label">Current Password</label>
                                <input id="application" type="text" class="form-control" name="application">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                <div class="download" style="font-size: 25px; margin: 80px 0 30px 0;">
                                    <button type="submit" style="padding: 15px 36px 15px 36px !important; background:#ff0000;">Delete account</button>

                                </div>
                            </div>
                        </div>
                    </form>
       </div>
    </div>
</div>
  <!--Main row end-->
  <hr>
  <div class="row">
      <h2>Account Settings</h2>
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <ul class="footer-menu">
            <li><a href="{{ route('profile.profile', Auth::user()->id) }}">Edit Profile</a></li>
            <li><a href="{{ route('profile.emailSetting', Auth::user()->id) }}">Email setting</a></li>
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
            <li><a class="active" href="{{ route('profile.close', Auth::user()->id) }}">Close account</a></li>
        </ul>
    </div>
</div>
<hr>
  </div>
@endsection
@section('footer')
<script type="text/javascript">
  document.title =`{{$user['name']}}'s Frame54 Profile`;
</script>
@endsection

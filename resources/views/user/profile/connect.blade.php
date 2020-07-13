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
	<div class="container connect-section">
    <!--Main row-->
    <div class="row">
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
        <h2>Connect accounts</h2>
        <p>Verifying your account by connecting your Facebook, Twitter or Instagram accounts increases the
            chances of your submissions being accepted and being promoted to the community.</p>
            <p class="connect"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> We don’t post anything to your social accounts on your behalf, ever.</p>
          <div class="container" >
                    <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <div class="col-md-5">
                                <label for="twitter" class="control-label">Twitter</label>
                                <input id="twitter" type="text" class="form-control" name="twitter">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-5">
                                <label for="facebook" class="control-label">Facebook</label>
                                <input id="facebook" type="text" class="form-control" name="facebook">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-5">
                                <label for="instagram" class="control-label">Instagram</label>
                                <input id="instagram" type="text" class="form-control" name="instagram">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5">
                                <div class="download" style="font-size: 25px; margin: 80px 0 30px 0; display:none;">
                                    <button type="submit" class="btns" style="padding: 15px 36px 15px 36px !important;">Change Password</button>

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
            <li><a class="active" href="{{ route('profile.connect', Auth::user()->id) }}">Connect accounts</a></li>
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
<script type="text/javascript">
  document.title =`{{$user['name']}}'s Frame54 Profile`;
</script>
@endsection

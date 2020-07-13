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
    <div class="row dheight">
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
        <h2>Applications</h2>
        <p>These are apps you’ve connected that can access your Unsplash account.</p>
          <div class="container" >
                    <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-6">Application</div><div class="col-md-6">Created At</div>
                            <div class="col-md-12">
                                <input id="application" type="text" class="form-control" name="application" placeholder="No connected applications">
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
            <li><a class="active" href="{{ route('profile.applications', Auth::user()->id) }}">Applications</a></li>
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

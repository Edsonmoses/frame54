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
    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
        <img alt="{{Auth::user()->name}}" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image1" class="img-circle img-responsive">
    </div>
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
        <div class="download">
            <h2 style="float: left; padding-right: 35px; margin-top: -7px;">{{$user['name']}}</h2><a href="{{ route('profile.profileEdit', Auth::user()->id) }}"> <small class="btns">Edit Profile</small></a>
        </div>
        <p>{{ $post->id }} images</p>
        <div class="row">
        <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2" >
            <i class="fa fa-picture-o" aria-hidden="true"></i> Photos
        </div>
        <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2" >
            <i class="fa fa-heart-o" aria-hidden="true"></i> Likes
        </div>
        <div class="col-md-2 col-xs-2 col-sm-2 col-lg-3" >
            <i class="fa fa-plus" aria-hidden="true"></i> Collections
        </div>
        </div>
  </div>
  <!--top row end-->
  </div>
   <hr>
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <p class="text-center">Wow, that’s a very clean portfolio!</p>
    </div>
    </div>
	<hr>
@endsection
@section('footer')
<script type="text/javascript">
  document.title =`{{$user['name']}}'s Frame54 Profile`;
</script>
@endsection

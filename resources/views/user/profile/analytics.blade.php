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
        <img alt="User Pic" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image1" class="img-circle img-responsive">
    </div>
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
        <div class="download">
            <h2 style="float: left; padding-right: 35px; margin-top: -7px;">{{$user['name']}}</h2><a href="{{ route('profile.edit', $user->id) }}"> <small class="btns">Edit Profile</small></a>
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
  <!--analytics row starts-->
  <div class="row">
    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-12 col-md-offset-1">
        <h3>Analytics <span style="color:#ddd;">Last 30 days</span></h3>
        <div class="row">
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 profile-analytics">
                <h4>Views</h4>
                <div id="count">{{$post->visit_count}}</div>
                <div id="thanks">Thanks for sharing</div>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 profile-analytics">
                <h4>Downloads</h4>
                <div id="count">{{$post->downloads}}</div>
                <div id="thanks">Nice Work</div>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 profile-analytics">
                <h4 class="lt">Top features</h4><h4 class="rt">Most viewed</h4>

                <div id="nothing">Nothing to report so far</div>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 profile-analytics">
                <h4 class="lt">Top features</h4><h4 class="rt">Most downloaded</h4>

                <div id="nothing">Nothing to report so far</div>
            </div>
        </div>
    </div>
    </div>
    <!--analytics row end-->
    <div class="row" id="app">
        <div class="col-md-4 col-xs-12 col-sm-6 col-lg-12 col-md-offset-1">
        <h3>Your photos</h3>
      <div class="gal" id="post-data">
          @foreach ($posts as $posts)
             <div class="frame">

				<a href="{{ $posts->slug }}">
					<div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'Frame54'}}</span></div>
					<img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img">
					@if($posts->ads === 1)
					<div class="fdetails"><span class="ads">AD</span></div>
					@else
					<div class="fdetails"><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('submitPhoto') }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span></div>
					@endif
				</a>
             </div>
			@endforeach
        </div>
    </div>
    </div>
	<hr>
@endsection
@section('footer')
<script type="text/javascript">
  document.title =`{{$user['name']}}'s Frame54 Profile`;
</script>
@endsection

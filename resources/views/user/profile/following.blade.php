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
        <div class="row profile-follow">
            <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                <h2 style="padding-right: 35px; margin-top: -7px;">{{$user['name']}}</h2>
                <p>Nairobi, Kenya</p>
            </div>
            <div class="col-md- col-xs-12 col-sm-4 col-lg-4">
                <div class="download">
                    <a href="{{ route('profile.profileEdit', $user->id) }}"> <small class="btns" style="background: #ddd !important; border:1px solid #ddd !important; margin-right:10px !important;">Follow</small></a>
                    <a href="{{ route('profile.profileEdit', $user->id) }}"> <small class="btns">Message</small></a>
                </div>
            </div>
        </div>
        <div class="row profile-follow">
            <div class="col-md-10 col-xs-12 col-sm-10 col-lg-10">
                <p>Download free, beautiful high-quality photos curated by note. Interests</p>
            </div>
            <div class="col-md-2 col-xs-12 col-sm-2 col-lg-2">
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <ul class="list-inline">
                <li><a href="#">Background</a></li>
                <li><a href="#">Wallpaper</a></li>
                <li><a href="#">Scenery</a></li>
                <li><a href="#">Nature</a></li>
                <li><a href="#">Animals</a></li>
            </ul>
            </div>
        </div>
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

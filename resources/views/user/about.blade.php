@extends('user/app')

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
	<div class="container license-section sheight">
	    <div class="row" id="app">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="test-div">
                    <h2>left text</h2>
                </div>
                @foreach ($posts as $posts)
    <div class="frame">
        <a href="{{ $posts->slug }}">
            <div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'Frame54'}}</span></div>
            <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img">
            @if($posts->ads === 1)
            <div class="fdetails"><span class="ads">AD</span></div>
            @else
            <div class="fdetails"><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('photo.download', $posts->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span></div>
            @endif
        </a>
   </div>
@endforeach
            </div>
            <hr>

             </div>
        </div>
    <div class="container">
        <hr class="license-hr">
        <div class="row">
            <div class="col-md-3 col-xs-3 col-sm-4 col-lg-3">
                <ul class="footer-menu">
                    <li><a href="{{ route('home.framelicense') }}">License</a></li>
                    <li><a href="{{ route('home.framePolicy') }}" class="active">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                <ul class="footer-menu">
                    <li><a href="{{ route('home.conditions') }}">Terms & conditions</a></li>
                    <li><a href="{{ route('home.developers') }}">API Terms</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>


@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

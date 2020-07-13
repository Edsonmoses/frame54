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
            <h1>About</h1>
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

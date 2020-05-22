@extends('user/layouts/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Share Creativity & Imagination')
@section('sub-heading','Find your place among the world’s best photographers.')
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
	    <div class="row" id="app">
		<div class="gal" id="post-data">
            @include('user/data')
            </div>
	    </div>
	</div>
	<div class="ajax-load text-center" style="display:none">

		<p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Images</p>
	
	</div>
	<hr>
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
	
@endsection
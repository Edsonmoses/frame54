@extends('user/layouts/app')

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
<div id="myDIV">
    <div class="container">
    <div class="row">
    <div class="gal" id="post-data">
            @include('user/data')
            </div>
    </div>
    <hr>
    </div>
</div>
	<div class="ajax-load text-center" style="display:none">

		<p><img src="https://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Images</p>

	</div>
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

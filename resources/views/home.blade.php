@extends('user/layouts/app')

@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')

@endsection
@section('title','Welcome to Home')
@section('sub-heading','')

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
@endsection

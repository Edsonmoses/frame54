@extends('user/layouts/app')

@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')

@endsection
@section('title','FREE Afrocentric stock photos & videos shared by creators everywhere.')
@section('sub-heading','Trending: ')

@section('main-content')
	<!-- Main Content -->
	<div class="container">
		<!--/.scrollmenu-->
		<div class="scrollmenu">
			@foreach ($categories as $category) 
				<a href="{{ route('category',$category->slug, $post->id) }}">{{ $category->name }}</a>
		   @endforeach
		  </div><br/><br/>
	    <div class="row" id="app">
			<h3>Free PanAfrican Stock Photos</h3>
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

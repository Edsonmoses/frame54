@extends('user/layouts/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','FREE Afrocentric stock photos & videos shared by creators everywhere.')
@section('sub-heading','Trending:')
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
         <!--/.scrollmenu-->
		 <div class="scrollmenu">
			@foreach ($categories as $category)
				<a href="{{ route('category',$category->slug, $post->id) }}">{{ $category->name }}</a>
		   @endforeach
		  </div><br/>
	    <div class="row" id="app">
	        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="gal" id="post-data">
                    @include('user/data')
                    </div>
	        </div>
        </div>
        <div class="ajax-load text-center" style="display:none">

            <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Images</p>

        </div>
	</div>

	<hr>
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
@endsection

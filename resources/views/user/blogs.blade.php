@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Frame 54 Blog')
@section('sub-heading','Stories behind the creation of the Panafrican photography community at Frame 54')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		.fa-thumbs-up:hover{
			color:#f41115;
		}
	</style>
@endsection
@section('main-content')
<!-- Set your background image for this header on the line below. -->
<header class="intro-header pagesheader" style="background-image: url(@yield('bg-img'))">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1 col-md-11">
                <div class="site-heading"   style=" margin-top:-52px;">
                    <div class="col-xs-10" >
                        <form action="{{ route('search') }}" method="GET" role="search">

                        <div class="input-group">
                        <input class="form-control" placeholder="Search For articles...." name="term" id="ed-srch-term" type="text">
                        <div class="input-group-btn">
                        <button type="submit" id="searchbtn">
                        <small>|</small><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        </div>
                        </form>
                        <h2 style="text-align: left !important; color:#fff !important;">@yield('title')</h2>
                        <span class="subheading" style="text-align: left !important; font-size: 22px;">@yield('sub-heading')</span>
                        </div>
                </div>
            </div>
        </div>
    </div>
</header>
	<!-- Main Content -->
	<div class="container about-section">
	    <div class="row" id="app">
            <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
                <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
                <h4>Content type</h4>
                <p>Frame 54 photos are made to be used freely. Our license reflects that. Frame 54 photos are made to be used freely. Our license reflects that</p>
             </div>
             </div>

	    </div>
	</div>

@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

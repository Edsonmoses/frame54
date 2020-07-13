@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','')
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
<!-- Set your background image for this header on the line below. -->
<header class="intro-header pagesheader" style="background-image: url(@yield('bg-img'))">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10">
                <div class="site-heading">
                    <div class="col-xs-10">
                        <h2 style="text-align: left !important">@yield('title')</h3>
                        <form action="{{ route('search') }}" method="GET" role="search">

                        <div class="input-group">
                        <input class="form-control" placeholder="Search Free hi-resolution Afrocentric images" name="term" id="ed-srch-term" type="text">
                        <div class="input-group-btn">
                        <button type="submit" id="searchbtn">
                        <small>|</small><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        </div>
                        </form>
                        </div>
                        <div style="clear: both"></div>
                    <span class="subheading" style="text-align: left !important; padding-left:78px; display:none">@yield('sub-heading')</span>
                </div>
            </div>
        </div>
    </div>
</header>
	<!-- Main Content -->
	<div class="container">
		 <!--/.page title-->
		 <div class="page-title">
             <h1>Submission Guidelines</h1>
             <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
             <p>Written by <strong>Awesome Dude</strong> and <strong>John Doe</strong></p>
             <p>Updated a week ago</p>
             <hr>
		  </div>
	    <div class="row page-body" id="app">
             <h4> Content type</h4>
             <p> We currently only accept original photos. We do not accept screenshots, in-game captures, composite art, digital art or any other form
                of non-photographic image.</p>
                 <h4>Photos meet the minimum size requirement of 5 megapixels.</h4>
                 <p>For a standard landscape orientation photo, 5 megapixels is at least 2500 by 2000 pixels in size.</p>
                <h4>Frame54 Photo standards.</h4>
                <p>We don’t accept unclear photos, photos containing excess noise, ‘spotting’ (marks made by water or dirt on the lens at the time the photo
                was taken), selfies, or shots taken on extreme angles.</p>
                <h4>Photos are original.</h4>
                <p>We do not accept composite images on Frame54. A composite is an image that has been created using multiple photos. Here are examples
                of composite or remixed photos : Frame 54 </p>
                <img style="height: 200px" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                <h4>Photos are not over edited.</h4>
                <p>Our interpretation of over-editing includes:</p>
                <ul>
                <li>Heavy vignetting</li>
                <li>Over-sharpened</li>
                <li>Over-saturated</li>
                <li>Picking single colors out on black and white photos</li>
                </ul>
                <p>Frame 54 is a place to experiment with styles and people shouldn’t be afraid to try things that challenge traditional editing.
                Here are some examples of how people are expressing themselves creatively within our Guidelines</p>
                <img style="height: 350px" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
            <p>Photos by Awesome Dude, John Doe, Jane Doe, Awesome Chic</p>
            <h4>Photos do not contain nudity.</h4>
            <p>While we appreciate the beauty of nude portraiture, Frame 54 is for people of all ages and therefore we do not accept photos
                containing nudity.</p>
             <h4>Photos are not duplicates of existing content that you have submitted to Frame 54.</h4>
             <p>This includes:</p>
                <ul>
                    <li>Submitting a black and white and color copy of the same photo.</li>
                    <li>Submitting multiple mock-up style images.</li>
                    <li>Cropping images for re-submission.</li>
                </ul>
                <p><h4>Photos do not have borders, graphics, text or watermarks overlaid on them.</h4>
                This is the most common reason that photos are not accepted on Frame 54.</p>
                <ul>
                    <li><strong>Borders</strong> include photos with a border, or partial borders of any colour.</li>
                    <li><strong>Graphics</strong> include logos, clipart or any additional elements or overlays that are not original to the photo.</li>
                    <li><strong>Text</strong> includes time stamps, hand lettering and any text.</li>
                    <li><strong>Watermarks</strong> are not accepted.</li>
                </ul>
            <p> Photos do not contain violent imagery. Frame54 is a place for people of all ages.</p>
            <p>You must be the original photographer of and <strong>own the rights to any photo</strong> you share on Frame54.
                You can read more about this in our <strong>Terms.</strong></p>
            <h4>Have questions about the Guidelines?</h4>
            <p>Email us at <span>@frame54.com.</span></p>

	    </div>
	</div>
    <hr>

@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

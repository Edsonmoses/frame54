@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Advice and answers from the Frame 54 Team')
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
                        <h3 style="text-align: left !important; margin-top:-20px; color:#fff !important;">@yield('title')</h3>
                        <form action="{{ route('search') }}" method="GET" role="search">

                        <div class="input-group">
                        <input class="form-control" placeholder="Search For articles...." name="term" id="ed-srch-term" type="text">
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
	<div class="container team">
	    <div class="row" id="app">
            <br>
            <div class="page-title">
                <h3>Managing your Frame 54 account</h3>
                <p class="p">Learn about your Frame 54 account and how to manage your preferences</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>0 articles in this collection</strong></p>
                <p>Written by <strong>Awesome Dude</strong> and <strong>John Doe</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Frame 54 License</h3>
                <p class="p">Learn about your Frame 54 account and how to manage your preferences</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>12 articles in this collection</strong></p>
                <p>Written by <strong>John Doe</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Using Frame 54</h3>
                <p class="p">Learn how to download photos, create collections and connect with photographers</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>10 articles in this collection</strong></p>
                <p>Written by <strong>Awesome Dude</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Contributing to Frame 54</h3>
                <p class="p">Understand how to submit photos to Frame 54 and follow the submission guidelines</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>11 articles in this collection</strong></p>
                <p>Written by <strong>John Doe</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>API Guidelines</h3>
                <p class="p">How to follow the API Guidelines to intergrate the Frame 54 API inside your application</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>7 articles in this collection</strong></p>
                <p>Written by <strong>Awesome Dude</strong> and <strong>John Doe</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Community Activities</h3>
                <p class="p">Learn how to connect with the Frame 54 Community on and offline</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>3 articles in this collection</strong></p>
                <p>Written by <strong>Awesome Chic</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Brand Accounts</h3>
                <p class="p">Information for brand accounts to submit or download photos on Frame 54</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>12 articles in this collection</strong></p>
                <p>Written by <strong>John Doe</></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Bugs & Issues</h3>
                <p class="p">How to report and track bugs/issues on Frame 54</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>10 articles in this collection</strong></p>
                <p>Written by <strong>Awesome Dude</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Reporting Abuse</h3>
                <p class="p">How to report abuse of the Frame 54 License</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>11 articles in this collection</strong></p>
                <p>Written by <strong>John Doe</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Community Guidelines</h3>
                <p class="p">How to make Frame 54 great for everyone</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>7 articles in this collection</strong></p>
                <p>Written by <strong>Jane Dude</strong> and <strong>John Doe</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>What’s New</h3>
                <p class="p">Discover the latest from Frame 54</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>0 articles in this collection</strong></p>
                <p>Written by <strong>Awesome Dude</strong></p>
                <hr>
             </div>
             <div class="page-title">
                <h3>Frame 54 Awards</h3>
                <p class="p">Rules & Regulations</p>
                <img alt="{{Auth::user()->name}}" src="/uploads/avatars/default.jpg" id="guideline-image" class="img-circle img-responsive">
                <p><strong>18 articles in this collection</strong></p>
                <p>Written by <strong>Awesome Chic</strong></p>
                <hr>
             </div>

	    </div>
	</div>

@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

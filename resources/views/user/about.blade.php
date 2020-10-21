@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','About Frame 54')
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
<header class="intro-header pagesheader" style="background-image: url(@yield('bg-img'))">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1 col-md-11">
                <div class="site-heading"   style=" margin-top:-59px; ">
                    <div class="col-xs-8" >
                        <form action="{{ route('search') }}" method="GET" role="search">

                        <div class="input-group">
                        <input class="form-control" style="height: 10px !important" placeholder="Search For articles...." name="term" id="ed-srch-term" type="text">
                        <div class="input-group-btn">
                        <button type="submit" id="searchbtn">
                        <i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        </div>
                        </form>

                        </div>
                </div>
            </div>
        </div>
    </div>
</header>
	<!-- Main Content -->
	<div class="container about-section" style="margin-top: -195px">
	    <div class="row" id="app">

            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <h1 style="color:#000 !important">@yield('title')</h1>
                <h3>Who we are</h3>
                <p>Although the concept of negative space isn’t one that is commonly known (unless you’re a professional photographer or designer), the technique itself is one that most people would recognize.</p>
                <p>Most people who look at this photo are familiar with this sort of visual manipulation. The blades of grass found in the center of the photo are clear and in focus while everything around them is blurred. This is how the pho-tographer tells us where to look. Those blades of grass are the positive space (or subject) in this photo. The blurred area that allows us to focus on the subject is the negative space.</p>
                <p>Like the negative space of a photograph, that is how we envision ourselves at NegativeSpace.</p>
                <p>Our goal in launching NegativeSpace is to give photographers a platform whereby they can share their pho-tography with the world. We want to provide those out-of-focus surroundings so the beautiful high-resolution images found within them have a chance to shine.</p>
                <p>NegativeSpace is about creating communities: A community of photographers who want to share their work. And a community of online visitors who want to use their beautiful, free high-resolution images without any restrictions.</p>
                <h3>Welcoming All Photographers</h3>
                <p>Looking toward the future, our mission is a simple one: we want to encourage photographers to contribute their work and join our global community. We want NegativeSpace to be the place to find the most beautiful, free high-resolution images on the web, so we’re inviting you to send us your photographs today.</p>
                <p>For more information on how to join our community of photographers and start submitting your work, visit our Join Us page.</p>
                <h3>Welcoming All Visitors</h3>
                <p>If you’ve just arrived on our website and wondering what this is all about: welcome. Each of the high-quality photographs you find here has been taken by a photographer from the NegativeSpace community. We have something for everybody, so be sure to check out our categories: Abstract, Animals, Architecture, Business, Black & White, Food, Landscapes, Nature, People, Sport, Street, Technology, Transport, and Work.</p>
                <p>Because we want to give our visitors easy access to beautiful, high-resolution photography, all of the photos on this site are free. Free in cost as well as free to use under a Creative Commons CC0 license. For more information on how we manage the image licensing on this website, visit our License and Privacy pages.</p>
                <p>Our network of content sites also includes 1stWebDesigner (web design resources & tutorials) and PSDDD (free web & mobile app design resources).</p>
                <p>We also maintain a collection of tools for web developers, they are JSONLint, JSCompress, JSONCompare, RandomKeygen and DNS-Lookup.</p>
            </div>
        </div><!--row-->
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <h3>Contact Frame54</h3>
                <p>If you need to contact us regarding the ShotStash website or anything else regarding ShotStash, please email us at hello@frame54.com.</p>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
              <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
              <h4>Free to use</h4>
              <p>Free content is licensed under a CC0 license and can be freely used and redistributed.</p>
           </div>
           <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
            <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            <h4>New each week</h4>
            <p>Each week we add new content to FOCA. Come back often and check out what’s new.</p>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
            <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            <h4>Highly curated</h4>
            <p>The best photos, tagged for easy search and discovery.</p>
          </div>
        </div><!--row-->
        <hr/>
        <div class="row newsletter">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <h3>Get first access to free photos and other Burst content. Unsubscribe anytime.Free content is licensed under a CC0 license and can be freely used and redistributed.</h3>
                <div class="content">
                <div class="input-group">
                     <input type="email" class="form-control" placeholder="Enter your email">
                     <span class="input-group-btn">
                     <button class="btn" type="submit">Submit</button>
                     </span>
                      </div>
                </div>

        </div><!--col-lg-12-->
    </div><!--row-->
    <hr/>
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

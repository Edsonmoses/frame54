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
	<div class="container about-section">
	    <div class="row" id="app">
            <div class="col-md-12 col-xs-12 col-sm-5 col-lg-5">
                <h1>Press</h1>
                <h3>Frame 54 brand assets and guidelines</h3>
                <p>Download official Frame 54 logos, graphics, product screenshots, team photos and a usage guide to help determine when and how to utilize our brand.For a full list of assets, please reference <strong>ourbrand folder</strong></p>
                <div class="links">
                <a href="#">Download all brand assets</a>
                <p style="color: #000; font-size:12px">Please don’t use our name, logos, or screenshots in ways that may be confusing, misleading, or suggest our sponsorship, endorsement, or affiliation without our consent.</p>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-7 col-lg-7">
                     <div class="half-img">
                        <img src= "{{ Storage::disk('local')->url('1595337324.jpeg')}}" alt="{{ $post->title }}">
                    </div>
                    <div class="qt-img">
                        <img class="pb-5" src= "{{ Storage::disk('local')->url('1595337324.jpeg')}}" alt="{{ $post->title }}">
                        <img class="pt-5" src= "{{ Storage::disk('local')->url('1595337324.jpeg')}}" alt="{{ $post->title }}">
                        <img style="width: 653px; height: 200px; padding: 10px 0 0 0;" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
                    </div>
            </div>
        </div><!--row-->
        <div class="row spaced">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <h3>Frame 54 symbol and logotype</h3>
                <p>Download vector and .png versions of our symbol and logotype.<br/>
                    Please respect our branding guidelines and do not alter the logo in any way—we like it the way it is.</p>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
              <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
              <h4>Dowload symbol (zip)</h4>
           </div>
           <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
            <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            <h4>Dowload logotype (zip)</h4>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
            <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            <h4>Dowload logotype (zip)</h4>
          </div>
        </div>
          <div class="row spaced-100">
          <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
            <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            <h4>Dowload mobile mockups (zip)</h4>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
            <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            <h4>Dowload PNG (zip)</h4>
          </div>
        </div><!--row-->

        <hr>
    </div>
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

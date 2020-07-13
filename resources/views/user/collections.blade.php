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
	<div class="container">
		 <!--/.scrollmenu-->
		 <div class="scrollmenu">
			@foreach ($categories as $category)
				<a href="{{ route('category',$category->slug, $post->id) }}">{{ $category->name }}</a>
		   @endforeach
		  </div><br/>

	    <div class="row" id="app">
            <h3>Collections</h3>
            <p>Explore the world through collections of beautiful photos free to use under the Frame 54 License.</p>
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 collections">
                    <img style="height: 200px; width:200px; padding: 0 5px 0 0; float: left;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <img style="height: 100px; width:152px; padding: 0 0 2px 0;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <img style="height: 100px; width:152px; padding: 2px 0 0 0;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <h4>GAMES</h4>
                    <p>100 Photos</p>
                     <p>Presented by Awesome Dude</p>
                     <a href="#" class="btn-outline-collections">Rugby</a>
                     <a href="#" class="btn-outline-collections">Hockey</a>
                     <a href="#" class="btn-outline-collections">Football</a>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 collections">
                    <img style="height: 200px; width:200px; padding: 0 5px 0 0; float: left;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <img style="height: 100px; width:152px; padding: 0 0 2px 0;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <img style="height: 100px; width:152px; padding: 2px 0 0 0;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <h4>HEALTH</h4>
                    <p>100 Photos</p>
                     <p>Presented by Awesome Dude</p>
                     <a href="#" class="btn-outline-collections">Patient</a>
                     <a href="#" class="btn-outline-collections">Human</a>
                     <a href="#" class="btn-outline-collections">Hospital</a>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 collections">
                    <img style="height: 200px; width:200px; padding: 0 5px 0 0; float: left;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <img style="height: 100px; width:152px; padding: 0 0 2px 0;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <img style="height: 100px; width:152px; padding: 2px 0 0 0;" src= "{{ Storage::disk('local')->url('b9yYOzmFjYFgHJyb7i9yj3S2Axd4uvlqKccMv6j8.jpeg')}}" alt="{{ $post->title }}">
                    <h4>HEALTH</h4>
                    <p>100 Photos</p>
                     <p>Presented by Awesome Dude</p>
                     <a href="#" class="btn-outline-collections">Patient</a>
                     <a href="#" class="btn-outline-collections">Human</a>
                     <a href="#" class="btn-outline-collections">Hospital</a>
                </div>
            </div>
	    </div>
	</div>
	<div class="ajax-load text-center" style="display:none">

		<p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Images</p>
        <hr>
	</div>


@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

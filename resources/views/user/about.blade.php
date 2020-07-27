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
                <h1>About</h1>
                <p>Free high-resolution panafrican images brought to you by the world’s most generous community of photographers.</p>
                <div class="links">
                <a href="#">Start browsing</a><a href="#">Contribute</a>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-7 col-lg-7">
                     <div class="half-img">
                        <img src= "{{ Storage::disk('local')->url('1595337324.jpeg')}}" alt="{{ $post->title }}">
                    </div>
                    <div class="qt-img">
                        <img class="pb-5" src= "{{ Storage::disk('local')->url('1595337324.jpeg')}}" alt="{{ $post->title }}">
                        <img class="pt-5" src= "{{ Storage::disk('local')->url('1595337324.jpeg')}}" alt="{{ $post->title }}">
                    </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 bt-img">
                <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            </div>
        </div><!--row-->
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <h3>Frame 54 is internet’s source of free to use panafrican images.</h3>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
              <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
              <h4>Over one million curated photos</h4>
              <p>We hand-select every photo and accept only the best, so that no matter what you need—you’ll find exactly what you’re looking for on Frame 54.</p>
           </div>
           <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
            <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            <h4>A community of 157,866 photographers</h4>
            <p>Frame 54 is home to a growing commu-nity of photographers—from hobbyists, professionals, emerging brands and everyone in between.</p>
          </div>
          <div class="col-md-12 col-xs-12 col-sm-4 col-lg-4 img-4">
            <img src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
            <h4>Fuelling your favourite platforms</h4>
            <p>With partners like BuzzFeed, Squarespace and Trello being powered by our API, the Frame 54 library is more widely accessible than ever.</p>
          </div>
        </div><!--row-->
        <div class="row spaced">
            <div class="col-md-12 col-xs-12 col-sm-6 col-lg-6 img-6">
                <img class="left" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
                <img class="right" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
              </div>
              <div class="col-md-12 col-xs-12 col-sm-6 col-lg-6">
                <h3>Make something awesome</h3>
                <p>Frame 54 was born from the pain we had in finding great, usable imagery. And we weren’t alone. Which is why, today many creators from around the world have downloaded Frame 54 images to create presentations, artwork, mockups and more.</p>
                <div class="links">
                    <a href="#">Find the Perfect Image</a>
                    </div>
              </div>
        </div><!--row-->
        <div class="row spaced">
            <div class="col-md-12 col-xs-12 col-sm-6 col-lg-6 img-6">
                <h3>Is it really free?</h3>
                <p>YES its free. Frame 54 is a platform powered by an amazing community that has gifted hundreds of thousands of their own photos to fuel creativity around the world. So sign up for free and you’ve got access to over a million photos under the Frame 54 license—which makes them free to do-whatever-you-want with.</p>
                <div class="links">
                    <a href="#">Frame 54 License</a>
                    </div>
              </div>
              <div class="col-md-12 col-xs-12 col-sm-6 col-lg-6 img-6">
                <img class="full" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
              </div>
        </div><!--row-->
        <div class="row spaced">
            <div class="col-md-12 col-xs-12 col-sm-6 col-lg-6 img-6">
                Anyone can join the Frame 54 community
                <img class="left" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
                <img class="right" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
              </div>
              <div class="col-md-12 col-xs-12 col-sm-6 col-lg-6">
                <h3>Anyone can join the Frame 54 community</h3>
                <p>Frame 54 was born from the pain we had in finding great, usable imagery. And we weren’t alone. Which is why, today many creators from around the world have downloaded Frame 54 images to create presentations, artwork, mockups and more.</p>
                <div class="links">
                    <a href="#">Join the community</a>
                    </div>
              </div>
              <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <img class="left" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
                <img class="right" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
              </div>
        </div><!--row-->
        <div class="row spaced">
            <div class="col-md-12 col-xs-12 col-sm-6 col-lg-6 img-6">
                <h3>Powering the internet’s visuals</h3>
                <p>YES its free. Frame 54 is a platform powered by an amazing community that has gifted hundreds of thousands of their own photos to fuel creativity around the world. So sign up for free and you’ve got access to over a million photos under the Frame 54 license—which makes them free to do-whatever-you-want with.</p>
                <div class="links">
                    <a href="#">Sign up now</a>
                    </div>
              </div>
              <div class="col-md-12 col-xs-12 col-sm-6 col-lg-6 img-6">
                <img class="full" src= "{{ Storage::disk('local')->url('1595337428.jpeg')}}" alt="{{ $post->title }}">
              </div>
        </div><!--row-->

        <hr>
    </div>
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection

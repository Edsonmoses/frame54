@extends('user/app')

@section('bg-img',Storage::disk('local')->url($post->image))
@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection
@section('title',$post->title)
@section('sub-heading',$post->subtitle)

@section('main-content')
<!-- Post Content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=455618938154843";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 download-image">

				<img src= "{{ Storage::disk('local')->url($post->image)}}" alt="">
            </div>
            <div class="col-lg-4 col-md-4 download-cont">
                <img alt="{{ Auth::user()->name }}" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image2" class="img-circle img-responsive"> {{Auth::user()->name}}
                <div class="fbtn donate">DONATE</div><div class="fbtn follow">FOLLOW</div>
                <div style="clear:both"></div>
                <hr/>
                <span class="imgspan">images</span>
                <hr/>
                <div class="download">
                    <a href="{{ route('photo.download', $post->id) }}" target="_blank"><small class="btns">FREE DOWNLOAD <small class="minus">|</small><i class="fa fa-arrow-down" aria-hidden="true"></i></small></a><br/>
                </div>
                <div class="license">
                    <a href="#"><small>Frame54 License</small></a><br/>
                    <small>Free for commercial use </small><br/>
                    <small>No attribution required </small><br/>
                </div>
                <div class="item-deitals">
                    <hr/>
                    <small>Image type  <span class="pull-right">{{substr ($post->image, -4)}}</span></small>
                    <hr/>
                    <small>Resolution  <span class="pull-right"></span></small>
                    <hr/>
                    <small>Created       <span class="pull-right">{{ \Carbon\Carbon::parse($post->created_at)->format('d/M/Y') }}<span></small>
                    <hr/>
                    <small>Uploaded      <span class="pull-right">{{ \Carbon\Carbon::parse($post->updated_at)->format('d/M/Y') }}<span></small>
                    <hr/>
                    <small>Category  
                         @foreach ($post->categories as $category)
                         <span class="pull-right"> 
                            <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                        </span>
                        @endforeach
                    </small>
                    <hr/>
                    <small>Views <span class="pull-right">{{$post->visit_count}}</span></small>
                    <hr/>
                    <small>Downloads <span class="pull-right">{{$post->downloads}}</span></small>
                    <hr/>
                    <small>TAGS
                        @foreach ($post->tags as $tag)
                        {{ $tag->name }}
                        @endforeach
                    </small>
                </div>
            </div>
        </div>
        <p>Sponsored Images/Content</p>
       <p> SIMILAR PHOTOS</p>
       @if($related->isEmpty())
   No Related Frame54 Images
@else
<div class="gal" id="post-data">
    @include('user/data')
    </div>
</div>
@endif
    </div>
</article>

<hr>
@endsection
@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection
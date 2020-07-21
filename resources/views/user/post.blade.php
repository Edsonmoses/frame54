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
				<img id="images" src= "{{ Storage::disk('local')->url($post->image)}}" alt="{{ $post->title }}">
            </div>
            <div class="col-lg-4 col-md-4 download-cont">
                <img alt="{{ $post->name }}" src="/uploads/avatars/{{$post->avatar}}" id="profile-image2d" class="img-circle img-responsive"><span id="profile-name">{{$post['name']? $post['name'] : 'Frame54'}}</span>
                <span id="profile-imageb"><div class="fbtn donate">DONATE</div><div class="fbtn follow">FOLLOW</div></span>

                <div style="clear:both"></div>
                <hr/>
                <span class="imgspan">{{ $post->id }} images</span>
                <hr/>
                <div class="download">
                    <a href="{{ route('photo.download', $post->image) }}" target="_blank"><small class="btns">FREE DOWNLOAD <small class="minus">|</small><i class="fa fa-arrow-down" aria-hidden="true"></i></small></a><br/>
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
                    <small>Resolution  <span class="pull-right" id="info"></span></small>
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
                    <small>TAGS<br/>
                        @foreach ($post->tags as $tag)
                        <a href="{{ route('tag',$tag->slug) }}">
                            {{ $tag->name }}</a>
                        @endforeach
                    </small>
                </div>
            </div>
        </div>
        <p>Sponsored Images/Content</p>
        <div class="single-featured">
            @if($post->featured == 1)
            <img src= "{{ Storage::disk('local')->url($post->image)}}" alt="">
            @endif
       </div>
       <p> SIMILAR PHOTOS</p>

    </div>
</article>

<hr>
@endsection
@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
<script>
    getImageSize($('#images'), function(width, height){
    $('#info').text(width + ' x ' + height);
});

function getImageSize(img, callback) {
    var $img = $(img);

    var wait = setInterval(function() {
        var w = $img[0].naturalWidth,
            h = $img[0].naturalHeight;
        if (w && h) {
            clearInterval(wait);
            callback.apply(this, [w, h]);
        }
    }, 30);
}
</script>
@endsection

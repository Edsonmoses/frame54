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
                <div class="frame">
                <div class="ftitle"><img alt="{{ $post->name ? $post->name : $post->title }}" src="/uploads/avatars/{{$post->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$post->name? $post->name : 'Frame54'}}</span></div>
                <img id="images" src= "{{ Storage::disk('local')->url($post->image)}}" alt="{{ $post->title }}">
                @if($post->ads === 1)
                <div class="fdetails"><span class="ads">AD</span></div>
                @else
                <div class="fdetails">
                    @if($post->like = 1 && $post->like >= 1)
                    <a href="" onclick="
                                    event.preventDefault();
                                    document.getElementById('like-form-{{ $post->image }}').submit();
                                 " ><i class="fa fa-heart-o" aria-hidden="true" style="color: red">{{ $post->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $post->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                    @else
                    <a href="" onclick="
                                    event.preventDefault();
                                    document.getElementById('like-form-{{ $post->image }}').submit();
                                 " ><i class="fa fa-heart-o" aria-hidden="true">{{ $post->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $post->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                    @endif
                </div>
                @endif
              </div>
            </div>
            <div class="col-lg-4 col-md-4 download-cont">
                <img alt="{{ $post->name }}" src="/uploads/avatars/{{$post->avatar}}" id="profile-image2d" class="img-circle img-responsive"><span id="profile-name">{{$post['name']? $post['name'] : 'Frame54'}}</span>
                <span id="profile-imageb"><div class="fbtn donate">DONATE</div><div class="fbtn follow">FOLLOW</div></span>

                <div style="clear:both"></div>
                <hr/>
                <span class="imgspan">{{ $post->posted_by }} images</span>
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
            @if ($post->sponsored_images = 1)
            <img id="images" src= "{{ Storage::disk('local')->url($post->image)}}" alt="{{ $post->title }}">
            @endif
       </div><!--sponsored Images-->
       <p> SIMILAR PHOTOS</p>
       <div class="row">
		<div class="similar">
       @foreach ($post->categories as $category)
         <div class="frame">
        <a href="{{ $post->slug }}">
            <div class="ftitle"><img alt="{{ $post->name ? $post->name : $post->title }}" src="/uploads/avatars/{{$post->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$post->name? $post->name : 'Frame54'}}</span></div>
            <img src= "{{ Storage::url($post->image)}}" alt="{{$post->title}}" class="img">
            @if($post->ads === 1)
            <div class="fdetails"><span class="ads">AD</span></div>
            @else
            <div class="fdetails">
                @if($post->like = 1 && $post->like >= 1)
                <a href="" onclick="
                                    event.preventDefault();
                                    document.getElementById('like-form-{{ $post->image }}').submit();
                                 " ><i class="fa fa-heart-o" aria-hidden="true" style="color: red">{{ $post->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $post->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @else
                <a href="" onclick="
                                    event.preventDefault();
                                    document.getElementById('like-form-{{ $post->image }}').submit();
                                 " ><i class="fa fa-heart-o" aria-hidden="true">{{ $post->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $post->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @endif
            </div>
            @endif
        </a>
   </div>
   <form role="form" id="like-form-{{ $post->image }}" action="{{ route('post.likeUpdate',$post->image)}}" method="post" enctype="multipart/form-data" style="display: none">
    {{ csrf_field() }}
   <div class="row agree">
    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">

    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
        <div class="form-group">
            <input type="text" class="form-control" id="like" name="like" value="1">
          </div>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
        <div class="download">
            <input type="submit" class="btns" value="Start Uploading">
        </div>
    </div>
</div>
    </form>
       @endforeach
        </div>
       </div><!--simila photos-->
       <hr>
    </div>
</article>
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

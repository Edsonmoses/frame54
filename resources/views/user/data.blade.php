
@foreach ($posts as $posts)
    <div class="frame">
        <a type="button"  data-toggle="modal" data-target="#exampleModal{{$posts->id}}">
            <div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'Frame54'}}</span></div>
            <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img">
            @if($posts->ads === 1)
            <div class="fdetails"><span class="ads">AD</span></div>
            @else
            <div class="fdetails">
                @guest
                @if($posts->like >= 1)
                <a class="nav-link" type="button" data-toggle="modal" data-target=".login-modal-lg"><i class="fa fa-heart-o" aria-hidden="true" style="color: red">{{ $posts->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @else
                <a class="nav-link" type="button" data-toggle="modal" data-target=".login-modal-lg"><i class="fa fa-heart-o" aria-hidden="true"></i></a><i class="fa fa-plus" aria-hidden="true">{{ $posts->like}}</i><span><a href="{{ route('home.download', $posts->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @endif
                @else
                @if($posts->like >= 1)
                <a href="" onclick="
                                    event.preventDefault();
                                    document.getElementById('like-form-{{ $posts->id }}').submit();
                                 " ><i class="fa fa-heart-o" aria-hidden="true" style="color: red">{{ $posts->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @else
                <a href="" onclick="
                                    event.preventDefault();
                                    document.getElementById('like-form-{{ $posts->id }}').submit();
                                 " ><i class="fa fa-heart-o" aria-hidden="true"></i></a><i class="fa fa-plus" aria-hidden="true">{{ $posts->like}}</i><span><a href="{{ route('home.download', $posts->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @endif
                @endguest
            </div>
            @endif
        </a>
   </div>
   <form role="form" id="like-form-{{ $posts->image }}" action="{{ route('post.likeUpdate',$posts->id)}}" method="post" enctype="multipart/form-data" style="display: none">
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
<!--begin modal window-->
<div class="modal fade" id="exampleModal{{$posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 download-image">
                            <img id="images" src= "{{ Storage::disk('local')->url($posts->image)}}" alt="{{ $posts->title }}">

                            <div class="post_downloads">
                                @if($posts->like = 1 && $posts->like >= 1)
                                <a href="" onclick="
                                                event.preventDefault();
                                                document.getElementById('like-form-{{ $posts->id }}').submit();
                                             " ><i class="fa fa-heart-o" aria-hidden="true" style="color: red">{{ $posts->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                                @else
                                <a href="" onclick="
                                                event.preventDefault();
                                                document.getElementById('like-form-{{ $posts->id }}').submit();
                                             " ><i class="fa fa-heart-o" aria-hidden="true">{{ $posts->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                                @endif
                            </div>
                        </div>
                        <!--end full image-->
                        <div class="col-lg-4 col-md-4 download-cont">
                            <img alt="{{ $posts->name }}" src="/uploads/avatars/{{$posts->avatar}}" id="profile-image2d" class="img-circle img-responsive"><span id="profile-name">{{$posts['name']? $posts['name'] : 'Frame54'}}</span>
                            <span id="profile-imageb"><div class="fbtn donate">DONATE</div><div class="fbtn follow">FOLLOW</div></span>

                            <div style="clear:both"></div>
                            <hr/>
                            <span class="imgspan">{{ $posts->posted_by }} images</span>
                            <hr/>
                            <div class="license">
                                <a href="#"><small>Frame54 License</small></a><br/>
                                <small>Free for commercial use </small><br/>
                                <small>No attribution required </small>
                            </div>
                            <div class="item-deitals">
                                <hr/>
                                <small>Image type  <span class="pull-right">{{substr ($posts->image, -4)}}</span></small>
                                <hr/>
                                <small>Resolution  <span class="pull-right" id="info"></span></small>
                                <hr/>
                                <small>Created       <span class="pull-right">{{ \Carbon\Carbon::parse($posts->created_at)->format('d/M/Y') }}<span></small>
                                <hr/>
                                <small>Uploaded      <span class="pull-right">{{ \Carbon\Carbon::parse($posts->updated_at)->format('d/M/Y') }}<span></small>
                                <hr/>
                                <small>Category
                                     @foreach ($posts->categories as $category)
                                     <span class="pull-right">
                                        <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                    </span>
                                    @endforeach
                                </small>
                                <hr/>
                                <small>Views <span class="pull-right">{{$posts->visit_count}}</span></small>
                                <hr/>
                                <small>Downloads <span class="pull-right">{{$posts->downloads}}</span></small>
                                <div class="download" style="padding: 20px 0 20px 10px;">
                                    <a href="{{ route('photo.download', $posts->id) }}" target="_blank"><small class="btns download-text" style="background: #99d608 !important; color:#fff !important;font-size: 30px;">FREE DOWNLOAD <i class="fa fa-arrow-down" aria-hidden="true"></i></small></a><br/>
                                </div>
                                <hr/>
                                <small class="tags-post">TAGS<br/>
                                    @foreach ($posts->tags as $tag)
                                    <a href="{{ route('tag',$tag->slug) }}">
                                        {{ $tag->name }}</a>
                                    @endforeach
                                </small>
                                <hr/>
                            </div>
                        </div>
                        <!--end side content-->
                    </div>
            <!--end row-->

            <div class="row">
                <p style="margin-bottom: 0px !important;">Sponsored Images/Content</p>
                <div class="single-featured">
                    @if ($posts->sponsored_images = 1)
                    <img id="images" src= "{{ Storage::disk('local')->url($posts->image)}}" alt="{{ $posts->title }}">
                    @endif
            </div>
            <!--end sponsored Images-->
             <div class="similar">
             <p style="margin-bottom: 0px !important;">SIMILAR PHOTOS</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 gal">
            @foreach ($posts->categories as $category)
              <div class="frame">
             <a href="{{ $post->slug }}">
                 <div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'Frame54'}}</span></div>
                 <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img-sm">
                 @if($posts->ads === 1)
                 <div class="fdetails"><span class="ads">AD</span></div>
                 @else
                 <div class="fdetails">
                     @if($posts->like >= 1)
                     <a href="" onclick="
                                         event.preventDefault();
                                         document.getElementById('like-form-{{ $posts->id }}').submit();
                                      " ><i class="fa fa-heart-o" aria-hidden="true" style="color: red">{{ $posts->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                     @else
                     <a href="" onclick="
                                         event.preventDefault();
                                         document.getElementById('like-form-{{ $posts->id }}').submit();
                                      " ><i class="fa fa-heart-o" aria-hidden="true">{{ $posts->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->id) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                     @endif
                 </div>
                 @endif
             </a>
        </div>
        <form role="form" id="like-form-{{ $posts->id }}" action="{{ route('post.likeUpdate',$posts->id)}}" method="post" enctype="multipart/form-data" style="display: none">
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
            </div>
             <div class="col-lg-1 col-md-1" style="display: none">
                <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img-sm">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
            </div>
            <!--end read more -->
            </div><!--end simila photos-->
            <div class="similar">
                <p style="margin-bottom: 0px !important;"> FROM SAME ARTIST</p>
                <div class="row">
                    <!-- Team Member 1 -->
                    @foreach ($posts->categories as $category)
                        <div class="col-xl-3 col-md-3 mb-3">
                            <div class="card shadow" style="padding-left: 10px">
                            <img src="{{ Storage::url($posts->image)}}" class="card-img-top" alt="{{$posts->title}}">
                            <!--<div class="card-body text-center">
                                <h5 class="card-title mb-0">Team Member</h5>
                                <div class="card-text text-black-50">Web Developer</div>
                            </div>-->
                            </div>
                        </div>
                        @endforeach
                </div>
                 <div class="col-lg-1 col-md-1" style="display: none">
                    <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img-sm">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </div>
                <!--end read more -->
                </div><!--end FROM SAME ARTIST-->
            <!--end row -->
            </div>

                </div>
         <!--end container-->
            </div>
            <!--end model-body-->
        </div>
    </div>
</div>
    <!--end myModal-->
@endforeach
@section('footer')
<style>
    .modal-lg{
        width: 82% !important;
    }
</style>
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

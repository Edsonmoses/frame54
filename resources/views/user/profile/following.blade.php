@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Bitfumes Blog')
@section('sub-heading','Learn Together and Grow Together')
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
    <!--Main row-->
    <div class="row">
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <img alt="{{Auth::user()->name}}" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image1" class="img-circle img-responsive">
    </div>
    <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8" >
        <div class="row profile-follow">
            <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
                <h2 style="padding-right: 35px; margin-top: -7px;">{{$user['name']}}</h2>
                <p>Nairobi, Kenya</p>
            </div>
            <div class="col-md- col-xs-12 col-sm-4 col-lg-4">
                <div class="download">
                    <a href="{{ route('profile.edit', $user->id) }}"> <small class="btns follow-img" style="background: #ddd !important; border:1px solid #ddd !important; margin-right:10px !important; padding-left:36px !important;"><img alt="{{Auth::user()->name}}" src="/user/img/Frame 54 icons-userplus.svg" id="userplus" class="img-responsive"> Follow</small></a>
                    <a type="button" data-toggle="modal" data-target=".bd-message-modal-lg" class=" mail-img"> <small class="btns" style="padding-left: 36px !important"><img alt="{{Auth::user()->name}}" src="/user/img/Frame 54 icons-email.svg" id="userplus" class="img-responsive"> Message</small></a>
                </div>
            </div>
        </div>
        <div class="row profile-follow">
            <div class="col-md-10 col-xs-12 col-sm-10 col-lg-10">
                <p>Download free, beautiful high-quality photos curated by note. Interests</p>
            </div>
            <div class="col-md-2 col-xs-12 col-sm-2 col-lg-2">
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
            <ul class="list-inline">
                <li><a href="#">Background</a></li>
                <li><a href="#">Wallpaper</a></li>
                <li><a href="#">Scenery</a></li>
                <li><a href="#">Nature</a></li>
                <li><a href="#">Animals</a></li>
            </ul>
            </div>
        </div>
        <div class="row">
        <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3" >
            {{count($post->posted_by)}} <i class="fa fa-picture-o" aria-hidden="true"></i> Photos
        </div>
        <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3" >
            {{$post->like}} <i class="fa fa-heart-o" aria-hidden="true"></i> Likes
        </div>
        <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3" >
            <a type="button" data-toggle="modal" data-target=".bd-collection-modal-lg"><i class="fa fa-plus" aria-hidden="true"></i> Collections</a>
        </div>
        </div>
  </div>
  <!--top row end-->
  </div>
   <hr>
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <div class="gal" id="post-data">
            @foreach ($posts as $posts)
               <div class="frame">

                  <a href="{{ $posts->slug }}">
                      <div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'Frame54'}}</span></div>
                      <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img">
                      @if($posts->ads === 1)
                      <div class="fdetails"><span class="ads">AD</span></div>
                      @else
                      <div class="fdetails"><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('submitPhoto') }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span></div>
                      @endif
                  </a>
               </div>
              @endforeach
          </div>
    </div>
    </div>
    <hr>
    <div class="modal fade bd-message-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-contents message-section">
            <div class="modal-header popup-hd">
                <div class="popclose">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
            <div class="modal-body" style="background: #fff">
                <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <h2>Message</h2>
                        <p class="p1">Send a message to <span>Awesome Dude</span> and receive a reply through
                            your email.</p>
                        <p class="p2"><i class="fa fa-check" aria-hidden="true"></i> Follow <span>message guidelines.</span></p>
                        <p class="p2"><i class="fa fa-check" aria-hidden="true"></i> No Spam</p>
                        <p class="p2"><i class="fa fa-check" aria-hidden="true"></i> For legal questions, see <span>the license</span></p>
                        <form>
                                <div class="row">
                                    <div class="col-9 col-sm-9">
                                        <div class="form-group">
                                        <input type="text" class="form-control" id="subject" style="width: 94%; height: 50px; font-size: 24px; line-height: 18px; border: 1px solid #dddddd; padding:10px;" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-9">
                                        <div class="form-group">
                                        <textarea class="form-control" id="message" rows="3" style="width: 94%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 55% 10px 10px 10px; text-align: right !important;" placeholder="1200"></textarea>
                                        </div><br>
                                        <div class="pull-right">
                                            <a href="#"> <small class="sends">Send Message</small></a>
                                        </div>
                                        <br><br>
                                   </div>
                                </div>
                          </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection
@section('footer')
<script type="text/javascript">
  document.title =`{{$user['name']}}'s Frame54 Profile`;
</script>
<style>
    .modal-lg {
    width: 64% !important;
}
</style>
@endsection

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
    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
        <img alt="{{Auth::user()->name}}" src="/uploads/avatars/{{Auth::user()->avatar}}" id="profile-image1" class="img-circle img-responsive">
    </div>
    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
        <div class="download">
            <h2 style="float: left; padding-right: 45px; margin-top: -7px;">{{$user['name']}}</h2> <a href="{{ route('profile.edit',$user->id) }}"> <small class="btns">Edit Profile </small></a>
        </div>
        <p>{{count($post->posted_by)}} images</p>
        <div class="row">
        <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3" >
            {{count($post->posted_by)}} <i class="fa fa-picture-o" aria-hidden="true"></i> Photos
        </div>
        <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3" >
            {{$post->like}} <i class="fa fa-heart-o" aria-hidden="true"></i> Likes
        </div>
        <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3" >
            <a type="button" data-toggle="modal" data-target=".bd-collection-modal-lg"> <i class="fa fa-plus" aria-hidden="true"></i> Collections</a>
        </div>
        </div>
  </div>
  <!--top row end-->
  </div>
   <hr>
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <!--<p class="text-center">Wow, that’s a very clean portfolio!</p>-->
        <div class="container">
            <div class="row">
            <div class="gal" id="post-data">
                    @include('user/data')
                    </div>
            </div>
            </div>
    </div>
    </div>
    <hr>
    @if($post->agree = 1)

  @else
        <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="uGuidelines">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body uGuideline">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-xs-12 col-sm-7 col-lg-7">
                            <h2>Hi {{Auth::user()->name}}</h2>
                            <p>Thanks for contributing to Frame 54. You’re awesome. To save you time and increase your chance of being featured, please ensure that your photos meet our <span>submission guidelines</span></p>
                            <p>We’ll review your submission. If it gets selected, you will receive an email notification and your content will be featured in our search.</p>
                                <p>NOTE: Every photo on Frame 54 is published under the<span> Frame 54 License</span> which allows people to use photos <strong>from Frame 54 for free, including
                                    for commercial purposes, without attributing the photographer on Frame 54.</strong> <span>Learn more.</span></p>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-5 col-lg-5 uImg">
                            <img src="/user/img/holder.jpeg" alt="holder" />
                        </div>
                    </div>
                    <div class="row footer">
                        <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                            Only upload high quality photos.For a standard landscape orientation photo, <strong>5 megapixels</strong> is at least <strong>2500 by 2000 pixels pixels in size</strong>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 border">
                            Photos are clear, original and are not over edited. Photos do not contain nudity or violent imagery. Frame 54 is a place for people of all ages.
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                            You must <strong>own the rights</strong> to any photo you share on Frame 54.You can read more about this in our <span>Terms.</span>
                        </div>
                    </div>
                    <div class="row agree">
                        <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">

                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                            <div class="form-check" style="float: left; padding-left: 87px; font-size: 17px; color: #666;">
                                <input checked class="form-check-input" type="checkbox" name="agree" id="agree" {{ old('agree') ? 'checked' : '' }}>

                                <label class="form-check-label" for="agree" style="font-weight: 200 !important">
                                    {{ __('I understand and agree') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                            <div class="download">
                                <a href="#"> <small class="btns">Start Uploading</small></a>

                            </div>
                        </div>
                    </div>
                    </div>

                </div>
              </div>
            </div>
          </div>
          <!--Guidelines end here-->
          @endif
</div>
@endsection
@section('footer')
<script type="text/javascript">
  document.title =`{{$user['name']}}'s Frame54 Profile`;
</script>
@endsection

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
    <script>

        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                    $("#photos").hide();
                    $("#photo1").hide();
                    $("#photo2").hide();
                    $("#hidetags").show();
                }

                reader.readAsDataURL(file);
            }
        }
        $(function(){
    $("input[type='submit']").click(function(){
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>10){
         alert("You can only upload a maximum of 2 files");
        }
    });
});
    </script>
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
    <div class="row">
  <div class="gal" id="post-data">
          @include('user/data')
          </div>
    </div>
    <hr>
</div>
<div class="ajax-load text-center" style="display:none">

  <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Images</p>

</div>
    @if (Auth::user()->agree == 1)
        <!-- The Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
    <div class="modal-dialog modal-lg" style="width: 60% !important">
      <div class="modal-content photocontent">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Publish to Frame54 </h4> <h6 class="modal-title" style="float: right; color: #CCC !important;">You have 10 uploads remaining this week.</h6>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <!-- Main content -->
            <section class="content">
                <div class="row pub-p">
                <div class="col-md-12 published">
                    <!-- general form elements -->
                    <div class="box box-primary">
                    @include('includes.messages')
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="file-upload">
                                <p>
                                    <input type="file" name="image" id="photos" onchange="previewFile(this);" required>
                                    <img id="photo1" src="/user/img/1x.png" width="150" height="93" alt="Placeholder">
                                    <p id="photo2" class="updrag">Drag and drop up to 10<br/> images or <span id="span">Browse</span> to choose <br/> a file</p>
                                </p>
                            </div>
                                <img id="previewImg" src="/user/img/transparent.png" width="200" height="200" alt="Placeholder">
                                <p>

                            </div>
                            <div class="col-lg-12" id="hidetags">
                                <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Add a tag">
                              </div>

                              <div class="form-group">
                                <textarea name="body" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder="Add a description"></textarea>
                              </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><b>High quality photos</b> (at least <b>5MP</b>)</li>
                                    <li>Photos are <b>Clear & origina</b></li>
                                    <li>Only upload photos you <b>own the rights</b> to</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>Zero tolerance for nudity, violence or hate</li>
                                    <li>Respect the intellectual property of others</li>
                                    <li>Read the <b>Frame54 License</b></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
  <!-- /.content -->
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <p class="license">Read the Frame54 License</p>
            <div class="download" style="margin-top:-15px ">
                <a href='{{ route('submitPhoto') }}' class="btns" data-dismiss="modal"  style="background: none; color:#99d608 !important; margin-right: 25px !important;">Cancel</a>
                <input type="submit" class="btns" value="Publish">
            </div>

        </div>
    </form>
      </div>
    </div>
  </div>
  <!--upload images end popup-->

          @else
          <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="uGuidelines">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body uGuideline">
                    <div class="container">
                        <form role="form" action="{{ route('photo.agreeUpdate') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
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
                                <input checked class="form-check-input" type="checkbox" name="agree" id="agree" value="1">

                                <label class="form-check-label" for="agree" style="font-weight: 200 !important">
                                    {{ __('I understand and agree') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                            <div class="download">
                                <input type="submit" class="btns" value="Start Uploading">
                            </div>
                        </div>
                    </div>
                        </form>
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

<style>
    .dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
    cursor: pointer;
    margin: 45px 0 0 0 !important;
}
</style>
@endsection

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
</div>
<div class="ajax-load text-center" style="display:none">

  <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Images</p>

</div>

  <hr>
  <!--terms popup-->
  <!-- Modal -->
<div class="modal fade" id="termsPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header terms-header">
        <h5 class="modal-title" id="termsPopup">Show us your best images</h5>
        @include('includes.messages')
      </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('photo.termsUpdate') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
      <div class="modal-body terms">
         <div class="col-lg-12">
            <div class="checkbox">
              <label for="termsimg">
                <input type="checkbox" name="termsimg" id="termsimg" value="1">I only upload images I own the rights to, and not any purched or copied images.
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="terms" id="terms" value="1"> <I href="#">I agre that my images are released under the Frame54 License</a>.
              </label>
            </div>
         </div>
         <!--col-lg-6-->
         <p style="clear:both"></p>
      </div>
      <div class="modal-footer" id="termsimgShow" style="display: none">
        <button type="submit" class="btn btn-success">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      <div class="modal-footer" id="termsimgHide">
        <button type="submit" class="btn btn-success" disabled>Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" disabled>Cancel</button>
      </div>
    </form>
    </div>
  </div>
</div>
   <!-- terms popup-->
</div>
@endsection
@section('footer')
<script>
 $(document).ready(function(){
    $('.terms input[type=checkbox]').attr('checked',false);
});
  $(function () {
        $("#termsimgs").click(function () {
            if ($(this).is(":checked")) {
                $("#termsimgShow").show();
                $("#termsimgHide").hide();
            } else {
                $("#termsimgShow").hide();
                $("#termsimgHide").show();
            }
        }) && $("#terms").click(function () {
            if ($(this).is(":checked")) {
                $("#termsimgShow").show();
                $("#termsimgHide").hide();
            } else {
                $("#termsimgShow").hide();
                $("#termsimgHide").show();
            }
        });
    });
    $('#termsPopup').on('loaded.bs.modal', function() {
    $(this).find('.modal-dialog').css({
        'margin-top': function () {
            return (($(window).outerHeight() / 2) - ($(this).outerHeight() / 2));
        }
    });
});
</script>

@endsection
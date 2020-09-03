
@foreach ($posts as $posts)
    <div class="frame">
        <a href="{{ $posts->slug }}">
            <div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'Frame54'}}</span></div>
            <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img">
            @if($posts->ads === 1)
            <div class="fdetails"><span class="ads">AD</span></div>
            @else
            <div class="fdetails">
                @guest
                @if($posts->like >= 1)
                <a class="nav-link" type="button" data-toggle="modal" data-target=".login-modal-lg"><i class="fa fa-heart-o" aria-hidden="true" style="color: red">{{ $posts->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @else
                <a class="nav-link" type="button" data-toggle="modal" data-target=".login-modal-lg"><i class="fa fa-heart-o" aria-hidden="true"></i></a><i class="fa fa-plus" aria-hidden="true">{{ $posts->like}}</i><span><a href="{{ route('home.download', $posts->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @endif
                @else
                @if($posts->like >= 1)
                <a href="" onclick="
                                    event.preventDefault();
                                    document.getElementById('like-form-{{ $posts->image }}').submit();
                                 " ><i class="fa fa-heart-o" aria-hidden="true" style="color: red">{{ $posts->like }}</i></a><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @else
                <a href="" onclick="
                                    event.preventDefault();
                                    document.getElementById('like-form-{{ $posts->image }}').submit();
                                 " ><i class="fa fa-heart-o" aria-hidden="true"></i></a><i class="fa fa-plus" aria-hidden="true">{{ $posts->like}}</i><span><a href="{{ route('home.download', $posts->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @endif
                @endguest
            </div>
            @endif
        </a>
   </div>
   <form role="form" id="like-form-{{ $posts->image }}" action="{{ route('post.likeUpdate',$posts->image)}}" method="post" enctype="multipart/form-data" style="display: none">
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


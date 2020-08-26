
@foreach ($posts as $posts)
    <div class="frame">
        <a href="{{ $posts->slug }}">
            <div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'Frame54'}}</span></div>
            <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img">
            @if($posts->ads === 1)
            <div class="fdetails"><span class="ads">AD</span></div>
            @else
            <div class="fdetails">
                @if($posts->like === 1)
                <i class="fa fa-heart-o" aria-hidden="true" style="color: red"></i><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @else
                <a class="dropdown-item" href="{{ route('post.like', Auth::user()->id) }}"
                              onclick="event.preventDefault();
                                            document.getElementById('liked-form').submit();"><i class="fa fa-heart-o" aria-hidden="true"></a></i><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('home.download', $posts->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span>
                @endif
            </div>
            @endif
        </a>
   </div>
@endforeach



@foreach ($posts as $posts)
    <div class="frame">
        <a href="{{ $posts->slug }}">
            <div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'Frame54'}}</span></div>
            <img src= "{{ Storage::url($posts->image)}}" alt="{{$posts->title}}" class="img">
            @if($posts->ads === 1)
            <div class="fdetails"><span class="ads">AD</span></div>
            @else
            <div class="fdetails"><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-plus" aria-hidden="true"></i><span><a href="{{ route('photo.download', $posts->image) }}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></span></div>
            @endif
        </a>
   </div>
@endforeach

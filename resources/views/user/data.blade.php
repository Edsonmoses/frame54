@foreach ($posts as $posts)
             <div class="frame">
		
				<a href="{{ $posts->slug }}">
					<div class="ftitle"><img alt="{{ $posts->name ? $posts->name : $posts->title }}" src="/uploads/avatars/{{$posts->avatar}}" class="ftitle-img  img-responsive" width="50" height="50"> <span>{{$posts->name? $posts->name : 'John Doe'}}</span></div>
					<img src= "{{ Storage::url($posts->image)}}" alt="">
					<div class="fdetails"><i class="fa fa-heart-o" aria-hidden="true"></i><i class="fa fa-plus" aria-hidden="true"></i><span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
					</div>
				</a>
             </div>
			@endforeach
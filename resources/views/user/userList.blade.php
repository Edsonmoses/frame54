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
    <script src="{{ asset('js/custom.js') }}" defer></script>


    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-12">

                @if($users->count())

    @foreach($users as $user)

        <div class="col-2 profile-box border p-1 rounded text-center bg-light mr-4 mt-3">

            <img src="https://dummyimage.com/165x166/420542/edeef5&text=ItSolutionStuff.com" class="w-100 mb-1">

            <h5 class="m-0"><a href="{{ route('user.view', $user->id) }}"><strong>{{ $user->name }}</strong></a></h5>

            <p class="mb-2">

                <small>Following: <span class="badge badge-primary">{{ $user->followings()->get()->count() }}</span></small>

                <small>Followers: <span class="badge badge-primary tl-follower">{{ $user->followers()->get()->count() }}</span></small>

            </p>

            <button class="btn btn-info btn-sm action-follow" data-id="{{ $user->id }}"><strong>

            @if(auth()->user()->isFollowing($user))

                UnFollow

            @else

                Follow

            @endif

            </strong></button>

        </div>

    @endforeach

@endif

            </div>

        </div>
  <hr>
</div>
@endsection
@section('footer')

@endsection

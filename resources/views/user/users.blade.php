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

                <div class="card">

                    <div class="card-header">List of Users- ItSolutionStuff.com</div>


                    <div class="card-body">

                        <div class="row pl-5">

                            @include('userList', ['users'=>$users])

                        </div>

                    </div>

                </div>

            </div>

        </div>
  <hr>
</div>
@endsection
@section('footer')

@endsection

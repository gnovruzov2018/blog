@extends('main')

@section('title','| View Post')

@section('content')
	<div class="col-md-8">
		<h1>{{ $post->titlee }}</h1>

		<p class="lead">{{ $post->bodyy }}</p>
	</div>

	<div class="col-md-4">
		<div class="well">
			
		</div>
	</div>
@endsection
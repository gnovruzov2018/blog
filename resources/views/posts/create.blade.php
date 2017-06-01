@extends('main')

@section('title','| Create New Post')

@section('stylesheets')

	{!! Html::style('cdd/parsley.css') !!}

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
		{!! Form::open(['route' => 'posts.store', 'data-parsley-validate'=>'']) !!}
    		{{ Form::label('titlee','Title:')}}
    		{{ Form::text('titlee',null,array('class'=>'form-control','required'=>''))}}
    		{{ Form::label('post',"Post Body:")}}
    		{{ Form::textarea('bodyy', null, array('class'=>'form-control','required'=>''))}}
    		{{ Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px;'))}}
		{!! Form::close() !!}
		</div>
	</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection
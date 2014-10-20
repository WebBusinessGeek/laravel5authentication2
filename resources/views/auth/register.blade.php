@extends('templates.master')


@section('content')

	@if($errors)
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	@endif

	{!! Form::open(['route' => 'signup']) !!}

		<div class="form-group">
			{!! Form::label('email', 'Email: ') !!}

			{!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'enter your email')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password: ') !!}

			{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'enter a password')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirm It: ') !!}

			{!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'password one more time please')) !!}
		</div>

		{!! Form::submit('Signup', array('class' => 'btn btn-primary')) !!}

		{!! Form::close() !!}


@stop
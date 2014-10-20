@extends('templates.master')


@section('content')

	{!! Form::open(['action'=>'AuthController@register']) !!}

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

		{!! Form::button('Signup', array('class' => 'btn btn-primary')) !!}

		{!! Form::close() !!}


@stop
@extends('templates.master')


@section('content')

	{!! Form::open() !!}

		<div class="form-group">
			{!! Form::label('email', 'Email: ') !!}

			{!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'enter your email')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password: ') !!}

			{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'duh!')) !!}
		</div>

		

		{!! Form::submit('Login', array('class' => 'btn btn-primary')) !!}

		{!! Form::close() !!}


@stop
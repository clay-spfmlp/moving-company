@extends('layouts.default')

@section('content')

{!! Form::open(['route' => 'crews.store']) !!}
	@include('crews.form', ['submitText' => 'Create'])
{!! Form::close() !!}

@stop
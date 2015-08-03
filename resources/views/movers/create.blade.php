@extends('layouts.default')

@section('content')

{!! Form::open(['route' => 'movers.store']) !!}
	@include('movers.form', ['submitText' => 'Create'])
{!! Form::close() !!}

@stop
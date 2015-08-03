@extends('layouts.default')

@section('content')

{!! Form::open(['route' => 'trucks.store']) !!}
	@include('trucks.form', ['submitText' => 'Create'])
{!! Form::close() !!}

@stop
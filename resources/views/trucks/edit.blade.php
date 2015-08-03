@extends('layouts.default')

@section('content')

<h1>Edit: {!! $truck->name !!}</h1>
<hr>

{!! Form::model($truck, ['route' => ['trucks.update', $truck->id], 'method' => 'PATCH']) !!}
	@include('trucks.form', ['submitText' => 'Update'])
{!! Form::close() !!}

@stop
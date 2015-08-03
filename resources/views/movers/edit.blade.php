@extends('layouts.default')

@section('content')

<h1>Edit: {!! $mover->first_name !!} {!! $mover->last_name !!}</h1>
<hr>

{!! Form::model($mover, ['route' => ['movers.update', $mover->id], 'method' => 'PATCH']) !!}
	@include('movers.form', ['submitText' => 'Update'])
{!! Form::close() !!}

@stop
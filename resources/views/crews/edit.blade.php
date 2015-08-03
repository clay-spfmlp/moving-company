@extends('layouts.default')

@section('content')

<h1>Edit: {!! $crew->name !!}</h1>
<hr>

{!! Form::model($crew, ['route' => ['crews.update', $crew->id], 'method' => 'PATCH']) !!}
	@include('crews.form', ['submitText' => 'Update'])
{!! Form::close() !!}

@stop
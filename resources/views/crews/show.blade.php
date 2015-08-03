@extends('layouts.default')

@section('content')

<h1>{!! $crew->name !!}</h1>
<hr>

<div><h4>Truck: </h4>@if($crew->truck){!! $crew->truck->name !!}@endif</div>

<div>
	<h4>Movers: </h4>
	@if($crew->movers)
	@foreach($crew->movers as $mover)
		<div>{!! $mover->first_name !!} {!! $mover->last_name !!}<div>
	@endforeach
	@endif
</div>



@stop
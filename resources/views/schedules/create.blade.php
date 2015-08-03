@extends('layouts.default')

@section('content')

<h1>Create a Schedule</h1>
<hr>

{!! Form::open(['route' => 'schedule.store']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Crew Name') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		{!! '<span style="color:red">'.$errors->first('name').'</span>' !!}
	</div>

	@if(count($trucks) == 1)
	<div class="form-group">
		{!! Form::label('truckname', 'Truck Name') !!}
		{!! Form::text('truckname', null, ['class' => 'form-control']) !!}
		{!! '<span style="color:red">'.$errors->first('truckname').'</span>' !!}
	</div>
	@else
	<div class="form-group">
		{!! Form::label('truck_id', 'Truck') !!}
		{!! Form::select('truck_id', $trucks, null, ['class' => 'setTruck selectpicker']) !!}
	</div>
	@endif

	@if(count($movers) == 0)
	<div class="form-group">
		{!! Form::label('first_name', 'Mover First Name') !!}
		{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
		{!! '<span style="color:red">'.$errors->first('first_name').'</span>' !!}
	</div>
	<div class="form-group">
		{!! Form::label('last_name', 'Mover Last Name') !!}
		{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
		{!! '<span style="color:red">'.$errors->first('last_name').'</span>' !!}
	</div>
	@else
	<div class="form-group">
		{!! Form::label('mover_id[]', 'Movers') !!}
		{!! Form::select('mover_id[]', $movers, null, ['class' => 'setMover selectpicker', 'multiple' => 'multiple']) !!}
	</div>
	@endif

	<div>
		{!! Form::submit('Create', ['class' => 'btn btn-success']) !!}
		{!! HTML::link('/', 'Cancel', ['class' => 'btn btn-danger']) !!}
	</div>

{!! Form::close() !!}

@stop
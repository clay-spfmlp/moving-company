@extends('layouts.default')

@section('content')

<h1>Schedule</h1>
<hr>

<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th class="col-sm-2">Crew</th>
			<th class="col-sm-3">Movers</th>
			<th class="col-sm-7">Trucks</th>
			
		</tr>
	</thead>
	<tbody>
	@if($crews)
	@foreach($crews as $crew)
		<tr>
			<td>{!! HTML::linkRoute('crews.show', $crew['name'], $crew['id']) !!}</td>
			<td>{!! select_mover($crew['id'], $mover[$crew['id']]) !!}</td>
			<td>{!! select_truck($crew['truck_id'], $crew['id']) !!}</td>
		</tr>
	@endforeach
	@else
	<tr><td>{!! HTML::linkRoute('schedule.create', 'Create a Schedule') !!}</td></tr>
	@endif
	</tbody>
</table>
@stop

@section('script')
<script type="text/javascript">
$( document ).ready(function() {

    $('.setTruck').on('change', function(){
    	var crewid = $(this).attr('data-crew-id'),
    		form = $(this).parent('form'),
    		url = $(this).parent('form').attr('action');
    		$.post( url, $(form).serialize(), function(data){
    			var type = data.type,
    				delay = data.delay;

    				if(type == 'error'){
    					alertify.log(data.message, '', 0);
    					return
    				}
    			alertify.success(data.message);
    		}, 'json' );
    });

    $('.setMover').on('change', function(){
    	var crewid = $(this).attr('data-crew-id'),
		form = $(this).parent('form'),
		url = $(this).parent('form').attr('action');
		$.post( url, $(form).serialize(), function(data){
			var type = data.type,
				delay = data.delay;

				if(type == 'error'){
					alertify.log(data.message, '', 0);
					return
				}
			alertify.success(data.message);
		}, 'json' );
    });

});
</script>
@stop
@extends('layouts.default')

@section('content')

<h1>All Trucks</h1>
<hr>

{!! HTML::linkRoute('trucks.create', 'Add New Truck', [], ['class' => 'btn btn-primary']) !!}


<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>Name</th>
			<th class="col-sm-1">Edit</th>
			<th class="col-sm-1">Delete</th>
		</tr>
	</thead>
	<tbody>
	@foreach($trucks as $truck)
		<tr>
			<td>{!! $truck->name !!}</td>
			<td>{!! HTML::linkRoute('trucks.edit', 'Edit', $truck->id, ['class' => 'btn btn-success']) !!} </td>			
			<td>
				{!! delete_record('truck', $truck->id) !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop

@section('script')
<script type="text/javascript">
	$('.delete').on('click', function(event){
		event.preventDefault();
		var id = $(this).attr('data-id'),
			route = $(this).attr('data-route');
		alertify.set({ buttonReverse: true });
		alertify.confirm("Are you sure?", function (e) {
		    if (e) {
		        $('#' + route + '_delete_form_' + id).submit();
		    } else {
		        return;
		    }
		});

	})
</script>
@stop
<?php

function set_active($path, $active = 'active')
{
	return Request::is($path . '*') ? $active : '' ;
}

function delete_record($route, $id)
{
	$form  = Form::open(['route' => [$route . 's.destroy', $id], 'method' => 'DELETE', 'id' => $route . '_delete_form_' . $id]);
	$form .= Form::button('Delete', ['class' => 'btn btn-danger delete', 'data-id' => $id, 'data-route' => $route]);
	$form .= Form::close();
	return $form;
}

function select_truck($truck_id, $crew_id)
{
	$field  = Form::open(['route' => ['set.truck', $crew_id]]);
	$field .= Form::select('truck_id', App\Models\Truck::truckList(), $truck_id, ['class' => 'setTruck selectpicker', 'data-crew-id' => $crew_id]);
	$field .= Form::close();
	return $field;
}

function select_mover($crew_id, $crew_mover)
{
	//$field  = '<span class="openMoverField btn btn-primary" data-id="' . $crew_id . '" id="open_mover_field_' . $crew_id . '">Select Movers</span>';
	//$field .= '<div class="setMoverField" id="mover_field_' . $crew_id . '">';
	$field  = Form::open(['route' => ['set.mover', $crew_id], 'id' => 'set_mover_form_' . $crew_id, 'class' => 'setMoverForm', 'data-id' => $crew_id]);
	$field .= Form::select('mover_id[]', App\Models\Mover::moverList(), $crew_mover, ['class' => 'setMover selectpicker', 'multiple' => 'multiple', 'data-crew-id' => $crew_id]);
	//$field .= Form::submit('Add', ['class' => 'btn btn-success add-mover']);
	$field .= Form::close();
	//$field .= '</div>';
	//$field .= '<span class="closeMoverField btn btn-danger" data-id="' . $crew_id . '" id="close_mover_field_' . $crew_id . '">Close</span>';
	return $field;
}
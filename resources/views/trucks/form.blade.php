<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
	{!! '<span style="color:red">'.$errors->first('name').'</span>' !!}
</div>

<div>
	{!! Form::submit($submitText, ['class' => 'btn btn-success']) !!}
	{!! HTML::linkRoute('trucks.index', 'Cancel', [], ['class' => 'btn btn-danger']) !!}
</div>
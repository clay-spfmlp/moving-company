<div class="form-group">
	{!! Form::label('first_name', 'First Name') !!}
	{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
	{!! '<span style="color:red">'.$errors->first('first_name').'</span>' !!}
</div>
<div class="form-group">
	{!! Form::label('last_name', 'Last Name') !!}
	{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
	{!! '<span style="color:red">'.$errors->first('last_name').'</span>' !!}
</div>
<div>
	{!! Form::submit($submitText, ['class' => 'btn btn-success']) !!}
	{!! HTML::linkRoute('movers.index', 'Cancel', [], ['class' => 'btn btn-danger']) !!}
</div>

<div class="row">
	<div class="col-md-10">
		<div class="md-form{{ $errors->has('nama') ? ' has-error' : '' }}" >
			<i class="fa fa-list prefix"></i>
				{!! Form::text('nama', null, ['class'=>'form-control']) !!}
				{!! Form::label('nama', 'Nama Satuan') !!}
				{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
		</div>
		        <div class="text-xs-center">
            		<button type="submit" class="btn btn-success btn-sm">Selesai</button>
        		</div>
	</div>
	<div class="col-md-2"></div>
</div>
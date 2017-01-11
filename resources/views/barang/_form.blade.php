		<div class="md-form{{ $errors->has('kode_barang') ? ' has-error' : '' }}" >
			<i class="fa fa-qrcode prefix"></i>
				{!! Form::text('kode_barang', null, ['class'=>'form-control']) !!}
				{!! Form::label('kode_barang', 'Kode') !!}
				{!! $errors->first('kode_barang', '<p class="help-block">:message</p>') !!}
		</div>

		<div class="md-form{{ $errors->has('nama_barang') ? ' has-error' : '' }}" >
			<i class="fa fa-th-large prefix"></i>
				{!! Form::text('nama_barang', null, ['class'=>'form-control']) !!}
				{!! Form::label('nama_barang', 'Nama Barang') !!}
				{!! $errors->first('nama_barang', '<p class="help-block">:message</p>') !!}
		</div>

		<div class="md-form{{ $errors->has('kategori_barang') ? 'has-error':'' }}">
			<i class="fa fa-list prefix"></i>
			{!! Form::select('kategori_barang', [''=>'']+App\Kategori_barang::pluck('nama','id')->all(),null,[
				'class'=>'js-selectize',
				'placeholder'=>'Pilih Kategori'
			]) !!}
			{!! $errors->first('kategori_barang', '<p class="help-block">:message</p>') !!}
		</div>

		<div class="md-form{{ $errors->has('stok_barang') ? ' has-error' : '' }}" >
			<i class="fa fa-square prefix"></i>
				{!! Form::number('stok_barang', null, ['class'=>'form-control','min'=>'1']) !!}
				{!! Form::label('stok_barang', 'Stok') !!}
				{!! $errors->first('stok_barang', '<p class="help-block">:message</p>') !!}
		</div>

		<div class="md-form{{ $errors->has('satuan_barang') ? 'has-error':'' }}">
			<i class="fa fa-info prefix"></i>
			{!! Form::select('satuan_barang', [''=>'']+App\Satuan::pluck('nama','id')->all(),null,[
				'class'=>'js-selectize',
				'placeholder'=>'Pilih Satuan'
			]) !!}
			{!! $errors->first('satuan_barang', '<p class="help-block">:message</p>') !!}
		</div>

		<div class="md-form{{ $errors->has('harga_barang') ? ' has-error' : '' }}" >
			<i class="fa fa-money prefix"></i>
				{!! Form::number('harga_barang', null, ['class'=>'form-control','min'=>'1']) !!}
				{!! Form::label('harga_barang', 'Harga') !!}
				{!! $errors->first('harga_barang', '<p class="help-block">:message</p>') !!}
		</div>

		<div class="md-form{{ $errors->has('deskripsi') ? ' has-error' : '' }}" >
			<i class="fa fa-file-text-o prefix"></i>
				{!! Form::textarea('deskripsi', null, ['class'=>'md-textarea']) !!}
				{!! Form::label('deskripsi', 'Deskripsi') !!}
				{!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
		</div>
		
		        <div class="text-xs-center">
            		<button type="submit" class="btn btn-success btn-sm">Selesai</button>
        		</div>
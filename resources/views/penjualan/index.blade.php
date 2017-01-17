@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--Panel-->
				<div class="card">
				    <div class="card-header default-color-dark white-text">
				        Form Penjualan
				    </div>
				    <div class="card-block">
				        <h4 class="card-title">Special title treatment</h4>
				        <div class="row">
				        	<div class="col-md-3">
								<select class="mdb-select colorful-select dropdown-success">
								    <option value="" disabled selected>Jenis Penjualan</option>
								    <option value="0">Tunai</option>
								    <option value="1">Kredit</option>
								</select>
				        	</div>
				        	<div class="col-md-5"></div>
				        	<div class="col-md-4">
				        	<div class="md-form{{ $errors->has('faktur') ? 'has-error': '' }}">
								<i class="fa fa-tag prefix"></i>
									{!! Form::text('faktur', null, ['id'=>'faktur','class'=>'form-controll']) !!}
									{!! Form::label('faktur', 'Nomor') !!}
									{!! $errors->first('faktur', '<p class="help-block">:message</p>')  !!}
							</div>

							<div class="md-form{{ $errors->has('pembeli') ? 'has-error': '' }}">
								<i class="fa fa-user prefix"></i>
									{!! Form::text('pembeli', null, ['class'=>'form-controll']) !!}
									{!! Form::label('pembeli', 'Pembeli') !!}
									{!! $errors->first('pembeli', '<p class="help-block">:message</p>')  !!}
							</div>
				        	</div>
				        </div>
				        <hr>
				        <div class="row">
				        	<div class="col-md-7">
				        	<div class="row">
				        		<div class="col-md-4">
									<div class="md-form{{ $errors->has('id_barang') ? 'has-error':'' }}">
										<i class="fa fa-list prefix"></i>
										{!! Form::select('id_barang', [''=>'']+App\Barang::pluck('nama_barang','id')->all(),null,[
											'id'=>'id_barang',
											'class'=>'js-selectize',
											'placeholder'=>'Pilih Barang'
										]) !!}
										{!! $errors->first('id_barang', '<p class="help-block">:message</p>') !!}
									</div>
				        		</div>
				        		<div class="col-md-4">
									<div class="md-form{{ $errors->has('jumlah_jual') ? 'has-error':'' }}">
										{!! Form::number('jumlah_jual', null,[
											'id'=>'jumlah_jual',
											'class'=>'form-control',
											'min'=>1
										]) !!}
										{!! Form::label('jumlah_jual', 'Jumlah Jual') !!}
										{!! $errors->first('jumlah_jual', '<p class="help-block">:message</p>') !!}
									</div>
				        		</div>
				        		<div class="col-md-4">
				        			<button class="btn btn-sm btn-success btn-tambah" onclick="baris()"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Penjualan</button>
				        		</div>
				        	</div>
				        	<div class="table-responsive">
				        		<!-- table daftar barang -->
								<table class="table table-hover" id="myTable">
								    <thead>
								        <tr>
								            <th>Nama Barang</th>
								            <th>Harga Barang</th>
								            <th>Jumlah Jual</th>
								            <th>Total</th>
								            <th>Aksi</th>
								        </tr>
								    </thead>
								    <tbody>
								        <tr>
								            <td colspan="5" style="text-align: center;">~ ~ ~ ~ ~</td>
								        </tr>
								    </tbody>
								</table>
								<!-- end table -->

				        	</div>
				        	</div>
				        	<div class="col-md-5">
								<!--Panel-->
								<input type="hidden" id="pivot" disabled="">
								<input type="hidden" id="pivot_nama" disabled="">
								<div class="card">
								    <div class="card-header info-color-dark white-text">
								        -- Penjualan
								    </div>
								    <div class="card-block">
								        <div class="row">
								        	<div class="col-md-6">Total Penjualan</div>
								        	<div class="col-md-6">
											{!! Form::number('jumlah_harga', $value=0,[
												'id'=>'jumlah_harga',
												'class'=>'form-control',
												'min'=>1,
												'readonly'=>'yes'
											]) !!}
								        	</div>
								        </div>
								        <div class="row">
								        	<div class="col-md-6">Jumlah Bayar</div>
								        	<div class="col-md-6">
											{!! Form::number('jumlah_bayar', $value=0,[
												'id'=>'jumlah_bayar',
												'class'=>'form-control',
												'min'=>1
											]) !!}
								        	</div>
								        </div><hr>
								        <div class="row">
								        	<div class="col-md-6">Sisa</div>
								        	<div class="col-md-6">
											{!! Form::number('sisa', $value=0,[
												'id'=>'sisa',
												'class'=>'form-control',
												'min'=>1,
												'readonly'=>'yes'
											]) !!}
								        	</div>
								        </div>
								    </div>
								</div>
								<!--/.Panel-->
				        	</div>
				        </div>
				    </div>
				    <div class="card-footer text-muted default-color-dark white-text">
				        <p>2 days ago</p>
				    </div>
				</div>
				<!--/.Panel-->
			</div>
		</div>
	</div>
@endsection
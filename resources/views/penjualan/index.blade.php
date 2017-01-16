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
								<!--Dropdown danger-->
								<div class="dropdown">

								    <!--Trigger-->
								    <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jenis Penjualan</button>

								    <!--Menu-->
								    <div class="dropdown-menu dropdown-success" aria-labelledby="dropdownMenu2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
								        <a class="dropdown-item" href="#">Tunai</a>
								        <a class="dropdown-item" href="#">Kredit</a>
								    </div>
								</div>
								<!--/Dropdown danger-->
				        	</div>
				        	<div class="col-md-5"></div>
				        	<div class="col-md-4"></div>
				        </div>
				        
				        <!-- form atas -->
				          <div class="row">
				          <div class="col-md-4"></div>
				          <div class="col-md-5"></div>
				          <div class="col-md-3">

							<div class="md-form{{ $errors->has('faktur') ? 'has-error': '' }}">
								<i class="fa fa-tag prefix"></i>
									{!! Form::text('faktur', null, ['class'=>'form-controll']) !!}
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
						<!-- end form atas -->
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
									<div class="md-form{{ $errors->has('jumlah_beli') ? 'has-error':'' }}">
										{!! Form::number('jumlah_beli', null,[
											'id'=>'jumlah_beli',
											'class'=>'form-control',
											'min'=>1
										]) !!}
										{!! Form::label('jumlah_beli', 'Jumlah Beli') !!}
										{!! $errors->first('jumlah_beli', '<p class="help-block">:message</p>') !!}
									</div>
				        		</div>
				        		<div class="col-md-4">
				        			<button class="btn btn-sm btn-success" onclick="baris()" style="width: 95%; text-align: left;"><i class="fa fa-send-o" aria-hidden="true"></i>&nbsp;Tambah Penjualan</button><br><button class="btn btn-sm btn-danger" style="width: 95%;text-align: left;" onclick="hapus_baris()"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Hapus Baris Awal</button>
				        		</div>
				        	</div>
				        	<div class="table-responsive">
				        		<!-- table daftar barang -->
								<table class="table table-hover" id="myTable">
								    <thead>
								        <tr>
								            <th>Nama Barang</th>
								            <th>Harga Barang</th>
								            <th>Jumlah Beli</th>
								            <th>Total</th>
								        </tr>
								    </thead>
								    <tbody>
								        <tr>
								            <td>Clara</td>
								            <td>Ericson</td>
								            <td>@claris</td>
								            <td>Beckham</td>
								        </tr>
								    </tbody>
								</table>
								<!-- end table -->
				        	</div>
				        	</div>
				        	<div class="col-md-5">
								<!--Panel-->
								<button onclick="myFunction()">Try it</button>
								<p id="demo"></p>
								<div class="card">
								    <div class="card-header info-color-dark white-text">
								        Featured
								    </div>
								    <div class="card-block">
								        <h4 class="card-title">Special title treatment</h4>
								        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
								        
								    </div>
								</div>
								<!--/.Panel-->
				        	</div>
				        </div>
				        <a class="btn btn-default">Go somewhere</a>
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
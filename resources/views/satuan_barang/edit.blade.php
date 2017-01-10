@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!--Panel-->
			<div class="card">
			    <div class="card-header info-color-dark white-text">
			        Edit Satuan Barang
			    </div>
			    <div class="card-block">
			        
			        <p class="card-text"><i> Satuan barang bersifat UNIQUE yakni nama satuan tidak boleh sama </i></p>
					<hr>
					{!! Form::model($satuan_barang, ['url' => route('satuan_barang.update', $satuan_barang->id), 'method' => 'put']) !!}
			        @include('satuan_barang._form')
			        {!! Form::close() !!}
			        <br><br>
			    </div>
			</div>
			<!--/.Panel-->	
			</div>
		</div>
	</div>
@endsection
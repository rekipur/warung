@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!--Panel-->
			<div class="card">
			    <div class="card-header info-color-dark white-text">
			        Edit Kategori Barang
			    </div>
			    <div class="card-block">
			        
			        <p class="card-text"><i> Kategori Produk barang bersifat UNIQUE yakni nama kategori tidak boleh sama </i></p>
					<hr>
					{!! Form::model($kategori_barang, ['url' => route('kategori_barang.update', $kategori_barang->id), 'method' => 'put']) !!}
			        @include('kategori_barang._form')
			        {!! Form::close() !!}
			        <br><br>
			    </div>
			</div>
			<!--/.Panel-->	
			</div>
		</div>
	</div>
@endsection
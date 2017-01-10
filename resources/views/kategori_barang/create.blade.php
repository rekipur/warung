@extends('layouts.app')


@section('content')
<div class="container">
	<div class="roq">
		<div class="col-md-8">
			<!--Panel-->
			<div class="card">
			    <div class="card-header info-color-dark white-text">
			        Tambah Kategori Barang
			    </div>
			    <div class="card-block">
			        
			        <p class="card-text"><i> Kategori Produk barang bersifat UNIQUE yakni nama kategori tidak boleh sama </i></p>
					<hr>
					{!! Form::open(['url' => route('kategori_barang.store'), 'method' => 'post']) !!}
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


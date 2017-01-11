@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--Panel-->
			<div class="card">
			    <div class="card-header info-color-dark white-text">
			        Edit Barang
			    </div>
			    <div class="card-block">
					{!! Form::model($barang, ['url' => route('barang.update', $barang->id), 'method' => 'put']) !!}
			        @include('barang._form')
			        {!! Form::close() !!}
			        <br><br>
			    </div>
			</div>
			<!--/.Panel-->	
			</div>
		</div>
	</div>
@endsection
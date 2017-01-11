@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<!--Panel-->
			<div class="card">
			    <div class="card-header info-color-dark white-text">
			        Tambah Barang
			    </div>
			    <div class="card-block">
					{!! Form::open(['url' => route('barang.store'), 'method' => 'post']) !!}
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
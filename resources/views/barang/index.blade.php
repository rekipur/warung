@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

			<!--Panel-->
			<div class="card">
			    <div class="card-header success-color-dark white-text">
			        Daftar Barang
			    </div>
			    <div class="card-block">			    
			        <div class="table-responsive">
						<a href="{{ route('barang.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Barang</a>
			        	{!! $html->table(['class'=>'table table-striped']) !!}
			        </div>
			        
			    </div>
			</div>
			<!--/.Panel-->

			</div>
		</div>
	</div>
@endsection
@section('scripts')
	{!! $html->scripts() !!}
@endsection
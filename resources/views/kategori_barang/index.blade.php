@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<!--Panel-->
			<div class="card">
			    <div class="card-header danger-color-dark white-text">
			        Daftar Kategori Barang
			    </div>
			    <div class="card-block">
					<a href="{{ route('kategori_barang.create') }}" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i>&nbsp; Kategori Barang</a>			    
			        <hr>
			        <div class="table-responsive">
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
@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

			<!--Panel-->
			<div class="card">
			    <div class="card-header success-color-dark white-text">
			        History Barang Masuk
			    </div>
			    <div class="card-block">			    
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
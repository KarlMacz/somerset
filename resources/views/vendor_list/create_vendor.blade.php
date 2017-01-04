@extends('master_layout.master_page_layout')
@section('content')
	<div class="">
	  	<div class="page-title">
	     	<div class="title_left">
	        	<h3><i class="fa fa-shopping-basket"></i> Vendors</h3>
	     	</div>
	  	</div>
	  	<div class="clearfix"></div>
	  	<div class="col-md-12 col-sm-12 col-xs-12">
	     	<div class="x_panel">
	        	<div class="x_title">
	           		<h2>Create a New Vendor</h2>
	          	 	<ul class="nav navbar-right panel_toolbox">
	              		<li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
	              		</li>
	           		</ul>
	           		<div class="clearfix"></div>
	        	</div>
	        	<div class="x_content">
	           		{!! Form::open(['url'=>'vendor','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}
	                    @include('vendor_list.vendor_form',['submitButton'=>'Submit']);
	               	{!! Form::close() !!}
	        	</div>
	     	</div>
	  	</div>
	</div>
@endsection
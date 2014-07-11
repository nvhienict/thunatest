@extends('main-admin')
@section('title')
Home Page Admin
@endsection
@section('content')
		<div class="col-md-10 name-admin">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="tab-content">
			  <div class="tab-pane" id="home">
			  </div>
			  <div class="tab-pane" id="users">
			  	
			  </div>
			  <div class="tab-pane in active" id="vendors">
			  <h1>List of Vendors {{HTML::linkRoute("add-vendor","Add New")}}</h1>
			  	<table class="table table-bordered table-content" width="100%">
				  <tr class="active">
				   	<td class="active">Name</td>
				   	<td class="active">Address</td>
				   	<td class="active">Website</td>
				   	<td class="active">Location</td>
				   	<td class="active">Category</td>
				   	<td class="active">Slogan</td>
				   	<td class="active">About Us</td>
				  </tr>
				  @foreach (Vendor::get() as $vendor)
				  <tr class="active row-content">
				  	<td class="active">
				  	<div id="col-content">
						<a href=""><div class="menus">{{$vendor->name}}</div></a>
						<a id="quick-menu" class="submenus" href="{{URL::to('admin/edit-vendor',array($vendor->id))}}">Edit<a/>
						<a id="quick-menu" class="submenus" href="{{URL::to('admin/delete-vendor',array($vendor->id))}}">Delete<a/>
						</div>
				  	</td>
				   	<td class="active">{{$vendor->address}}</td>
				   	<td class="active">{{$vendor->website}}</td>
				   	<td class="active">{{Vendor::find($vendor->id)->location()->get()->first()->name}}</td>
				   	<td class="active">{{Vendor::find($vendor->id)->category()->get()->first()->name}}</td>
				   	<td class="active">{{$vendor->slogan}}</td>
				   	<td class="active">{{$vendor->about_us}}</td>  
				  </tr>
				  @endforeach
				</table>
			  </div>
			<script>
			  $(function () {
			    $('#myTab a:last').tab('show')
			  })
			</script>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div> 
	</div>	
@endsection
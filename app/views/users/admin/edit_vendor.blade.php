@extends('main-admin')
@section('title')
Edit Vendor
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
			  <h1>Edit a Vendor</h1>
			  @if(isset($messages)) <p class="text-center alert alert-danger">{{$messages}}</p> @endif
			  	<form action="{{URL::to('admin/edit-vendor',array($vendor->id))}}" method="post" class="id-registry" id="form-add-vendor" accept-charset="UTF-8" enctype="multipart/form-data">
			 <div class="form-group">
			    <label for="inputName" class="col-sm-3 control-label label-lg">Name:(*)</label>
			    <div class="col-sm-9">
			      <input type="text" name="inputName" class="form-control input-lg" id="inputName" placeholder="Name" value="{{$vendor->name}}">
			      <input type="hidden" name="inputHiddenName" value="{{$vendor->name}}">
			    </div>
			    @foreach ($errors->get('inputName') as $message)
			    <p class="text-left alert alert-danger">{{$message}}</p>
			    @endforeach
			  </div>
			  <div class="form-group">
			    <label for="inputAddress" class="col-sm-3 control-label label-lg">Address:(*)</label>
			    <div class="col-sm-9">
			      <input type="text" name="inputAddress" class="form-control input-lg" id="inputAddress" placeholder="Address" value="{{$vendor->address}}">
			    </div>
			    @foreach ($errors->get('inputAddress') as $message)
			    	<p class="text-left alert alert-danger ">{{$message}}</p>
			    @endforeach
			  </div>
			  <div class="form-group">
			    <label for="inputSlogan" class="col-sm-3 control-label label-lg">Slogan:</label>
			    <div class="col-sm-9">
			      <input type="text" name="inputSlogan" class="form-control input-lg" id="inputSlogan"  value="{{$vendor->slogan}}"placeholder="Slogan">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputWebsite" class="col-sm-3 control-label label-lg">Website:</label>
			    <div class="col-sm-9">
			      <input type="text" name="inputWebsite" class="form-control input-lg" id="inputWebsite" placeholder="Website" value="{{$vendor->website}}">
			    </div>
			    
			    @foreach ($errors->get('inputWebsite') as $message)
			    <p class="text-left alert alert-danger ">{{$message}}</p>
			    @endforeach  
			  </div>
			  <div class="form-group">
			    <label for="inputBlog" class="col-sm-3 control-label label-lg">Blog:</label>
			    <div class="col-sm-9">
			      <input type="text" name="inputBlog" class="form-control input-lg" id="inputBlog" placeholder="Blog" value="{{$vendor->blog}}">
			    </div>
			    
			    @foreach ($errors->get('inputBlog') as $message)
			    <p class="text-left alert alert-danger ">{{$message}}</p>
			    @endforeach  
			  </div>
			  <div class="form-group">
			    <label for="inputAboutUs" class="col-sm-3 control-label label-lg">About Us:(*)</label>
			    <div class="col-sm-9">
			      <textarea class="form-control" name="inputAboutUs" rows="3">{{$vendor->about_us}}</textarea>
			    </div>
			    @foreach ($errors->get('inputAboutUs') as $message)
			    <p class="text-left alert alert-danger ">{{$message}}</p>
			    @endforeach  
			  </div>
			  <div class="form-group">
			    <label for="inputAvatar" class="col-sm-3 control-label label-lg">Avatar:(*)</label>
			    <div class="col-sm-3">
			       <input type="file" name="inputImage" id="inputImage" value="">
			       <input type="hidden" name="inputHiddenImage" value="{{$vendor->avatar}}">
			       {{ HTML::image($vendor->avatar, $alt="Avartar", $attributes = array("style"=>"width: 200px; height: 150px; margin-bottom:20px")) }}  
			    </div>
				
			  </div>
			  <div class="form-group form-select">
			    <label for="inputCategory" class="col-sm-3 control-label label-lg">Category:</label>
			    <div class="col-sm-4">
			      <select name="category" class="form-control">
					  @foreach(Category::get() as $category)
					  <option value="{{$category->id}}"
					   @if($category->id==$vendor->id_category) {{"selected"}} @endif>{{$category->name}}</option>
					  @endforeach
					</select>
			    </div>
			  </div>

			  <div class="form-group form-select">
			    <label for="inputLocation" class="col-sm-3 control-label label-lg">Location:</label>
			    <div class="col-sm-4">
			      	<select name="location" class="form-control">
			      		@foreach(Location::get() as $loca)
					  	<option value="{{$loca->id}}"
					  	@if($loca->id==$vendor->id_location) {{"selected"}} @endif>{{$loca->name}}</option>
					  	@endforeach
					</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-3 col-sm-10">
			      <button type="submit" class="btn btn-default btn-lg submit">Edit Vendor</button>
			    </div>
			  </div>
			</form>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/bootstrap.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/style-admin.css")}}">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="{{Asset("assets/js/bootstrap.js")}}"></script>
</head>
<body>
<div class="container-fuild">
	<div class="row bar-header">
		<div class="col-md-10"></div>
		<div class="col-md-2 name-admin text-left">Hi, Admin!!!
		 {{HTML::linkRoute("logout-admin","Log Out")}}
		</div>
	</div>
	<div class="row bar-content">
		<div class="col-md-2 nav-bar-admin">
			<ul class="nav nav-pills nav-stacked" role="tablist" id="myTab">
			  <li><a href="#home" role="tab" data-toggle="tab">Home</a></li>
			  <li><a href="#users" role="tab" data-toggle="tab">Users</a></li>
			  <li class="active"><a href="#vendors" role="tab" data-toggle="tab">Vendor</a></li>
			</ul>
		</div>
@yield('content')
</div>
</body>
</html>
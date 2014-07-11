<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/bootstrap.css")}}">
	<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/style.css")}}">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="{{Asset("assets/js/jquery-validate/jquery.validate.js")}}"></script>
	<script src="{{Asset("assets/js/jquery.tools.min.js")}}"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	 <script>
	$(function() {
		$( "#datepicker" ).datepicker({
			dateFormat: 'yy-mm-dd'
		});
		});
	</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container-fluid">
	<header>
		<div class="sidebar-a">
			<div class="row">
  				<div class="col-md-4 pull-right">
	  				<a class="selected" href="">Join now</a>
	  				<a href="">Login</a>
	  				<a href="">Write a Review</a>
	  				<a href="">Are you a Vendor?</a>
  				</div>
			</div>
		</div><!-- /sidebar -->
		<h1>WeddingWire<a href""></a></h1>
		<div class="sidebar-b text-center">
			<ul class="list-inline">
				<li><a href="">Planning Tools</a></li>
				<li><a href="">Vendors</a></li>
				<li><a href="">Forums</a></li>
				<li><a href="">Dresses</a></li>
				<li><a href="">Photos</a></li>
				<li><a href="">Songs</a></li>
				<li><a href="">Registry</a></li>
				<li><a href="">Travel</a></li>
				<li><a href="">Events</a></li>
				<li><a href="">More</a></li>
			</ul>
		</div><!--sidebarb-->
	</header><!-- /header -->
</div><!-- /container -->
<div class="container">
<div class="row register">
	<div class="col-md-9">
		<h2 class="header-sign-up">Sign Up for a Free WeddingWire Account</h2>
				@if(isset($messages)) <p class="text-center alert alert-danger">{{$messages}}</p> @endif
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10 pull-right">
			<form action="{{Asset('register')}}" method="post" class="id-registry" id="form-register">
			 <div class="form-group">
			    <label for="inputName3" class="col-sm-3 control-label label-lg">Name:</label>
			    <div class="col-sm-4">
			      <input type="text" name="inputFirstName" class="form-control input-lg" id="inputFirstName" placeholder="FirstName">
			    </div>
			    <div class="col-sm-5 last-name">
			      <input type="text" name="inputLastName" class="form-control input-lg" id="inputLastName" placeholder="LastName">
			    </div>
			    @foreach ($errors->get('inputFirstName') as $message)
			    <p class="text-left alert alert-danger">{{$message}}</p>
			    @endforeach
			     
			    @foreach ($errors->get('inputLastName') as $message)
			    <p class="text-left alert alert-danger ">{{$message}}</p>
			    @endforeach
			    
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-3 control-label label-lg">Email:</label>
			    <div class="col-sm-9">
			      <input type="email" name="inputEmail" class="form-control input-lg" id="inputEmail" placeholder="Email">
			    </div>
			    @foreach ($errors->get('inputEmail') as $message)
			    	<p class="text-left alert alert-danger ">{{$message}}</p>
			    @endforeach
			    
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-3 control-label label-lg">Password:</label>
			    <div class="col-sm-9">
			      <input type="password" name="inputPassword" class="form-control input-lg" id="inputPassword" placeholder="Password">
			    </div>
			     
			    @foreach ($errors->get('inputPassword') as $message)
			    <p class="text-left alert alert-danger ">{{$message}}</p>
			    @endforeach  
			  </div>
			  <div class="form-group">
			    <label for="inputWeddingDate" class="col-sm-3 control-label label-lg">WeddingDate:</label>
			    <div class="col-sm-5">
			      <input type="date" name="inputWeddingDate" class="form-control input-lg" id="datepicker" placeholder="WeddingDate">
			    </div>
			     
			    @foreach ($errors->get('inputWeddingDate') as $message)
			    <p class="text-left alert alert-danger ">{{$message}}</p>
			    @endforeach
			  </div>
			 <p>*All fields are required</p>
			 <p>By clicking "Create Account" you agree to WeddingWire's<a href="#">Terms of Use</a></p>
			  <div class="form-group">
			    <div class="col-sm-offset-3 col-sm-10">
			      <button type="submit" class="btn btn-lg submit">Create Account</button>
			    </div>
			  </div>
			</form>
		</div>
		</div>
	</div>
	<div class="col-md-3">
		<ul>
		<li>Already a Member? <a href="">Log In</a></li>
		<li>Are you a Vendor? <a href="">Log In</a></li>
		</ul>
	</div>
</div>
</div>
</body>
</html>
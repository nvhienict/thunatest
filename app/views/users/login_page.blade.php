<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/bootstrap.css")}}">
	<link rel="stylesheet" type="text/css" href="{{Asset("assets/css/style.css")}}">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="{{Asset("assets/js/bootstrap.js")}}"></script>
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
	<div id="content">
		<div class="row">
			<div class="col-md-5">
				<h2 class="header-sign-up">Log in to WeddingWire</h2>
				@if(isset($messages)) <p class="text-center alert alert-success">{{$messages}}</p>
				@endif
				<form action="{{Asset('login')}}" method="post" class="form-horizontal form-login" role="form">
				  <div class="form-group">
				    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox" name="remember"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default btn-lg submit">Log in</button>
				    </div>
				  </div>
				  <p><a href="#">Forgot your password?</a></p>
				  <p><a href="#">Are you a vendor?</a></p>
				</form>				
			</div>
			<div class="col-md-4 login">
				<h3 class="header-2-sign-up">Not a member yet? <a href="">Join Now</a></h3>
				<div class="login_facebook">
					<h3>Have a Facebook account?</h3>
					<div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/" data-colorscheme="light"></div>
					<p>Create a new account or link your current WeddingWire account with your Facebook account.</p>
				</div>
			</div>
			<div class="col-md-3 welcome">
				<h3>Welcome Back to WeddingWire!</h3>
				<strong>Did you know that we offer you:</strong>
				<ul>
					<li><i class=" glyphicon glyphicon-map-marker"></i> Over 200,000 reviewed vendors</li>
					<li><i class="glyphicon glyphicon-star"></i> Recent reviews from real newlyweds</li>
					<li><i class="glyphicon glyphicon-th"></i> Free wedding planning tools</li>
					<li><i class="glyphicon glyphicon-phone"></i> A free wedding website</li>
					<li><i class="glyphicon glyphicon-phone"></i> Access to tools on your iPhone</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>
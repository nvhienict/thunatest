<!-- app/views/users/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I am showing</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('users') }}">User Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('users') }}">View All Users</a></li>
		<li><a href="{{ URL::to('users/create') }}">Create a User</a>
	</ul>
</nav>

<h1>Showing {{ $user->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $user->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $user->email }}<br>
			<strong>Role:</strong> {{ $user->role }}
		</p>
	</div>

</div>
</body>
</html>
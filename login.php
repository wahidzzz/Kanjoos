<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Login at Kanjoos</title> <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login-style.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>

<body class="blue lighten-3">
	<div id="preloader"></div>
	<div class="row">
		<div class="header">
			<h2>Login</h2>
		</div>
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
			<p class="center white-text">
				Not yet a member ? <a href="register.php">Sign up</a>
			</p>
			<div class="col s12 input-group white-text">
				<label>Username</label>
				<input type="text" name="username" required>
			</div>
			<div class=" col s12 input-group white-text">
				<label>Password</label>
				<input type="password" name="password" required>
			</div>
			<div class="col s6 input-group">
				<button type="submit" class="btn indigo" name="login_user">Login</button>
			</div>
			<div class="col s6 input-group">
				<button type="reset" class="btn pink" value="Reset" name="login_user">Cancel</button>
			</div>
		</form>
	</div>
</body>

</html>
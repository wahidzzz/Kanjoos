<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Register at Kanjoos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login-style.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>

<body class="blue lighten-3">
	<div id="preloader"></div>
	<div class="row">
		<div class="header">
			<h2>Register</h2>
		</div>
		<div class="row">
			<form method="post" action="register.php">
				<?php include('errors.php'); ?>
				<p class="center white-text">
					Already a member ? <a href="login.php">Sign in</a>
				</p>
				<div class="col s6 input-group white-text">
					<label>Username</label>
					<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
				</div>
				<div class="col s6 input-group white-text">
					<label>Email</label>
					<input class="validate" type="email" name="email" placeholder="ex. wahid@kanjoos.com" value="<?php echo $email; ?>" required>
				</div>

				<div class="col s12 input-group white-text">
					<label>Password</label>
					<input type="password" name="password_1" placeholder="password" required>
				</div>
				<div class="col s12 input-group white-text">
					<label>Confirm password</label>
					<input type="password" name="password_2" placeholder="Confirm">
				</div>

				<div class="col s6 input-group">
					<button type="submit" class="btn indigo" name="reg_user">Register</button>
				</div>
				<div class="col s6 input-group">
					<button type="reset" class="btn pink"  value="Reset" name="reg_user">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>
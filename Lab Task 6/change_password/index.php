<?php
#index = Main login Page
	session_start();

	//redirect to home if session has been set
	if(isset($_SESSION['user'])){
		header('location:home.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Login Page</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 panel panel-default" style="padding:20px;">
			<form method="POST" action="login.php">
				<p class="text-center" style="font-size:30px;"><b>Login</b></p>
				<hr>
				<div class="form-group">
					<label for="email">email:</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<button type="submit" name="login" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
			</form>
			<?php
				if(isset($_SESSION['error'])){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $_SESSION['error']; ?>
					</div>
					<?php

					unset($_SESSION['error']);
				}
			?>
		</div>
	</div>
</div>
</body>
</html>
<?php
include 'Functions.php';
?>
<?=navbar('Log In')?>

<?php

	session_start();
	//check if can login again
	if(isset($_SESSION['attempt_again'])){
		$now = time();
		if($now >= $_SESSION['attempt_again']){
			unset($_SESSION['attempt']);
			unset($_SESSION['attempt_again']);
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Love U a Latte Employee Login</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 panel panel-default" style="padding:20px;">
			<form method="POST" action="login.php">
				<p class="text-center" style="font-size:25px;"><b>Login</b></p>
				<hr>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" name="username" id="username" class="form-control" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Password">
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

				if(isset($_SESSION['success'])){
					?>
					<div class="alert alert-success text-center" style="margin-top:20px;">
						<?php echo $_SESSION['success']; ?>
					</div>
					<?php

					unset($_SESSION['success']);
				}
			?>
		</div>
	</div>
</div>
</body>
</html>

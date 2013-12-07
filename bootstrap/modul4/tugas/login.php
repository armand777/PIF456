<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<style type="text/css">
			.form-signin {
				max-width: 300px;
				padding: 19px 29px 29px;
				margin: 0 auto 20px;
				background-color: gray;
				border: 5px solid white;
				border-radius: 5px;
			}
			.form-signin .form-signin-heading,
			.form-signin .checkbox {
				margin-bottom: 25px;
			}
			.form-signin input[type="text"],
			.form-signin input[type="password"] {
				font-size: 16px;
				height: auto;
				margin-bottom: 15px;
				padding: 7px 9px;
			}
			body {
				padding-top: 150px;
				padding-bottom: 100px;
				background-color: black;
			}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php
		session_start();
		if (isset($_SESSION['user'])) {
			session_destroy();
		}
		?>
		<div class="container">
		<form class="form-signin" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<h2 align="center" class="form-signin-heading">LOGIN</h2>
			<input type="text" class="input-block-level" name="username" placeholder="Username">
			<input type="password" class="input-block-level" name="password" placeholder="Password"><br>
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			<br>
			<button class="btn btn-default" type="submit">Sign in</button>
		</form>

    </div> <!-- /container -->
		<div align = "center">
<?php
			$acc_user = 'admin';
			$acc_pas = 'admin';
			if (isset($_POST['username']) && isset($_POST['password'])) {
				//$username = $_POST['username']; //diambil dari nama input di form login
				//$password = $_POST['password']; //diambil dari nama input di form login
				$username = strip_tags($_POST['username']);
				$password = strip_tags($_POST['password']);
				if (($username==$acc_user)&&($password==$acc_pas)){
					$_SESSION['user'] = $username;
?>
					<script type="text/javascript">
						document.location.href="index.php";
					</script>
<?php
				}
				else {
?>
					<div class="alert alert-danger">Username or Password not Matched</div>
<?php
				}
			}
?>
		</div>
	</body>
</html>
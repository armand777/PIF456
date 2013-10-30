<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head> 
		<title>Login</title>
	</head>
	<body>
		<?php 
			session_start();
			if (isset($_SESSION['user'])){
				session_destroy();
			}
		?> 
		<form id="loginForm" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<div class="border1">
				<div class="border2">
					<h3 align="center">LOGIN </h3>
					<hr/>
					<p><strong>Username</strong><br />
						<input type="text" name="username" size="30"/>
					</p>
					<p><strong>Password</strong><br />
						<input type="password" name="password" size="30"/>
					</p>
					<p>
						<input type="submit" value="Login" onclick="login();"/>
					</p>
				</div>
			</div>
		</form>
		<div align = "center">
			<?php 
				$acc_user = 'armand';
				$acc_pas = 'armand';
				if (isset($_POST['username']) && isset($_POST['password'])) { 
					$username = strip_tags($_POST['username']);
					$password = strip_tags($_POST['password']);
					if (($username==$acc_user)&&($password==$acc_pas)){
						$_SESSION['user'] = $username;
						echo ' Login Success, Welcome <br/>'.
						'<a href="tugas1b.php">Next</a><br/>';
					}
					else {
						echo ' Username or Password Invalid <br/>'.
						'<a href="tugas1b.php">Please Try Again</a>';
					}
				}
			?>
		</div>
	</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>login</title>
		<style type="text/css">
			<!--
			.border1 {
				border: 5px dashed White;
				background: Gray;
				margin: auto;
				width: 350px;
				height: 350px;
				margin-top: 150px;
			}
			.border2 {
				background: White;
				padding: 5px 40px 5px 40px;
			}
			body {
				background-color: Black;
			}
			-->
		</style>
	</head>
	<body>
		<?php
		session_start();
		if (isset($_SESSION['user'])) {
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
			$acc_user = 'admin';
			$acc_pas = 'admin';
			if (isset($_POST['username']) && isset($_POST['password'])) {
				//$username = $_POST['username']; //diambil dari nama input di form login
				//$password = $_POST['password']; //diambil dari nama input di form login
				$username = strip_tags($_POST['username']);
				$password = strip_tags($_POST['password']);
				if (($username==$acc_user)&&($password==$acc_pas)){
					$_SESSION['user'] = $username;
					echo ' login berhasil, selamat datang <br/>'.
					'<a href="tugasb.php">Lanjutkan</a><br/>';
				}
				else {
					echo ' username atau pasword yang anda masukkan salah<br/>'.
					'<a href="tugasa.php">Silahkan Mencoba Lagi</a>';
				}
			}
			?>
		</div>
	</body>
</html>
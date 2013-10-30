<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tugas Praktikum</title>
		<style type="text/css">
			<!--
			.border1 {
				border: 2px solid red;
				background: #6cae15;
				margin: auto;
				width: 300px;
				height: 250px;
				margin-top:100px;
			}
			.border2 {
				background: #6cae15;
				padding: 5px 40px 5px 40px;
			}
			body {
				background-color: #CC6;
			}
			-->
		</style>
	</head>
	<body>
		<form id="loginForm" action="proses.php" method="post">
			<div class="border1">
				<div class="border2">
					<h3 align="center">LOGIN</h3>
					<hr/>
					<p><strong>User Name</strong><br />
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
	</body>
</html>

<script type="text/javascript">
	function login() {
		var loginForm = document.getElementById("loginForm");
		if (loginForm.username.value == "") {
			alert("Masukkan User Name");
			return false;
		}
		if (loginForm.password.value == "") {
			alert("Masukkan Password");
			return false;
		}
	}
</script>
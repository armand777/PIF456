<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head> 
		<title>Halaman Admin</title> 
			<style type="text/css"> 
				.border {
					border: 10px solid white;
					background: gray;
					margin: auto;
					width: 250px;
					height: 250px;
					margin-top:150px;
				}
				body {
					background-color: Black;
				}
			</style > 
	</head> 
	<body> 
		<?php
			session_start();
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
				echo 
				'<p align="right">
					<a href="tugas1a.php">Logout</a>
					'.$user.'
				</p color="white">
				<div class="border">
					<p align="center">
						<font color="blue" size="14">
							Welcome
							<br/>
							To
							<br/>
							Admin Page
							<br/>
						</font>
					</p>
				</div>';
			}
			else {
				header('location:tugas1a.php');
				exit;
			}
		?>
	</body>
</html>
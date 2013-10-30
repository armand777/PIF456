<div align = "center">
<?php
	require_once('tugaspraktikuma.php');
	$user = 'armand';
	$pass = 'armand';
	if ((isset($_REQUEST['username']) == $user)&&($_POST['password'] == $pass)) {
		echo "<strong><font face='Arial' size='6' color=red>Welcome<br></strong></center>". $_POST['username'];
	}
	else {
		echo "<strong><font face='Arial' size='6' color=red>Username & Password yang Anda Masukkan Tidak Sesuai<br></strong></center>";
	}
?>
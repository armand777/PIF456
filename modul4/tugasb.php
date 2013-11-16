<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tugas</title>
		<style type="text/css">
			.even {
				background: #ddd;
			}
		</style>
		<script language="JavaScript">
			function konfirmasi(Keterangan) {
				ask = confirm('Anda yakin ingin menghapus mahasiswa dengan NIM '+ Keterangan + ' ?');
				if (ask == true) {
					return true;
				}
				else {
					return false;
				}
			}
		</script>
	</head>
	<body>
<?php
		session_start();
		if(isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
			echo	'<p align="right">
					<a href="tugasa.php">Logout</a>
					'.$user.'
					</p color="red">
					<div class="border">
					<p align="center">
					<br/><br>
					</font>
					</p>
					</div>                  
					';
		}
		else {
			header('location:tugasa.php');
			exit;
		}
		ini_set('display_errors',1);
		// Meng-include file koneksi dan data handler
		require_once './koneksi.php';
		require_once './data_handler.php';
		// Konstanta nama tabel
		define('MHS', 'mahasiswa');
		// Memanggil fungsi data handler
		data_handler('?m=data');
?>
	</body>
</html>
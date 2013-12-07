<!DOCTYPE html>
<html>
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
		}
		else {
			header('location:login.php');
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
		<br />
		<div align = "center" class="alert alert-info">Data Mahasiswa S1 PTI B 2011</div>
	</body>
</html>
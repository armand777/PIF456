<!DOCTYPE html>
<html>
	<head>
		<title>Studi Kasus</title>
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
		<style type="text/css">
			.even {
			background: #ddd;
			} 
		</style>
	</head>
	<body>
<?php
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
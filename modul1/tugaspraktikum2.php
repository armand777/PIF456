<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tugas Praktikum 2</title>
	</head>
	<body>
		<form method="post">
			Jumlah kolom: <input type="text" name="kolom" />
			Jumlah sel: <input type="text" name="sel" />
			<input type="submit" />
		</form>
		<style type="text/CSS">
			table {border-collapse: collapse; width: 100%; margin: 0; padding: 0; border: 1px solid #DEDEDE; border-right: none; font-size: 14px; background: #F5F5F5}
			td {margin: 0; padding: 5px; border: 1px solid #DEDEDE}
		</style>
		<?php
		echo '<br />';
		$hitungan = 1;
		$sel = $_POST["sel"];
		$kolom = $_POST["kolom"];
		$baris = ceil($sel / $kolom);
		echo '<table>';
			for($a = 0; $a < $baris; $a++) {
				echo '<tr>';
				for($b = 0; $b < $_POST["kolom"]; $b++) {
					if($hitungan != NULL) {
						echo '<td><center>' . $hitungan . '</center></td>';
						if ($hitungan < $sel AND $hitungan != NULL) {
							$hitungan = $hitungan +1;
						}
						else {
							$hitungan = NULL;
						}
					}
				}
				echo '</tr>';
			}
		echo '</table>';
		?>
	</body>
</html>
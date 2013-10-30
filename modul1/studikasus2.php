<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Studi Kasus 2</title>
	</head>
	<body>
		<form method="post">
			Baris: <input type="text" name="baris" />
			Kolom: <input type="text" name="kolom" />
			<input type="submit" />
		</form>
		<style type="text/CSS">
			table {border-collapse: collapse; width: 100%; margin: 0; padding: 0; border: 1px solid #DEDEDE; border-right: none; font-size: 14px; background: #F5F5F5}
			td {margin: 0; padding: 5px; border: 1px solid #DEDEDE}
		</style>
		<?php
		echo '<br />';
		echo '<table>';
		for($a = 0; $a < $_POST["baris"]; $a++) {
			echo '<tr>';
			for($b = 0; $b < $_POST["kolom"]; $b++) {
				echo '<td><center>' . ($a + 1) . ':' . ($b +1) . '</center></td>';
			}
			echo '</tr>';
		}
		echo '</table>';
		?>
	</body>
</html>
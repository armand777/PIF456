<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Studi Kasus 2</title>
    </head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Hobby
            <input type="checkbox" name="hobby[]"
				<?php
					if(isset($_POST['hobby'])&&$_POST['hobby']=='Browsing') {
							echo $selected['Browsing'];
					}
				?> value="Browsing" >Browsing
            <input type="checkbox" name="hobby[]"
				<?php
					if(isset($_POST['hobby'])&&$_POST['hobby']=='Game') {
							echo $selected['Game'];
					}
				?> value="Game">Game
            <input type="checkbox" name="hobby[]"
				<?php
					if(isset($_POST['hobby'])&&$_POST['hobby']=='Mendengarkan Music') {
							echo $selected['Mendengarkan Music'];
					}
				?> value="Mendengarkan Music">Mendengarkan Music
            <br>
            <input type="submit" value="OK">
        </form>
		<?php
			// Ekstraksi nilai
			if (isset($_POST['hobby'])) {
				foreach ($_POST['hobby'] as $key => $val) {
					echo $key . ' -> ' .$val . '<br />';
				}
			}
		?>
	</body>
	
	
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Studi Kasus 1</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Prodi 
            <select name="prodi">
                <option value="PTI"
					<?php
						if(isset($_POST['prodi'])&&$_POST['prodi']=='PTI') {
							echo 'selected="selected"';
						}
					?>>PTI
				<option value="PTE"
					<?php 
						if(isset($_POST['prodi'])&&$_POST['prodi']=='PTE') {
							echo 'selected="selected"';
						}
					?>>PTE
            </select><br>                
            <input type="submit" value="OK">
        </form>
        <?php
        if(isset($_POST['prodi'])) {
            echo $_POST['prodi'];
        }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-inverse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="http://localhost/bootstrap/modul5/">Home</a></li>     
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				<a href="http://localhost/bootstrap/modul5/" class ="dropdown-toggle" data-toggle="dropdown">
					<span class="glyphicon glyphicon-user"></span>
					Armand
					<b class="caret"></b>                                                    
				</a>
				<ul class="dropdown-menu">
					<li><a "http://localhost/bootstrap/modul5/">Logout</a></li>
				</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->          
		<?php
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		$rec_limit = 5;
		if(! $conn)
		{
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db('mysql');
		$sql = "SELECT count(nim) FROM mahasiswa ";
		$res = mysql_query($sql, $conn);
		if(! $res)
		{
			die('Could not get data: ' . mysql_error());
		}                   
		$row = mysql_fetch_array($res, MYSQL_NUM);
		$rec_count = $row[0];
		if(isset($_GET{'page'}))
		{
			$page = $_GET{'page'} + 1;
			$offset = $rec_limit * $page;
		}
		else
		{
			$page = 0;
			$offset = 0;
		}             
		$left_rec = $rec_count - ($page * $rec_limit);      
		$sql = "SELECT nim, nama, alamat FROM mahasiswa LIMIT $offset, $rec_limit";
		$res = mysql_query( $sql, $conn);
		if(! $res)
		{
			die('Could not get data: ' . mysql_error());
		}
?>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-5 column">
					<div class="page-header">
						<h1>Data Mahasiswa <small>PTI B</small></h1>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>NIM</th>
								<th>Nama</th>
								<th>Alamat</th>
							</tr>
						</thead> 
						<tbody>     
<?php
							while($row = mysql_fetch_array($res, MYSQL_ASSOC))
							{
?>
								<tr>
									<td>
<?php
										echo $row['nim'];
?>
									</td>
									<td>
<?php
										echo $row['nama'];
?>
									</td>
									<td>
<?php
										echo $row['alamat'];
?>
									</td>
								</tr>
<?php    
							}
?>
						</tbody>
					</table>
					<ul class="pagination">        
<?php
					if($page > 0)
					{
						$last = $page - 2;
						echo "<li> <a href=\"?page=$last\">Last</a> </li>";
						echo "<li> <a href=\"?page=$page\">Next</a> </li>";
					}
					else if($page == 0)
					{
						echo "<li> <a href=\"?page=$page\">Next</a> </li>";
					}
					else if($left_rec < $rec_limit)
					{
						$last = $page - 2;
						echo "<li> <a href=\"?page=$last\">Last</a> </li>";
					}
					mysql_close($conn);
?>
					</ul>
				</div>
			</div>
		</div>
		<div align = "center" class="alert alert-info">Data Mahasiswa S1 PTI B 2011</div>
	</body>
</html>
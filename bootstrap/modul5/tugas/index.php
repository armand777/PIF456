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
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-5 column">
					<div class="page-header">
						<h1>Data Mahasiswa <small>PTI B</small></h1>
					</div>
					<table class="table table-bordered table-hover">
						<form method="get">
						<thead align="center">
							<tr> <th> <a href="<?php $_SERVER['PHP_SELF']?>?by=nim">NIM</a></th>
							<th><a href="<?php $_SERVER['PHP_SELF']?>?by=nama">Nama</a></a></th>
							<th><a href="<?php $_SERVER['PHP_SELF']?>?by=alamat">Alamat</a></th></tr>
						</thead>
						<tbody>
<?php
							error_reporting(0);
							require_once './koneksi.php';
							$sql = "select * from mahasiswa limit 10";
							if ($_GET['by'] == "nim") {
								$orderBy = "nim";
							}
							else if ($_GET['by'] == "nama") {
								$orderBy = "nama";
							}
							else if ($_GET['by'] == "alamat") {
								$orderBy = "alamat";
							}
							else {
								$orderBy = "nim";
							}
							$query = "SELECT * FROM mahasiswa ORDER BY ".$orderBy;
							$hasil = mysql_query($query);
							while ($data = mysql_fetch_array($hasil))
							{
								echo "<tr><td>".$data['nim']."</td><td>"
								.$data['nama']."</td><td>"
								.$data['alamat']."</td></tr>";
							}
?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div align = "center" class="alert alert-info">Data Mahasiswa S1 PTI B 2011</div>
	</body>
</html>
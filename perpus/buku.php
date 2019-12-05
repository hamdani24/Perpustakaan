<?php
require 'functions.php';

$buku = query("SELECT * FROM buku");
?>

<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Perpustakaan</title>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
		<title>Buku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>	
	<body>
		 <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo" style="color: black;">Perpustakaan </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php" style="color: black">Home</a></li>
        <li><a href="buku.php" style="color: black;">Buku</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
		<div class="container">
			<div class="card">
		<div class="card-header">
		<center><h4>Data Buku</h4></center>
	</div>
		<div class="card-body">
		<div class="form-group">
		<div class="table-responsive">
		<div class="row">
			<?php  $i = 1;?>
			<?php foreach ($buku as $row):?>

			  	<div class="col-md-3">
			<div class="card" style="width: 18rem;">
			  <div class="card-header">
			    Buku
			  </div>
			  
			  <ul class="list-group list-group-flush ">
			    <li class="list-group-item">Kode Buku : <?= $row ["kode_buku"];?></li>
			    <li class="list-group-item">Judul Buku : <?= $row ["judul_buku"];?></li>
			    <li class="list-group-item">Penerbit : <?= $row["penerbit"];?></li>
			    <li class="list-group-item">Penulis : <?= $row["penulis"];?></li>
			  </ul>
			  </div>
			  
			</div>
			<?php $i++;?>
		<?php endforeach;?>
		</div>
	</div>
</div>
</div>
</div>
	</body>
</html>
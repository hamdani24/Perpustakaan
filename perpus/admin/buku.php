<?php
require 'functions.php';

$buku = query("SELECT * FROM buku");
?>

<html lang="en">
	<head>
	
		<title>Buku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>	
	<body>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?="?p=buku"; ?>"?>Buku</a>
      </li>
      <li>
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
  </div>
</nav>
		<div class="container">
			<div class="card">
		<div class="card-header">
		<center><h4>Data Buku</h4></center>
	</div>
		<div class="card-body">
		<div class="form-group">
		<a href="bukuadd.php" class="btn btn-primary">Tambah Buku</a></div>
		<div class="table-responsive">
		<table class="table">
			<thead class="thead-dark table-bordered">
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Kode Buku</th>
				<th scope="col">Judul Buku</th>
				<th scope="col">Penerbit</th>
				<th scope="col">Penulis</th>
				<th scope="col">Aksi</th>
			</tr>
			</thead>
			<?php  $i = 1;?>
			<?php foreach ($buku as $row):?>
			<tbody>
			<tr>
				<td><?=	 $i; ?></td>
				<td><?= $row ["kode_buku"];?></td>
				<td><?= $row ["judul_buku"];?></td>
				<td><?= $row["penerbit"];?></td>
				<td><?= $row["penulis"];?></td>
				<td>
					<a href="bukuedit.php?id_buku=<?= $row ["id_buku"]; ?>"><i class="material-icons">edit</i></a>
					
					<a href="bukudel.php?id_buku=<?= $row ["id_buku"]; ?>" onclick ="return confirm('Apakah Ingin Menghapus?');"><i class="material-icons" style="color: red;">delete</a></i>
				</td>
			</tr>
			</tbody>
			<?php $i++;?>
		<?php endforeach;?>
		</table>
</div>
</div>
</div>
</div>
	</body>
</html>
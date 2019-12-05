<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';
if (isset($_POST["submit"])) {
	
	if(tambah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'index.php';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Ditambahkan')
				document.location.href = 'index.php';
		</script>";
	}

}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
	</head>
	<body>

			<div class="card card-primary">
			<div class="card-header">
			<h3 class="card-tittle">Tambah Data Buku</h3>
		</div>
		
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
				<label  for="kode_buku">Kode Buku :</label>
				<input class="form-control" type="text" name="kode_buku" id="kode_buku">
				</div>
			<div class="form-group">
				<label for="judul_buku">Judul Buku :</label>
				<input class="form-control" type="text" name="judul_buku" id="judul_buku">
			</div>
			<div class="form-group">
				<label for="penerbit">Penerbit :</label>
				<input class="form-control" type="text" name="penerbit" id="penerbit">
			</div>
			<div class="form-group">
				<label for="penulis">Penulis :</label>
				<input class="form-control" type="text" name="penulis" id="penulis">
			</div>
			<button name="submit" type="submit" class="btn btn-primary">Tambah Data Buku</button>
		</div>
	</form>
	</div>
</div>
</div>
	</div>
	</body>
</html>
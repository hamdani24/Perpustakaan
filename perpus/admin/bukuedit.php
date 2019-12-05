<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';
	
	$id_buku = $_GET["id_buku"];

	$buku = query("SELECT * FROM buku WHERE id_buku = $id_buku")[0];
if (isset($_POST["submit"])) {
	
	if(ubah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Diubah');
				document.location.href = 'index.php?p=buku';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Diubah')
				document.location.href = 'index.php?p=buku';
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
			<h3 class="card-tittle">Edit Data Buku</h3>
		</div>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">

				<input type="hidden" name="id_buku" value="<?= $buku["id_buku"]; ?>">
				<div class="form-group">
				<label for="kode_buku">Kode Buku :</label>
				<input type="text" name="kode_buku" id="kode_buku" value="<?= $buku["kode_buku"]; ?>">
			</div>
			<div class="form-group">
				<label for="judul_buku">Judul Buku :</label>
				<input type="text" name="judul_buku" id="judul_buku" value="<?= $buku["judul_buku"]; ?>">
			</div>
			<div class="form-group">
				<label for="penerbit">Penerbit :</label>
				<input type="text" name="penerbit" id="penerbit" value="<?= $buku["penerbit"]; ?>">
			</div>
				<div class="form-group">
				<label for="penulis">Penulis :</label>
				<input type="text" name="penulis" id="penulis" value="<?= $buku["penulis"]; ?>">
			</div>
			<button name="submit" type="submit" class="btn btn-primary">Edit Data Buku</button>
		</div>
	</form>
</div>
	</body>
</html>
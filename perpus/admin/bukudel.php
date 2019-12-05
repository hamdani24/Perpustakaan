<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';

$id_buku = $_GET["id_buku"];

if(hapus($id_buku) > 0 ){
	echo "<script>
				alert('Data Berhasil Dihapus');
				document.location.href = 'index.php?p=buku';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Dihapus')
				document.location.href = 'index.php?p=buku';
		</script>";
	}

	
?>
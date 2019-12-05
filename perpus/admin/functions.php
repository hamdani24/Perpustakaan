<?php

$conn = mysqli_connect("localhost","root","","db_perpus");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	} 
	return $rows;
}

function tambah($data){
	global $conn;
	$kode_buku = htmlspecialchars( $data["kode_buku"]);
	$judul_buku = htmlspecialchars( $data["judul_buku"]);
	$penerbit = htmlspecialchars( $data["penerbit"]);
	$penulis = htmlspecialchars( $data["penulis"]);

		$query = "INSERT INTO buku VALUES ('','$kode_buku','$judul_buku','$penerbit','$penulis' )";

	mysqli_query($conn,$query) ;

	return mysqli_affected_rows($conn);

}

function hapus($id_buku){
	global $conn;
	mysqli_query($conn,"DELETE  FROM buku WHERE id_buku='$id_buku'");
	return mysqli_affected_rows($conn);
}
	function ubah($data){
		global $conn;

		$id_buku = $data["id_buku"];
		$kode_buku = htmlspecialchars($data["kode_buku"]);
		$judul_buku = htmlspecialchars($data["judul_buku"]);
		$penerbit = htmlspecialchars($data["penerbit"]);
		$penulis = htmlspecialchars($data["penulis"]);


				$query = "UPDATE buku SET kode_buku = '$kode_buku', judul_buku = '$judul_buku', penerbit = '$penerbit', penulis = '$penulis' WHERE id_buku = $id_buku ";


		mysqli_query($conn, $query);

	    return mysqli_affected_rows($conn);
}
	function cari($keyword){
		$query = "SELECT * FROM buku WHERE
		kode_buku LIKE '%$keyword%' OR 
		judul_buku LIKE '%$keyword%' OR
		penerbit LIKE '%$keyword%' OR 
		penulis LIKE '%$keyword%'";

		return query($query);
	}
?>
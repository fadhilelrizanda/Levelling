<?php


$server = "localhost";
$user = "root";
$password = "";
$nama_database = "rsdb";

$dabes = mysqli_connect($server, $user, $password, $nama_database);

if (!$dabes) {
	die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


if (isset($_GET['id'])) {

	// ambil id dari query string
	$id = $_GET['id'];

	// buat query hapus
	$sql = "DELETE FROM pasien WHERE id=$id";
	$query = mysqli_query($dabes, $sql);

	// apakah query hapus berhasil?
	if ($query) {
		return redirect()->to('/list')->send();
	} else {
		die("gagal menghapus...");
	}
} else {
	die("akses dilarang...");
}

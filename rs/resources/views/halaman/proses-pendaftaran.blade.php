
<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "rsdb";

$dabes = mysqli_connect($server, $user, $password, $nama_database);

if (!$dabes) {
	die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
<?php
// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kelamin = $_POST['kelamin'];
	$umur = $_POST['umur'];
	$golongan = $_POST['golongan'];
	$riwayat = $_POST['riwayat'];
	$keluhan = $_POST['keluhan'];

	// buat query
	$sql = "INSERT INTO pasien (nama, alamat, tempat_lahir, tanggal_lahir, kelamin, umur, golongan, riwayat, keluhan) VALUE ('$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$kelamin', '$umur', '$golongan', '$riwayat', '$keluhan')";
	$query = mysqli_query($dabes, $sql);

	// apakah query simpan berhasil?
	if ($query) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		$message = "berhasil";
		echo ($message);
		return redirect()->to('/list')->send($message);
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		$message = "gagal";
		echo ($message);
		return redirect()->to('/list')->send($message);
	}
} else {
	die("Akses dilarang...");
}

?>

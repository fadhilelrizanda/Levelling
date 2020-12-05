<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "rsdb";

$dabes = mysqli_connect($server, $user, $password, $nama_database);

if (!$dabes) {
	die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['daftar'])) {

	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kelamin = $_POST['kelamin'];
	$umur = $_POST['umur'];
	$golongan = $_POST['golongan'];
	$riwayat = $_POST['riwayat'];
	$keluhan = $_POST['keluhan'];

	// buat query update
	$sql = "UPDATE pasien SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kelamin='$kelamin', umur='$umur', golongan='$golongan', riwayat='$riwayat', keluhan='$keluhan' WHERE id=$id";
	$query = mysqli_query($db, $sql);

	// apakah query update berhasil?
	if ($query) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		return redirect()->to('/list')->send($message);
	} else {
		// kalau gagal tampilkan pesan
		return redirect()->to('/list')->send($message);
	}
} else {
	die("Akses dilarang...");
}

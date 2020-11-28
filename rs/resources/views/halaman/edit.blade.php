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


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Form Pendaftaran</title>
</head>

<body>
	<a href="/test" style="color: black;"><button type="button" class="btn btn-primary">Kembali</button></a>
	<div class="container">
		<h1 class="alert alert-success text-left mt-5">Daftar Nama Pasien Rumah Sakit Neotelemetri</h1>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Umur</th>
					<th>Golongan Darah</th>
					<th>Riwayat Penyakit</th>
					<th>Keluhan</th>
					<th>Tindakan</th>
				</tr>
			</thead>
			<?php
			$sql = "SELECT * FROM pasien";
			$query = mysqli_query($dabes, $sql);

			while ($pasien = mysqli_fetch_array($query)) {
				echo "<tr>";

				echo "<td>" . $pasien['id'] . "</td>";
				echo "<td>" . $pasien['nama'] . "</td>";
				echo "<td>" . $pasien['alamat'] . "</td>";
				echo "<td>" . $pasien['tempat_lahir'] . "</td>";
				echo "<td>" . $pasien['tanggal_lahir'] . "</td>";
				echo "<td>" . $pasien['kelamin'] . "</td>";
				echo "<td>" . $pasien['umur'] . "</td>";
				echo "<td>" . $pasien['golongan'] . "</td>";
				echo "<td>" . $pasien['riwayat'] . "</td>";
				echo "<td>" . $pasien['keluhan'] . "</td>";
				echo "<td style='min-width:200px'>";
				echo "<a href='/edithalaman?id=" . $pasien['id'] . "'><button type='button' class='btn btn-primary'>Edit</button></a> | ";
				echo "<a href='/hapus?id=" . $pasien['id'] . "'><button type='button' class='btn btn-danger'>Hapus</button></a>  ";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</table>

	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
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
		<h1 class="alert alert-primary text-left mt-3">Masukkan Data Pasien</h1>

		<form action="prosesp" method="POST" class="mt-5 mb-5">
			@csrf
			<div class="form-group">
				<label for="a">Nama</label>
				<input type="alphabet" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" id="a" required>
			</div>
			<div class="form-group">
				<label for="b">Alamat</label>
				<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda" id="b" required>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="c">Tempat Lahir</label>
						<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat lahir Anda" id="c" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="d">Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" class="form-control" id="d" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<div class="form-check">
					<input type="radio" class="form-check-input" name="kelamin" value="laki-laki">
					<label>Laki-laki</label>
				</div>
				<div class="form-check">
					<input type="radio" class="form-check-input" name="kelamin" value="perempuan">
					<label>Perempuan</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="e">Umur</label>
						<input type="number" name="umur" class="form-control" placeholder="Masukkan Umur Anda" id="e" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Golongan Darah</label>
						<select name="golongan" id="" class="form-control" required>
							<option></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
					</div>

				</div>
			</div>
			<div class="form-group">
				<label for="f">Riwayat Penyakit</label>
				<textarea type="text" name="riwayat" class="form-control" rows="5" placeholder="Masukkan Riwayat Penyakit Anda" id="f" required></textarea>
			</div>
			<div class="form-group">
				<label for="g">Keluhan</label>
				<textarea type="text" name="keluhan" class="form-control" rows="5" placeholder="Masukkan Keluhan Anda" id="g" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-block" name="daftar">Submit</button>

		</form>
	</div>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>






<!-- <!DOCTYPE html>
<html>

<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>

	<form action="prosesp" method="POST">
		@csrf
		<fieldset>

			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="nama lengkap" />
			</p>
			<p>
				<label for="alamat">Alamat: </label>
				<textarea name="alamat"></textarea>
			</p>
			<p>
				<label for="jenis_kelamin">Jenis Kelamin: </label>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
				<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
			</p>
			<p>
				<label for="agama">Agama: </label>
				<select name="agama">
					<option>Islam</option>
					<option>Kristen</option>
					<option>Hindu</option>
					<option>Budha</option>
					<option>Atheis</option>
				</select>
			</p>
			<p>
				<label for="sekolah_asal">Sekolah Asal: </label>
				<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
			</p>
			<p>
				<input type="submit" value="Daftar" name="daftar" />
			</p>

		</fieldset>

	</form>

</body>

</html> -->
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

<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "rsdb";


$id = $_GET['id'];

$dabes = mysqli_connect($server, $user, $password, $nama_database);

if (!$dabes) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


$sql = "SELECT * FROM pasien WHERE id=$id";
$query = mysqli_query($dabes, $sql);
$pasien = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<body>
    <a href="/page" style="color: black;"><button type="button" class="btn btn-primary">Kembali</button></a>
    <div class="container">
        <h1 class="alert alert-primary text-left mt-3">Masukkan Data Pasien</h1>

        <form action="prosesp" method="POST" class="mt-5 mb-5">
            @csrf
            <div class="form-group">
                <label for="a">Nama</label>
                <input type="alphabet" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" id="a" value="<?php echo $pasien['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="b">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda" id="b" value="<?php echo $pasien['alamat']; ?>" required>
            </div>
            <div class=" row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="c">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat lahir Anda" id="c" required value="<?php echo $pasien['tempat_lahir']; ?>">
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="form-group">
                        <label for="d">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="d" required value="<?php echo $pasien['tanggal_lahir']; ?>">
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
                        <input type="number" name="umur" class="form-control" placeholder="Masukkan Umur Anda" id="e" required value="<?php echo $pasien['umur']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <select name="golongan" id="" class="form-control" required value="<?php echo $pasien['golongan']; ?>">
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
                <!-- <textarea type="text" name="riwayat" class="form-control" rows="5" placeholder="Masukkan Riwayat Penyakit Anda" id="f" required value="<?php echo $pasien['riwayat']; ?>"></textarea> -->
                <input type="text" name="riwayat" class="form-control" placeholder="Masukkan Alamat Anda" id="b" value="<?php echo $pasien['riwayat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="g">Keluhan</label>
                <!-- <textarea type="text" name="keluhan" class="form-control" rows="5" placeholder="Masukkan Keluhan Anda" id="g" required value="<?php echo $pasien['keluhan']; ?>"></textarea> -->
                <input type="text" name="keluhan" class="form-control" placeholder="Masukkan Alamat Anda" id="b" value="<?php echo $pasien['keluhan']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="daftar">Submit</button>

        </form>
    </div>

    <?php

    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pasien WHERE id=$id";
    $query = mysqli_query($dabes, $sql);


    ?>
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
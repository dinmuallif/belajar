<!DOCTYPE html>
<html>

<head>
	<title>sukematif</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>sukematif</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Data
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$nim = $_GET['nim']; //mengambil nim Mahasiswa yang ingin diubah

				//menampilkan data berdasarkan nim
				$data = mysqli_query($koneksi, "select * from sukematif where nim = '$nim'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<!-- ini digunakan untuk menampung nim yang ingin diubah -->
						<input type="hidden" name="nama" required="" value="<?= $row['nama']; ?>">
					</div>
					<div class="form-group">
						<label>email</label>
						<textarea class="form-control" name="email"><?= $row['email']; ?></textarea>
					</div>
					<div class="form-group">
						<label>tahunsekarang</label>
						<input type="text" name="tahunsekarang" class="form-control" value="<?= $row['tahunsekarang']; ?>">
					</div>
					<div class="form-group">
						<label>nama</label>
						<textarea class="form-control" name="nama"><?= $row['nama']; ?></textarea>
					</div>
					<div class="form-group">
						<label>tempattgllahir</label>
						<textarea class="form-control" name="tempattgllahir"><?= $row['tempattgllahir']; ?></textarea>
					</div>
					<div class="form-group">
						<label>alamatdesakelurahan</label>
						<textarea class="form-control" name="alamatdesakelurahan"><?= $row['alamatdesakelurahan']; ?></textarea>
					</div>
					<div class="form-group">
						<label>alamatkecamatankotakabupaten</label>
						<textarea class="form-control" name="alamatkecamatankotakabupaten"><?= $row['alamatkecamatankotakabupaten']; ?></textarea>
					</div>
					<div class="form-group">
						<label>fakultas</label><br>
					    <input type="radio" name="fakultas" value="Fakultas Teknologi dan Sains" required> Fakultas Teknologi dan Sains<br>
	    				<input type="radio" name="fakultas" value="Fakultas Pedagodi dan Psikologi"> Fakultas Pedagodi dan Psikologi<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->
					</div>
					<div class="form-group">
						<label>Program Studi</label><br>
					    <input type="radio" name="programstudi" value="Pend. Bahasa dan Sastra Indonesia" required> Pend. Bahasa dan Sastra Indonesia<br>
	    				<input type="radio" name="programstudi" value="Pend. Bahasa Inggris"> Pend. Bahasa Inggris<br>
				    	<input type="radio" name="programstudi" value="Pend. Matematika"> Pend. Matematika<br>
						<input type="radio" name="programstudi" value="Pend. Ekonomi"> Pend. Ekonomi<br>
						<input type="radio" name="programstudi" value="Pend. Pancasila dan Kewarganegaraan"> Pend. Pancasila dan Kewarganegaraan<br>
						<input type="radio" name="programstudi" value="Ilmu Komputer"> Ilmu Komputer<br>
						<input type="radio" name="programstudi" value="Teknik Industri"> Teknik Industri<br>
						<input type="radio" name="programstudi" value="Teknologi Pangan"> Teknologi Pangan<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->
					</div>
					<div class="form-group">
						<label>nim</label>
						<textarea class="form-control" name="nim"><?= $row['nim']; ?></textarea>
					</div>
					<div class="form-group">
						<label>tahunakademik</label>
						<textarea class="form-control" name="tahunakademik"><?= $row['tahunakademik']; ?></textarea>
					</div>
					<div class="form-group">
						<label>semester</label><br>
					    <input type="radio" name="semester" value="I" required> I (Satu)<br>
	    				<input type="radio" name="semester" value="II"> II (Dua)<br>
				    	<input type="radio" name="semester" value="III"> III (Tiga)<br>
						<input type="radio" name="semester" value="IV"> IV (Empat)<br>
						<input type="radio" name="semester" value="V"> V (Lima)<br>
						<input type="radio" name="semester" value="VI"> VI (Enam)<br>
						<input type="radio" name="semester" value="VII"> VII (Tujuh)<br>
						<input type="radio" name="semester" value="VIII"> VIII (Delapan)<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->
					</div>
					<div class="form-group">
						<label>skma</label>
						<textarea class="form-control" name="skma"></textarea>
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Data</button>
					<a href="surat keterangan mahasiswa aktif.php" class="btn btn-danger">Cancel</a>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$email = $_POST['email'];
					$tahunsekarang = $_POST['tahunsekarang'];
					$nama = $_POST['nama'];
					$tempattgllahir = $_POST['tempattgllahir'];
					$alamatdesakelurahan = $_POST['alamatdesakelurahan'];
					$alamatkecamatankotakabupaten = $_POST['alamatkecamatankotakabupaten'];
					$fakultas = $_POST['fakultas'];
					$programstudi = $_POST['programstudi'];
					$nim = $_POST['nim'];
					$tahunakademik = $_POST['tahunakademik'];
					$semester = $_POST['semester'];
					$skma = $_POST['skma'];

					//query mengubah skripsi
					mysqli_query($koneksi, "update sukematif set email='$email', tahunsekarang='$tahunsekarang', nama='$nama', tempattgllahir='$tempattgllahir', alamatdesakelurahan='$alamatdesakelurahan', alamatkecamatankotakabupaten='$alamatkecamatankotakabupaten', fakultas='$fakultas', programstudi='$programstudi', nim ='$nim', tahunakademik='$tahunakademik', semester='$semester', skma='$skma'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('Berhasil memperbarui data');window.location='surat keterangan mahasiswa aktif.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>UNIWARA</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-12 mt-4">
		<h1>Surat Keterangan Mahasiswa Aktif</h1>
		<div style="position:fixed" class="card">
			<div class="card-header bg-success text-white ">
				Surat Keterangan Mahasiswa Aktif <a href="login.php" class="btn btn-sm btn-danger float-right mr-2">Logout</a>
				<a href="home.html" class="btn btn-sm btn-warning float-right mr-2">Home</a>
				<a href="tambah.php" class="btn btn-sm btn-primary float-right mr-2">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Email</th>
							<th>Tahun Sekarang</th>
							<th>Nama</th>
							<th>Tempattgllahir</th>
							<th>Alamatdesakelurahan</th>
							<th>Alamatkecamatankotakabupaten</th>
							<th>Fakultas</th>
							<th>Programstudi</th>
							<th>Nim</th>
							<th>Tahunakademik</th>
							<th>Semester</th>
							<th>Skma</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); //memanggil file koneksi
							$datas = mysqli_query($koneksi, "select * from sukematif") or die(mysqli_error($koneksi));
							//script untuk menampilkan data surat keterangan mahasiswa aktif

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr style="white-space: nowrap;">
						<td><?= $no; ?></td>						
						<td><?= $row['email']; ?></td>
						<td><?= $row['tahunsekarang']; ?></td>
						<td><?= $row['nama']; ?></td>
						<td><?= $row['tempattgllahir']; ?></td>
						<td><?= $row['alamatdesakelurahan']; ?></td>
						<td><?= $row['alamatkecamatankotakabupaten']; ?></td>
						<td><?= $row['fakultas']; ?></td>
						<td><?= $row['programstudi']; ?></td>
						<td><?= $row['nim']; ?></td>
						<td><?= $row['tahunakademik']; ?></td>
						<td><?= $row['semester']; ?></td>
						<td><?= $row['skma']; ?></td>
						<td>
								<a href="edit.php?nim=<?= $row['nim']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?nim=<?= $row['nim']; ?>" class="btn btn-sm btn-danger" 
								onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
								<a href="view.php?nim=<?= $row['nim'];?>" class="btn btn-sm btn-primary">View</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
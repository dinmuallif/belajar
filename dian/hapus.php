<?php				
			include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
			$id = $_GET['nim']; //menampung nim

			//query hapus
			$datas = mysqli_query($koneksi, "delete from sukematif where nim ='$id'") or die(mysqli_error($koneksi));

			//alert dan redirect ke index.php
			echo "<script>alert('Berhasil menghapus data');window.location='surat keterangan mahasiswa aktif.php';</script>";
	?>
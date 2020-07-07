<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-sm-6">
		<h2><center>TAMBAH DATA PEMOHON REKOM/MUTASI</center></h2>

			<form action="<?php echo site_url('crud/tambah_aksi')?>" method="post">
			<div class="form-group">
				<input type="th_ajaran" class="form-control" id="th_ajaran" placeholder="Masukkan Tahun Ajaran" name="th_ajaran">
			</div>
			<div class="form-group">
				<input type="nama" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
			</div>
			<div class="form-group">
				<input type="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn">
			</div>
			<div class="form-group">
				<input type="asal" class="form-control" id="asal" placeholder="Masukkan Asal Sekolah" name="asal">
			</div>
			<div class="form-group">
				<input type="nama_ortu" class="form-control" id="nama_ortu" placeholder="Masukkan Nama Ortu" name="nama_ortu">
			</div>
			<div class="form-group">
				<input type="no_ortu" class="form-control" id="no_ortu" placeholder="Masukkan Nomor Telepon Ortu" name="no_ortu">
			</div>
			<div class="form-group">
				<input type="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
			</div>
			<div class="form-group">
				<input type="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan KK" name="keterangan">
			</div>
			<div class="form-group">
				<input type="tujuan" class="form-control" id="tujuan" placeholder="Masukkan Nama Tujuan Sekolah" name="tujuan">
			</div>
			<div class="form-group">
				<input type="alasan" class="form-control" id="alasan" placeholder="Masukkan Alasan Pindah" name="alasan">
			</div>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>

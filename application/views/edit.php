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
  <center><h2>Edit Data Rekom/Mutasi</h2></center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<div class="form-group">
				<label for="th_ajaran">Tahun Ajaran :</label>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" class="form-control" id="th_ajaran" placeholder="Masukkan Tahun Ajaran" name="th_ajaran" value="<?php echo $u->th_ajaran ?>">
			</div>
			<div class="form-group">
				<label for="nama">Nama :</label>
					<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $u->nama ?>">
			</div>
			<div class="form-group">
				<label for="nisn">NISN :</label>
					<input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn" value="<?php echo $u->nisn ?>">
			</div>
			<div class="form-group">
				<label for="asal">Asal Sekolah :</label>
					<input type="text" class="form-control" id="asal" placeholder="Masukkan Asal Sekolah" name="asal" value="<?php echo $u->asal ?>">
			</div>
			<div class="form-group">
				<label for="nama_ortu">Nama Orang Tua :</label>
					<input type="text" class="form-control" id="nama_ortu" placeholder="Masukkan Nama Ortu" name="nama_ortu" value="<?php echo $u->nama_ortu ?>">
			</div>
			<div class="form-group">
				<label for="no_ortu">Nomor Telepon Ortu :</label>
					<input type="text" class="form-control" id="no_ortu" placeholder="Masukkan Nomor Telepon Ortu" name="no_ortu" value="<?php echo $u->no_ortu ?>">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat :</label>
					<input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="<?php echo $u->alamat ?>">
			</div>
			<div class="form-group">
				<label for="keterangan">Keterangan KK :</label>
					<input type="text" class="form-control" id="keterangan" placeholder="Masukan Keterangan KK" name="keterangan" value="<?php echo $u->keterangan ?>">
			</div>
			<div class="form-group">
				<label for="tujuan">Nama Sekolah Tujuan :</label>
					<input type="text" class="form-control" id="tujuan" placeholder="Masukkan Nama Sekolah Tujuan" name="tujuan" value="<?php echo $u->tujuan ?>">
			</div>
			<div class="form-group">
				<label for="alasan">Alasan Pindah :</label>
					<input type="text" class="form-control" id="alasan" placeholder="Masukkan Alasan Pindah" name="alasan" value="<?php echo $u->alasan ?>">
			</div>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>
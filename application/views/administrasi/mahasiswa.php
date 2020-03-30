<!DOCTYPE html>
<html>
	<head>
		<title>Mahasiswa</title>
	</head>

	<body>
		<h2>Menu Tambah</h2>
		<p><strong>Tambah Data</strong></p>

		<form action="create" method="post">
			<?php echo $model->labels['nim']; ?><br />
			<input type="text" name="nim" size="10" maxlength="4"//>
			<br/><br/>

			<?php echo $model->labels['nama']; ?><br />
			<input type="text" name="nama" size="30" maxlength="25" />
			<br/><br/>
			
			<?php echo $model->labels['pengajuan']; ?><br />
			<input type="text" name="pengajuan" size="20"/>
			<br/><br/>
			
			<?php echo $model->labels['ket']; ?><br />
			<input type="text" name="ket" size="50" />
			<br/><br/>

			<input type="submit" name="Submitbtn" value="Simpan"/>
			<input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
		</form>
	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir Online Pendaftaran</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="php_form.css">
</head>
<body>

<form action="iniya.php" method="post" enctype="multipart/form-data">
	<div class="background">
	<div class="backdrop">
    <div class="judul">
  		<img src="logo1.png" align="center" width="100" height="100">
		<h1>FORMULIR PENDAFTARAN PERUSAHAAN TELKOMSEL</h1><hr><br></div>

		<div class="container">
		<p class="sansserif">
		<div class="row">
			<label>Nama Lengkap : </label><br>
			<input type="text" name="namaL" value="<?=isset($_POST['namaL']) ? $_POST['namaL'] : ' '?>"/br>
		</div>	
		<div class="row">
			<label><br>Nama Panggilan : </label><br>
			<input type="text" name="namaP" value="<?=isset($_POST['namaP']) ? $_POST['namaP'] : ' '?>"/><br>
		</div>
		<div class="row">
			<label><br>Tempat, Tanggal Lahir : </label><br>
			<input type="text" name="ttl" value="<?=isset($_POST['ttl']) ? $_POST['ttl'] : ' '?>"/>
		</div>
		<div class="row">
			<label><br>Jenis Kelamin:</label><br>
			<input type="radio" name="gender" value="Laki-laki">Laki-Laki<br>
			<input type="radio" name="gender" value="Perempuan">Perempuan<br>
		</div>
		<div class="row">
			<label><br>Alamat : </label><br>
			<textarea rows="7" cols="50" name="alamat"></textarea><br><br>
		</div>
		<div class="row">
			<label>Email : </label><br>
			<input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ' '?>"/><br>
		</div>
		<div class="row">
			<label><br>Agama : </label><br>
			<select name="agama">
				<?php $option = array('Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Kong Hu Cu');
				foreach ($option as $agama) {
					$selected = @$_POST['agama'] == $agama ? 'selected="selected"' : '';
					echo '<option value="' . $agama . '"' . $selected . '>' . $agama . '</option>';
				}?>
			</select>
		</div>
		<div class="row">
			<label><br>Pengalaman Organisasi : </label><br>
			<textarea rows="7" cols="50" name="po"></textarea><br><br>
		</div>
		<div class="row">
			<label>Riwayat Pendidikan: </label><br>
			<input type="checkbox" name="c1" value="TK">TK<br>
			<input type="checkbox" name="c2" value="SD">SD<br>
			<input type="checkbox" name="c3" value="SMP">SMP<br>
			<input type="checkbox" name="c4" value="SMA">SMA<br>
			<input type="checkbox" name="c5" value="Diploma">Diploma<br>
			<input type="checkbox" name="c6" value="Sarjana">Sarjana<br>
			<input type="checkbox" name="c7" value="Pascasarjana">Pascasarjana<br><br>
		</div>
		<div class="row">
			<label><br>Visi anda : </label><br>
			<textarea rows="7" cols="50" name="visi"></textarea><br><br>
		</div>
		<div class="row">
			<label><br>Misi anda : </label><br>
			<textarea rows="7" cols="50" name="misi"></textarea><br><br>
		</div>
		<div class="row">
			<label><br>Motivasi anda : </label><br>
			<textarea rows="7" cols="50" name="motivasi"></textarea><br><br>
		</div>
		<div class="row">
			<label for="foto"><b>Pas Foto</b></label>
      		<input type="file" name="upload"><br><br>

		</div>
		<div class="row">
			<input type="submit" name="submit" value="Kirim">
		</div>
		</p>
		</div>
	</div>
	</div>
</form>

</body>
</html>
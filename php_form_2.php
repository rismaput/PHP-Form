<!DOCTYPE html>
<html>
<head>
	<title>Hasil Kirim Biodata</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="php_form.css">
</head>
<body>

<div class="background">
<div class="background">
<div class="backdrop">
<div class="judul">
  		<img src="logo1.png" align="center" width="100" height="100">
		<h1>SELAMAT ANDA TELAH BERHASIL MENGUPLOAD DATA</h1><hr><br></div>

<?php
if (isset($_POST['submit'])) {
	echo '<h3>Biodata Anda:</h3>';
	echo '<ul>';
	echo '<li>Nama Lengkap :<br>' . $_POST['namaL'] .'</li><br>';
	echo '<li>Nama Panggilan :<br>' . $_POST['namaP'] . '</li><br>';
	echo '<li>Tempat, Tanggal lahir :<br>' . $_POST['ttl'] . '</li><br>';
	echo '<li>Jenis Kelamain :<br>' . $_POST['gender'] . '</li><br>';
	echo '<li>Alamat :<br>' . nl2br($_POST['alamat']). '</li><br>';
	echo '<li>Email :<br>' . $_POST['email'] . '</li><br>';
	echo '<li>Agama :<br>' . $_POST['agama'] . '</li><br>';
	echo '<li>Pengalaman Organisasi :<br>' . nl2br($_POST['po']) . '</li><br>';
	echo '<li>Riwayat Pendidikan :<br>';
		if (isset($_POST['c1'])){
			echo $_POST['c1'] . "</br>";
		}
		if (isset($_POST['c2'])){
			echo $_POST['c2'] . "</br>";
		}
		if (isset($_POST['c3'])){
			echo $_POST['c3'] . "</br>";
		}
		if (isset($_POST['c4'])){
			echo $_POST['c4'] . "</br>";
		}
		if (isset($_POST['c5'])){
			echo $_POST['c5'] . "</br>";
		}
		if (isset($_POST['c6'])){
			echo $_POST['c6'] . "</br></br>";
		}
		if (isset($_POST['c7'])){
			echo $_POST['c7'] . "</br></br>";
		}
	echo '<li>Visi anda :<br>' . nl2br($_POST['visi']). '</li><br>';
	echo '<li>Misi anda :<br>' . nl2br($_POST['misi']). '</li><br>';
	echo '<li>Motivasi anda :<br>' . nl2br($_POST['motivasi']). '</li><br>';
	echo '<li>Pas Foto Anda :<br>';
	$temp = $_FILES['upload']['tmp_name'];
	$foto = $_FILES['upload']['name'];
	rename($temp, $foto);

}
?>

<div>
        
         <img class="pas-foto" height="200" weight="100" src="<?php echo $foto; ?>" alt="Pas Foto" />
    </div>
</div>
</div>
</div>
</body>
</html>
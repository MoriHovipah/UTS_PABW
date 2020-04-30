<?php
include ("db.php");

$query = "SELECT * FROM lapor WHERE id='$_GET[id]'";
$data = $pdo->prepare($query);
$data-> execute();

$lapor = $data->fetch(PDO:: FETCH_LAZY);
?>

<h2>from ubah</h3>
<form method="post" action="update2.php">
<input type="hidden" name="id" value="<?php echo $lapor-> id?>"/>
    Nama Lengkap : <input type="text" name="nama_lengkap" value="<?php echo $lapor->nama_lengkap?>"/> <br>
    Jenis Kelamin : <textarea name ="jenis_kelamin"><?php echo $lapor->jenis_kelamin?></textarea> <br>
    Email : <textarea name ="email" ><?php echo $lapor->email?></textarea> <br>
    Alamat : <textarea name = "alamat" ><?php echo $lapor->alamat?></textarea> <br>
    Keluhan : <textarea name ="keluhan" ><?php echo $lapor->keluhan?></textarea> <br>
    Saran : <textarea name ="saran" ><?php echo $lapor->saran?></textarea><br>
    <button type ="submit">Simpan</button> 
</form>
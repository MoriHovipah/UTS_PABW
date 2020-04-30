<?php
include "database.php";

$query = "UPDATE lapor SET  
    nama_lengkap = '$_POST[nama_lengkap]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    email = '$_POST[email]',
    alamat = '$_POST[alamat]',
    keluhan = '$_POST[keluhan]',
    saran ='$_POST[saran]'
WHERE id='$_POST[id]'";

$data = $db-> prepare($query);
$data->execute();

header("location: form.php");
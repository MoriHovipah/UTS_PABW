<?php

 include ("db.php");

 $query = "INSERT INTO lapor VALUES(
     '',
     '$_POST[nama_lengkap]',
     '$_POST[jenis_kelamin]',
     '$_POST[email]',
     '$_POST[alamat]',
     '$_POST[keluhan]',
     '$_POST[saran]')";
 $data = $pdo->prepare($query);
 $data-> execute();

 header("location: form.php"); 
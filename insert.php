<?php

 include "database.php";

 $query = "INSERT INTO lapor VALUES(
     '',
     '$_POST[nama_lengkap]',
     '$_POST[jenis_kelamin]',
     '$_POST[email]',
     '$_POST[alamat]',
     '$_POST[keluhan]',
     '$_POST[saran]')";
 $data = $db->prepare($query);
 $data-> execute();

 header("location: form.php"); 
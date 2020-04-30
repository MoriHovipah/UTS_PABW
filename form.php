<!doctype html>
<html lang="en">
  <head>
	  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <body style="background-color:powderblue;"></body>

    <title>Mori Hovipah</title>
  </head>
  <body>
      <div class="containerr">
      <h1> Laporan Keluhan Penduduk </h1><br><br>
<?php
include "database.php";
?>

<form method="post" action="insert.php">
    <pre>
    Nama Lengkap    : <input type="text"  name="nama_lengkap"/> <br>
    Jenis Kelamin   : <textarea name ="jenis_kelamin"></textarea> <br>
    Email           : <textarea name ="email"></textarea> <br>
    Alamat          : <textarea name = "alamat"></textarea> <br>
    Keluhan         : <textarea name ="keluhan"></textarea> <br>
    Saran           : <textarea name ="saran"></textarea><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success" >Simpan</button> 
</form>
</pre>
</hr>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Keluhan</th>
            <th>Saran</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM lapor";
    $data = $db-> prepare($query);
    $data->execute();

    $no = 1;
    while($lapor = $data-> fetch(PDO ::FETCH_LAZY)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $lapor['nama_lengkap'] ?></td>
            <td><?php echo $lapor['jenis_kelamin'] ?></td>
            <td><?php echo $lapor['email'] ?></td>
            <td><?php echo $lapor['alamat'] ?></td>
            <td><?php echo $lapor['keluhan'] ?></td>
            <td><?php echo $lapor['saran'] ?></td>
            <td><a href ="delete.php?id=<?php echo $lapor->id ?>">DELETE</a></td>
            <td><a href ="update1.php?id=<?php echo $lapor->id ?>">UPDATE</a></td>
        </tr>
        <?php
        $no++;
    }
    ?>
    </tbody>
    <table>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
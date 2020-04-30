<?php include("db.php");?>

<?php
if(isset($_POST["login"])) 
{
   $username= $_POST['username'];
   $password = $_POST['password'];
   if(empty($_POST["username"]) || empty($_POST["password"]))
   {
      $message = 'semua data harus terisi';

   } else {
      $query = "SELECT * FROM login WHERE username = '$username'";
      $stmt = $pdo->prepare($query);
      $stmt->execute(
         array(
            'username' => $_POST["username"],
            'password' => $_POST["password"]
         )
         );

         $count = $stmt->rowCount();
         if($count > 0)
         {
            $_SESSION["username"] = $_POST["username"];
            header("location:form.php");
         }
         else {
            $message = 'Data yang anda masukkan salah';
         }
        
   }
}


if(isset($_POST['daftar'])){
   header("location:register.php");
 }

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">

    <title>halaman login</title>
  </head>
  <body>
     <br />
     <?php 
     if(isset($message)){
        echo '<label class="text-danger">data yang anda masukkan salah/tidak lengkap</label>';
     }
     ?>
    <div class="container">
    <h4 class="text-center"> Form login</h4>
    <hr>
    <form action="" method="post" align="center">
    <pre>
    Username   <input type="text" name="username"> <br>
    Password   <input type="password" name="password"> <br>
    Email      <input type="email" name="email"> <br>
    <button type="submit" class="btn btn-success" name="login">Login</button><br>
    <a href="register.php">Registrasi</a>
    </form>
    </pre>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
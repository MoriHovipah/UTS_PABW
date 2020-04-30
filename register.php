<?php include("db.php");?>
<?php
$msg="";

if(isset($_POST['daftar'])){
  
   $username= $_POST['username'];
   $email = $_POST['email'];
   $password = password_hash($password, PASSWORD_DEFAULT);
   $cpassword = $_POST['cpassword'];

   if($username != "" && $email != "" && $password !="" && $cpassword != ""){
      $sql = "INSERT INTO user(username, email, password) VALUES('$username','$email','$password')";
     
       $stmt = $pdo->prepare($sql);
       if($stmt ->execute()){
             header("location:login.php");
       } else {
             echo "Maaf, gagal menambahkan data";
       }
    } else {
          $error  = "Mohon isi semua data!";
    }
 
 }

 if(isset($_POST['sudah'])){
   header("location:login.php");
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

           
         <?php if  ($msg != "") echo $msg. "<br><br><br>";
            
            ?>
            <div class="container">
    <h4 class="text-center"> Form Register</h4>
    <hr>
    <form action="" method="post" align="center">
    <pre>
    Username            <input type="text" name="username"> <br>
    Email               <input type="email" name="email"> <br>
    Password            <input type="password" name="password"> <br>
    Konfirmasi Password <input type="password" name="cpassword"> <br>
   <button type="submit" class="btn btn-success" name="daftar">Daftar</button><br>
   <button type="submit" class="btn btn-success" name="sudah">Login</button><br>
    </form>
    </pre>
      
   </body>
</html>
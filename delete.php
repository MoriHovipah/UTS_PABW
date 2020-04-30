 <?php
include "db.php";

$query = "DELETE FROM lapor WHERE id='$_GET[id]'";
$data = $pdo-> prepare($query);
$data->execute();

header("location: form.php");
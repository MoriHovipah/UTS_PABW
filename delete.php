 <?php
include "database.php";

$query = "DELETE FROM lapor WHERE id='$_GET[id]'";
$data = $db-> prepare($query);
$data->execute();

header("location: form.php");
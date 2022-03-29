<?php 

include_once('connection/connection.php');
$con = connection();

$id = $_GET['id'];

$sql = "DELETE FROM STUDENT WHERE Student_id = '$id'";
$con->query($sql) or die ($con->error);
echo header("Location: index.php");
?>
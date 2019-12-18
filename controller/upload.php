<?php
include '..\model\dao.php';

$d = new dao;
$user_email = $_COOKIE['email'];


$sql="SELECT * FROM myguests WHERE email = '$user_email'";
$result = $d->query($sql);
$row = $result->fetch_array();
$id = $row['id'];
$name = $row['lastname'];
$writing = $_POST['post'];
$date = date("Y-m-d h:i:sa");

$sel =  $d->writepost("articles",$writing,$id,$date);
echo $id, "<br>", $name;
header("location: ../index.php");
?>


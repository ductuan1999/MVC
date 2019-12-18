<?php

include 'C:\xampp\htdocs\MVC\model\dao.php';
$d = new dao;

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pass'];

$hash = password_hash($password,PASSWORD_BCRYPT, array('cost'=>12));

echo "'$first_name','$last_name','$email','$hash'";
$sel = $d->insert_into($first_name,$last_name,$email,$hash);
echo "You have successfully registered!";

?>
<br><br><button onclick="location.href='../index.php'" type="button">Back to Login</button>

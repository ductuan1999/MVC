<?php
session_start();
session_destroy();
if(isset($_COOKIE['email'])&&isset($_COOKIE['pass'])){
    setcookie('email',$_POST['email'], time()-1);
    setcookie('pass',$_POST['pass'], time()-1);
}
echo "You have successfully logged out";
header("location: ../view/login.php")
?>


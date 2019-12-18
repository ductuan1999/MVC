<?php
    function validate(){
        if(isset($_POST['login'])){
            ob_start();
            setcookie("email",$_POST['email'],time()+86400, '/');

            session_start();
            include '../model/dao.php';
            $db = new dao();

            $email = $_POST['email'];
            $password = $_POST['pass'];

            $hash= password_hash($password,PASSWORD_BCRYPT,array('cost'=>12));

            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $hash;

            if(!empty($_POST["remember"])){
                setcookie("rem_email",$_POST['email'],time()+86400, '/');
                setcookie("rem_pass",$_POST['pass'],time()+86400, '/');
                $_SESSION['rem_email'] = $_POST['email'];
                $_SESSION['rem_pass'] = $_POST['pass'];
            }

            $sql = "SELECT * FROM myguests WHERE email = '$email'";
            $result = $db->query($sql);
            $row = $result->fetch_array();

            if(password_verify($password,$row['PASSWORD'])){
                setcookie("email",$_POST['email'],time()+86400, '/');
                setcookie("pass",$_POST['pass'],time()+86400, '/');
                print_r($_COOKIE);
//                echo "Login success!";
                header("location: ../index.php");

            }
            else {
                echo "Your password is invalid! Please try again <br><a href='../view/login.php'>Try Again</a>";
            }
        }
        }


validate();
?>



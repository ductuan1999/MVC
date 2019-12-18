<?php
session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
    header("location: ../MVC/view/login.php");
}
?>

<html>
<head>
    <link rel="stylesheet" href="../MVC/assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <title>Home</title>
</head>

<body>
<div class="jumbotron">
    <h1>MVC TEST</h1>
</div>
<div class="container">
    <h3>Home</h3>
    <h4>User info</h4>
    <?php
    echo "Welcome, ".$_SESSION['email'];
    echo "<br><br> My Posts:<Br>";
    include_once '../MVC/model/dao.php';
    $d = new dao;

    $user_email = $_COOKIE['email'];
    $sql="SELECT * FROM myguests WHERE email = '$user_email'";
    $result = $d->query($sql);
    $row = $result->fetch_array();
    $id = $row["id"];

    $sql2 = "SELECT * FROM articles WHERE user_fk = '$id'";
    $result2 = $d->query($sql2);
    $row2 = $result2->fetch_array();
    $user_fk = $row2["user_fk"];




    if ($result2->num_rows > 0) {
        while($row2 = $result2->fetch_assoc()) {
            echo "<br>Post number: " . $row2["post_id"]." <br>Article: <br>".$row2["article"]." <br>Date posted: ".$row2["date_posted"]."<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
    <br>
    <button type="button" name="upload" onclick="location.href='../MVC/view/up_post.php'">Write a Post</button>
    <br>
    <br>
    <button onclick="location.href='../MVC/controller/logout.php'">Log out</button>
    <br><br>
</body>
</html>



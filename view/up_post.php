<?php
session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
    header("location: ../MVC/view/login.php");
}
?>
<html>
<head>
    <link rel="stylesheet" href="../assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css">
    <title>Home</title>
</head>

<body>
<div class="jumbotron">
    <h1>MVC TEST</h1>
</div>
<div class="container">
    <h3>Upload post</h3>
    <form method="post" action="../controller/upload.php">
        <div class="form-group">
            <label>Write a post here:</label>
            <input type="text" class="form-control" id="post" name="post">
        </div>
        <button type="submit" class="btn btn-default" name="login">Submit</button>
        <a href="javascript:history.back()">Back</a>
    </form>
</div>
</body>
</html>
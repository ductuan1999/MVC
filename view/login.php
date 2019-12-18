<html>
<head>
    <link rel="stylesheet" href="../assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="jumbotron">
        <h1>MVC TEST</h1>
    </div>
    <div class="container">
    <h3>Login</h3>
    <form method="post" action="../controller/action.php">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" value="
            <?php
                if(isset($_COOKIE['rem_email'])){
                    echo $_COOKIE['rem_email'];
                }
            ?>">
        </div>
        <div class="form-group">
            <label >Password:</label>
            <input type="password" class="form-control" id="pass" name="pass" autocomplete="new-password" value="<?php
            if(isset($_COOKIE['rem_pass'])){
                echo $_COOKIE['rem_pass'];
            }
            ?>">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default" name="login">Submit</button>
        <button type="button" onclick="location.href='signup.php'">Sign up</button>
    </form>
    </div>
</body>
</html>
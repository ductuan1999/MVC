
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css">
</head>
<body>
<div class="jumbotron">
    <h1>MVC TEST</h1>
</div>
<div class="container">
    <h3>Sign Up</h3>
    <form method="post" action="../controller/register.php">
        <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" id="fname" name="fname">
            <label>Last Name: </label>
            <input type="text" class="form-control" id="lname" name="lname">
            <label>Email: </label>
            <input type="email" class="form-control" id="email" name="email">
            <label>Password: </label>
            <input type="password" class="form-control" id="pass" name="pass" autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-default" name="login">Submit</button>
        <button type="button" onclick="location.href='login.php'" class="btn btn-default" name="login">Back</button>
    </form>
</body>
</div>
</html>
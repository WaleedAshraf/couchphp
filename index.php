<!-- views/login.ejs -->
<!doctype html>
<html>
<head>
    <title>Couchbase|PHP</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"> <!-- load bootstrap css -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:80px; }
    </style>
</head>
<body>
<div class="container">

<div class="col-sm-6 col-sm-offset-3">

    <h1><span class="fa fa-sign-in"></span> Login</h1>
    <!-- LOGIN FORM -->
    <form method="post" action="login.php">
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" class="btn btn-warning btn-lg" >Login</button>
    </form>
</div>

<div class="col-sm-6 col-sm-offset-3">

    <h1><span class="fa fa-sign-in"></span> Signup</h1>

    <!-- LOGIN FORM -->
    <form method="post" action="register.php">
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="confirm" required>
        </div>

        <button type="submit" class="btn btn-warning btn-lg">Signup</button>
    </form>

</div>

</div>
</body>
</html>
<?php
session_start();

if(!isset($_SESSION["email"])){
header("location: index.php");
}

$cb = new Couchbase("127.0.0.1:8091", "", "", "default");
$email = $_SESSION["email"];
$password = $cb -> get($email);

?>
<!doctype html>
<html>
<head>
    <title>Node Authentication</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <style>
        body        { padding-top:80px; word-wrap:break-word; }
    </style>
</head>
<body>
<div class="container">

    <div class="page-header text-center">
        <h1><span class="fa fa-anchor"></span> Profile Page</h1>
        <a href="logout.php?logout">Sign Out</a>
    </div>

    <div class="row">

        <!-- LOCAL INFORMATION -->
        <div class="col-sm-6">
            <div class="well">
                <h3><span class="fa fa-user"></span> Local</h3>

                    <p>
                        <strong>Email</strong>: <?php echo $email; ?><br>
                        <strong>Password</strong>: <?php echo $password; ?>
                    </p>

            </div>
        </div>

    </div>

</div>
</body>
</html>


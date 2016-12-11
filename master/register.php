<?php
include ("master/header.php");
?>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
    header("Location: home.php");
}
require_once("../includes/db_connection.php");

if(isset($_POST['btn-signup'])) {

    $uname = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $upass = strip_tags($_POST['password']);

    $uname = $connection->real_escape_string($uname);
    $email = $connection->real_escape_string($email);
    $upass = $connection->real_escape_string($upass);

    $hashed_password = password_hash($upass, PASSWORD_DEFAULT);

    $check_email = $connection->query("SELECT email FROM tbl_users WHERE email='$email'");
    $count=$check_email->num_rows;

    if ($count==0) {

        $query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";

        if ($connection->query($query)) {
            $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
        }else {
            $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";
        }

    } else {


        $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";

    }

    $connection->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login & Registration System</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="signin-form">

    <div class="container">


        <form class="form-signin" method="post" id="register-form">

            <h2 class="form-signin-heading">Sign Up</h2><hr />

            <?php
            if (isset($msg)) {
                echo $msg;
            }
            ?>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username" required  />
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address" name="email" required  />
                <span id="check-e"></span>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required  />
            </div>

            <hr />

            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-signup">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                </button>
                <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
            </div>

        </form>

    </div>

</div>

</body>
</html>

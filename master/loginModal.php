<?php
include ("header.php");
?>

<?php
session_start();
require_once("../includes/db_connection.php");

if (isset($_SESSION['userSession'])!="") {
    header("Location: home.php");
    exit;
}

if (isset($_POST['btn-login'])) {

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    $email = $connection->real_escape_string($email);
    $password = $connection->real_escape_string($password);

    $query = $connection->query("SELECT user_id, username, email, password, permissions FROM tbl_users WHERE email='$email'");
    $row=$query->fetch_array();

    $count = $query->num_rows; // if email/password are correct returns must be 1 row

    if (password_verify($password, $row['password']) && $count==1) {
        $_SESSION['userSession'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['permissions'] = $row['permissions'];

        header("Location: home.php");
    } else {
        $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
    }
    $connection->close();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa "
            crossorigin="anonymous"></script>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <a class="btn btn-primary" data-toggle="modal" href="#myModal" >Login</a>



        <div class="modal hide" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h3>Login to MyWebsite.com</h3>
            </div>
            <div class="modal-body">
                <form method="post" action='' name="login_form">
                    <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
                    <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
                    <p><button type="submit" class="btn btn-primary">Sign in</button>
                        <a href="#">Forgot Password?</a>
                    </p>
                </form>
            </div>
            <div class="modal-footer">
                New To MyWebsite.com?
                <a href="#" class="btn btn-primary">Register</a>
            </div>
        </div>
    </div>
</div>

<!--<div class="signin-form">

    <div class="container">


        <form class="form-signin" method="post" id="login-form">

            <h2 class="form-signin-heading">Sign In.</h2>
            <hr/>

            <?php
            if (isset($msg)) {
                echo $msg;
            }
            ?>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address" name="email" required/>
                <span id="check-e"></span>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required/>
            </div>

            <hr/>

            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                </button>
                <a href="register.php" class="btn btn-default" style="float:right;">Sign UP Here</a>
            </div>
        </form>
    </div>
</div>>--


</body>
</html>

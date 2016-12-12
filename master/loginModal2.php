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
    $row=$query->fetch_array(); $count = $query->num_rows; // if email/password are correct returns must be 1 row

    if (password_verify($password, $row['password']) && $count==1) {
        $_SESSION['userSession'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['permissions'] = $row['permissions'];

        header("Location: home.php");
    } else {
        $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span>; Invalid Username or Password !
    </div>";
    }
    $connection->close();
}
?>
<html>
<head>
    <title>Log In</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa "
            crossorigin="anonymous"></script>
<body>

<div class="container">

    <h3>Log In Demo</h3>


    <!-- data-toggle lets you display modal without any JavaScript -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">Open Modal</button>

    <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Log In</h3>


                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" method="post">

                        <?php
                        if(isset($msg)){
                            echo $msg;
                        }
                        ?>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required />
                            <span id="check-e"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
                                <span class="glyphicon glyphicon-log-in"></span> ; Sign In
                            </button>

                            <a href="register.php" class="btn btn-default" style="float:right;">Sign UP Here</a>

                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>

</div>

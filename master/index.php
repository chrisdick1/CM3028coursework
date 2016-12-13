<!--some additional css-->
<style>
    /*.col-lg-8{*/
        /*height: 500px;*/
    /*}*/

    .col-md-10 {
        height: 1000px;
    }
    h1{
        color:white
    }
</style>
<?php include ("header.php"); ?>
<?php
if(!empty($_GET['status'])){ ?>
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> You now have been logged off from your session.
    </div>
<?php }?>
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Go Portlethen</h1>
                    <hr class="small">
                    <span class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dapibus augue nec justo dignissim maximus. Etiam eleifend tortor a magna sagittis, nec varius mauris accumsan. Vestibulum
                        vitae felis vitae odio ultrices finibus laoreet in felis. Aliquam ex risus, interdum eget velit ut, luctus interdum justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos

                        himenaeos. Suspendisse dapibus blandit vestibulum. Mauris tempus orci sit amet vulputate lacinia. Duis eget nunc non augue gravida interdum sed et magna. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Sed eget nulla viverra, venenatis orci et, egestas nibh. Ut luctus sapien sagittis dui sodales, ac dictum quam laoreet. Vestibulum ut nunc blandit arcu posuere tinci
                        dunt.


</span>



                    <span class="subheading">Nnc gravida ultrices vestibulum. Curabitur a lorem lectus. Mauris semper orci et dui semper, a feugiat augue iaculis. Integer quis commodo nulla. Nunc finibus elementum ante, vel ultrices libero dapibus scele
                    risque. Nullam venenatis metus ut urna ullamcorper, ac condimentum odio sagittis. Mauris malesuada imperdiet massa, non dignissim risus suscipit vel. Duis feugiat tempus eros, at dictum diam imperdiet id. In
                    a neque eget elit lobortis gravida ac quis metus. Nullam luctus arcu nec urna gravida, eget consequat diam semper. Etiam in leo vitae tortor tempor sollicitudin ut sit amet leo. Cras dignissim sem ut odio ultri
                    cies, quis condimentum diam blandit. Pellentesque diam libero, rhoncus quis eros sed, consectetur variu
</span>
                </div>
            </div>
        </div>
    </div>
</header>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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









</body>
</html>
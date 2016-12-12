<html lang="en">
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


<?php
session_start();
?>
<!--<nav class="navbar navbar-default">
    <!--<div class="container-fluid">

        <ul class="nav nav-justified">
            <div class="col-sm-2 col-md-2">
                <form action="../search.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="searchInput">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>-->

        <nav class="navbar navbar-inverse">
            <div>
            <div class="container-fluid">
                <!-- Logo -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/master/index.php" class="navbar-brand">Go Porthlethan</a>
                </div>
                <div class="collapse navbar-collapse" id="mainNavBar">
                    <?php
                    echo"<ul class='nav navbar-nav'>";
                    echo"<li><a href='/master/clubPage.php'>Clubs</a></li>";
                    echo"<li><a href='/master/Health.php'>Health</a></li>";
                    echo"</ul>";
                    echo"<ul class='nav navbar-nav navbar-right'>";
                    echo "<li><a href='/master/loginModal2.php'>Log in</a></li>";
                    echo"</ul>";



                    if (isset($_SESSION['userSession' ])) {
                        echo"<ul class='nav navbar-nav navbar-right'>";
                        echo "<li><a href='/master/admin.php'>Admin</a></li>";
                        echo "<li><a href='/master/logout.php'>Logout</a></li>";
                        echo "</ul>";
                    }
                    else{
                        echo"<ul class='nav navbar-nav navbar-right'>";
                        echo"<li><a href='/master/register.php'>Register</a></li>";
                        echo "</ul>";
                    }

                    ?>
                </div>
            </div>
            </div>
        </nav>


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
     <style>
         .navbar {
             margin-bottom: 0;
         }
     </style>
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
                    <a href="/master/index.php" class="navbar-brand">Go Porthlethen</a>
                </div>
                <div class="collapse navbar-collapse" id="mainNavBar">
<!--                    //'static buttons to be implemented within every page'-->
                    <?php
                    echo"<ul class='nav navbar-nav'>";
                    echo"<li><a href='/master/home.php'>Home</a></li>";
                    echo"<li><a href='/master/clubPage.php'>Clubs</a></li>";
                    echo"<li><a href='/master/Health.php'>Health</a></li>";
                    echo"</ul>";
                    //if session isn't active yet - initialize a login button
                    echo"<ul class='nav navbar-nav navbar-right'>";
                    if (!isset($_SESSION['userSession' ])) {
                        echo "<li><a href='/master/logIn.php'>Log In</a></li>";
                    }
                    echo"</ul>";

                    //if userSession is ran by a verified contributor add 'Verify' button
                    if (((isset($_SESSION['userSession'])) && ($_SESSION['permissions'] == 3))){
                        echo "<ul class='nav navbar=nav navbar-right'>";
                        echo "<li><a href='/master/verify.php'>Verify</a></li>";
                        echo"</ul>";
                    }




                    //setting if function to check for session, if the userSession is active =  initialize the logout button
                    if  (isset($_SESSION['userSession' ])) {
//
                        echo"<ul class='nav navbar-nav navbar-right'>";
                        echo "<li><a href='/master/logout.php'>Log Out</a></li>";
                        echo"</ul>";
                    }
                    //if you are unregistered (userSession unactive) = initialize login button
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


<?php


// Inialize session
session_start();

// Delete certain session
session_destroy();
unset($_SESSION['userSession']);
unset($_SESSION['username']);
// Delete all session variables
if (!isset($_SESSION['username'])==null)
{
    header('/master/index.php?status=loggedout');
}



// Jump to login page


?>
//session_start();
//
//unset($_SESSION['userSession']);
//unset($_SESSION['username']);
//
//if (!isset($_SESSION['userSession'])) {
//    header("Location: clubPage.php");
//} else if (isset($_SESSION['userSession'])!="") {
//    header("Location: clubPage.php");
//}
//
//if (isset($_GET['logout'])){
//    session_destroy();
//    unset($_SESSION['userSession']);
//    unset($_SESSION['username']);
//
//    header("location: /master/index.php?status=loggedout");
//    header("Location: clubPage.php");
//}
//?>
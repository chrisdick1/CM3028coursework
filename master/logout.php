<?php


// Inialize session
session_start();

// Delete certain session
unset($_SESSION['userSession']);
unset($_SESSION['username']);
// Delete all session variables
session_destroy();

// Jump to login page
header('/master/index.php?status=loggedout');

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
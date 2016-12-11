<?php
session_start();

if (!isset($_SESSION['userSession'])) {
    header("Location: clubPage.php");
} else if (isset($_SESSION['userSession'])!="") {
    header("Location: clubPage.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['userSession']);
    unset($_SESSION['username']);

    header("Location: clubPage.php");
}
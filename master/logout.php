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

<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: /master/index.php?status=loggedout"); // Redirecting To Home Page
}
?>
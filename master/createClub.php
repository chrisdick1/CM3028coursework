<?php
require_once("../includes/db_connection.php"); 

$_POST[""];

//strip_tags used to remove script tags
$name = strip_tags($_POST["name"]);
$description = $_POST["description"];
$clubgenre = $_POST["clubgenre"];
$clubcontact = $_POST["clubcontact"];
$profileLink = $_POST["profileLink"];
$bodyLink = $_POST["bodyLink"];

$stmt = "INSERT INTO Clubs (clubname, clubdescription, clubgenre, clubcontact, profileLink, bodyLink) VALUE ('$name', '$description', '$clubgenre', '$clubcontact', '$profileLink', '$bodyLink')";






if (mysqli_query($connection, $stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($dbconnect);
}

$connection->close();
header("Location: clubPage.php");




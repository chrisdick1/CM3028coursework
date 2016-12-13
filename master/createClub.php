<?php
require_once("../includes/db_connection.php"); 

$_POST[""];

//strip_tags used to remove script tags
$name = strip_tags($_POST["name"]);
$description = $_POST["description"];
$clubcontact = $_POST["clubContact"];
$profileLink = $_POST["profileLink"];
$bodyLink = $_POST["bodyLink"];
$emailAddress = $_POST["emailAddress"];
$phoneNumber = $_POST["phoneNumber"];
$website = $_POST["website"];

$stmt = "INSERT INTO Clubs (clubname, clubdescription, clubgenre, clubcontact, profileLink, bodyLink, clubContact, emailAddress, phoneNumber, website)
 VALUE ('$name', '$description', '$clubgenre', '$clubcontact', '$profileLink', '$bodyLink', '$emailAddress', '$phoneNumber', '$website')";






if (mysqli_query($connection, $stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($dbconnect);
}

$connection->close();
header("Location: clubPage.php");




<?php
require_once("../includes/db_connection.php"); 

$_POST[""];

//strip_tags used to remove script tags
$name = strip_tags($_POST["name"]);
$description = $_POST["description"];
$clubContact = $_POST["clubContact"];
$emailAddress = $_POST["emailAddress"];
$phoneNumber = $_POST["phoneNumber"];
$profileLink = $_POST["profileLink"];
$bodyLink = $_POST["bodyLink"];
$website = $_POST["website"];


$stmt = "INSERT INTO Clubs (clubname, clubdescription, clubContact, emailAddress, phoneNumber, profileLink, bodyLink, website)
 VALUE ('$name', '$description', '$clubContact',  '$emailAddress', '$phoneNumber', '$profileLink', '$bodyLink', '$website')";






if (mysqli_query($connection, $stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($dbconnect);
}

$connection->close();
header("Location: clubPage.php");




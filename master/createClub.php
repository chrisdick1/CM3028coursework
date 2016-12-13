<?php
require_once("../includes/db_connection.php"); 

$_POST[""];

//strip_tags used to remove script tags
$name = strip_tags($_POST["name"]);
$description = $_POST["description"];
$clubContact = $_POST["contact"];
$emailAddress = $_POST ["email"];
$phoneNumber = $_POST["number"];
$profileLink = $_POST["profilePic"];
$bodyLink = $_POST["bodyPic"];
$website = $_POST["website"];
$stmt = "INSERT INTO Clubs (clubName, clubDescription, clubContact, emailAddress, phoneNumber, profileLink, bodyLink, website)
 VALUE ('$name', '$description', '$clubContact',  '$emailAddress', '$phoneNumber', '$profileLink', '$bodyLink', '$website')";


if (mysqli_query($connection, $stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($dbconnect);
}

$connection->close();
header("Location: clubPage.php");


//
//<?php
//require_once("../includes/db_connection.php");
//
////strip_tags used to remove script tags
//$name = strip_tags($_POST["name"]);
//$description = $_POST["description"];
//$date = $_POST["date"];
//
//
//$stmt = "INSERT INTO health (eventName, description, date) VALUE ('$name', '$description', '$date')";
//
//if (mysqli_query($connection, $stmt)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $stmt . "<br>" . mysqli_error($dbconnect);
//}
//
//$connection->close();
//header("Location: Health.php");
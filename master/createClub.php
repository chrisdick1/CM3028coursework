<?php
require_once("../includes/db_connection.php"); 

//$_POST[""];

//strip_tags used to remove script tags
$name = strip_tags($_POST["name"]);
$description = $_POST["description"];
$contact = $_POST["contact"];
$email = $_POST ["email"];
$number = $_POST["number"];
$profilePic = $_POST["profilePic"];
$bodyPic = $_POST["bodyPic"];
$website = $_POST["website"];
$stmt = "INSERT INTO clubs (clubName, clubDescription, clubContact, emailAddress, phoneNumber, profileLink, bodyLink, website) VALUE ('$name', '$description', '$contact',  '$email', '$number', '$profilePic', '$bodyPic', '$website')";


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
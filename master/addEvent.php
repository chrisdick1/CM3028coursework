<?php
require_once("../includes/db_connection.php");

//strip_tags used to remove script tags
$name = strip_tags($_POST["name"]);
$description = $_POST["description"];
$date = $_POST["date"];


$stmt = "INSERT INTO health (eventName, description, date) VALUE ('$name', '$description', '$date')";

if (mysqli_query($connection, $stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($dbconnect);
}

$connection->close();
header("Location: Health.php");

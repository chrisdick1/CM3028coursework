<?php
require_once("../includes/db_connection.php");

$eventID = $_POST["eventID"];

//sql to delete a group
$sql = "DELETE FROM health WHERE eventName = $eventID";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

//header("Location: clubPage.php")  ;
?>
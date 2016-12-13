<?php
require_once("../includes/db_connection.php");

$eventName = $_POST["eventName"];

//sql to delete a group
$sql = "DELETE FROM health WHERE eventName = $eventName";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
echo '$clubid';

//header("Location: clubPage.php")  ;
?>
<?php
require_once("../includes/db_connection.php");

$clubid = $_GET["clubid"];

//sql to delete a group
$sql = "DELETE FROM clubs WHERE clubid = '$clubid'";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


//header("Location: clubPage.php") ;
?>
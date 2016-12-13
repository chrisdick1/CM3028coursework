<?php
require_once("../includes/db_connection.php");

//sql to delete a group
$sql = "DELETE FROM clubs WHERE clubid = $clubid";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbconnect);
}

//header("Location: clubPage.php");
?>
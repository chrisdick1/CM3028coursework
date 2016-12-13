<?php
require_once("../includes/db_connection.php");

$clubID = $_POST["clubid"];

//sql to delete a group
$sql = "DELETE FROM clubs WHERE clubid = '.$clubID.'";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
    echo "$clubID";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}



//header("Location: clubPage.php")  ;
?>"
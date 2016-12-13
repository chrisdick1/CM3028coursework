<?php
require_once("../includes/db_connection.php");

//sql to delete a group
$sql = "DELETE FROM clubs WHERE clubid = $clubid";

if (mysqli_query($connection, $stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($connection);
}
echo '"echo print" . $clubID';
//header("Location: clubPage.php");
?>
<?php
$clubID = $_POST["photoID"];

//sql to delete a group
$sql = "DELETE FROM clubs WHERE clubid = $clubID";

if (mysqli_query($connection, $stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . mysqli_error($dbconnect);
}

header("Location: clubPage.php");
?>
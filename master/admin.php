<?php
require_once("../includes/db_connection.php");
//include dynamic header
include ("header.php");
session_start();
?>

<div class="jumbotron">
    <h3>Admin Page</h3>
    <h3>Non Verified Users: </h3>
<?php

//selecting all users that are waiting to be validated.
$sql = "SELECT user_id, username FROM tbl_users WHERE permissions = 2";
$result = $connection->query($sql);
//displaying all users that are requiring validation
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["username"] . "<br>";

        echo'<form action="verify.php" method="post">
                    <input type="hidden" class="form-control" name="id" value=" '. $row["user_id"] .' ">
                    <button type="submit" class="btn btn-default">Verify</button>
                </form>';


    }
} else {
    echo "No verification requests";
} 
//after last display, close connection
$connection->close();
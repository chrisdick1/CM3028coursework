<?php
require_once("../includes/db_connection.php");
include ("header.php");
session_start();
?>

<div class="jumbotron">
    <h2>Admin Page</h2>
    <h4>Non Verified Users: </h4>
<?php

//selecting all users that are waiting to be validated.
$sql = "SELECT user_id, username FROM tbl_users WHERE permissions = 2";
$result = $connection->query($sql);
//displaying all users that are waiting to be validated
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["username"] . "<br>";

        echo'<form action="verify.php" method="post">
                    <input type="hidden" class="form-control" name="id" value=" '. $row["id"] .' ">
                    <button type="submit" class="btn btn-default">Verify</button>
                </form>';


    }
} else {
    echo "0 results";
}

$connection->close();
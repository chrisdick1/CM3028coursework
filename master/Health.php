<?php
require_once("../includes/db_connection.php");
include ("header.php");
session_start();
?>
<

<head>
    <title>Health</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<!-- Trigger the modal with a button -->
<body>
<div class="row">
    <div class="col-lg-6 col-cen">
        <img src="img/LOGO.png" class="img-responsive">
    </div>
</div>

<?php if ((isset($_SESSION['userSession'])) && ($_SESSION['permissions'] == 3)){?>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit
        Info
    </button>
<?php } ?>

<?php
$sql = "SELECT eventID, eventName, description, date FROM health";

$result = $connection->query($sql);?>


    <!-- Modal -->

    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $eventID = $row ["eventID"];
            $eventName = $row["eventName"];
            $description = $row["description"];
            $date = $row["date"];

            ?> <div class="jumbotron">

                <form action="deleteHealth.php" method="post">
                    <input type="hidden" name="eventID" value='<?php echo $eventID; ?>'>
                    <input type="submit" value="Delete">
                </form>

                <p>Event: <?php echo $eventName ?></p>
                <p><?php echo $description ?></p>
                <p>Date <?php echo $date ?></p>
            </div>


            <?php
        }
    } else {
        echo "0 results";
    }?>





</body>
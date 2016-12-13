<?php
require_once("../includes/db_connection.php");
include ("header.php");
session_start();
?>
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <h1>Go Portlethen</h1>
                <hr class="small">
                <span class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dapibus augue nec justo dignissim maximus. Etiam eleifend tortor a magna sagittis, nec varius mauris accumsan. Vestibulum
                        vitae felis vitae odio ultrices finibus laoreet in felis. Aliquam ex risus, interdum eget velit ut, luctus interdum justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos

                        himenaeos. Suspendisse dapibus blandit vestibulum. Mauris tempus orci sit amet vulputate lacinia. Duis eget nunc non augue gravida interdum sed et magna. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Sed eget nulla viverra, venenatis orci et, egestas nibh. Ut luctus sapien sagittis dui sodales, ac dictum quam laoreet. Vestibulum ut nunc blandit arcu posuere tinci
                        dunt.


</span>
                <br>
                <span class="subheading">Nnc gravida ultrices vestibulum. Curabitur a lorem lectus. Mauris semper orci et dui semper, a feugiat augue iaculis. Integer quis commodo nulla. Nunc finibus elementum ante, vel ultrices libero dapibus scele
                    risque. Nullam venenatis metus ut urna ullamcorper, ac condimentum odio sagittis. Mauris malesuada imperdiet massa, non dignissim risus suscipit vel. Duis feugiat tempus eros, at dictum diam imperdiet id. In
                    a neque eget elit lobortis gravida ac quis metus. Nullam luctus arcu nec urna gravida, eget consequat diam semper. Etiam in leo vitae tortor tempor sollicitudin ut sit amet leo. Cras dignissim sem ut odio ultri
                    cies, quis condimentum diam blandit. Pellentesque diam libero, rhoncus quis eros sed, consectetur variu
</span>
            </div>
        </div>
    </div>
    </div>
</header>
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
<br>
<div class="jumbotron">
    <h2>Health and Wellingbeing<h2>
            <img id="result_img" src='<?php echo $profileLink;?> class="img-responsive"'>

</div>
<?php
$sql = "SELECT eventID, eventName, description, date FROM health";

$result = $connection->query($sql);?>

<div class="col-xs-12" id="images">

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
            </div>
                <p>Event: <?php echo $eventName ?></p>
                <p><?php echo $description ?></p>
                <p>Date <?php echo $date ?></p>


            <?php
        }
    } else {
        echo "0 results";
    }?>


    <?php if ((isset($_SESSION['userSession'])) && ($_SESSION['permissions'] == 3)){
        echo "permissions";?>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit
    Info
</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Make News</h4>
            </div>
            <form action="addEvent.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">

                        <label for="usr">Event Name:</label>
                        <input type="text" class="form-control" name="name" value="">

                        <label for="usr">Description:</label>
                        <textarea class="form-control" name="description" rows="5" cols="80"></textarea>

                        <label for="usr">Date:</label>
                        <input type="date" class="form-control" name="date" value="">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-default">Submit</button>

                </div>
            </form>
        </div>

    </div>
</div>
<?php } ?>
</body>
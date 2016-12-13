<?php
session_start();
include ("header.php");

?>

</nav>
<head>
    <title>Health</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<html lang="en">

<body>
<br>
<?php
require_once("../includes/db_connection.php");

$sql = "SELECT clubid, clubName, clubDescription, clubContact, emailAddress, phoneNumber, profileLink, bodyLink, website FROM clubs";
$result = $connection->query($sql);?>


        <div class="col-lg-12">
            <h2 class="page-header">Go Portlethen Clubs</h2>
            <?php echo $clubid; ?>
            <?php if ((isset($_SESSION['userSession'])) && ($_SESSION['permissions'] == 3)) { ?>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Club
            </button>

        </div>


<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $clubid = $row["clubid"];
        $name = $row["clubName"];
        $description = $row["clubDescription"];
        $contact = $row ["clubContact"];
        $email = $row ["emailAddress"];
        $number = $row ["phoneNumber"];
        $profileLink = $row["profileLink"];
        $bodyLink = $row["bodyLink"];
        $website = $row["website"]

       ?>

         <div class="col-md-3 col-sm-6" >

                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <a href="deleteClub.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <img id="result_img" src='<?php echo $profileLink;?> class="img-responsive" width:"300" height:"300"'>
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4><?php echo $name ?></h4>
                        <h5> <?php echo $description ?></h5>
                       <?php echo"<a href = '/master/club.php?id=$clubid' class='btn btn-success'>Visit</a>" ?>
                        <form action="deleteClub.php" method="post">
                            <input type="hidden" name="clubid" value='<?php echo $clubid; ?>'>
                            <input type="submit" value="Delete">
                        </form>
                    </div>
                </div>
            </div>






        <?php
    }
} else {
    echo "0 results";
}?>

<?php //if ((isset($_SESSION['userSession'])) && ($_SESSION['permissions'] == 3)) { ?>
<!--    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Club-->
<!--    </button>-->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create a Club page</h4>
            </div>
            <form action="createClub.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="usr">Club Name:</label>
                        <input type="text" class="form-control" name="name" value="">

                         <label for="usr">Description:</label>
                        <textarea class="form-control" name="description" rows="5" cols="80"></textarea>

                        <label for="usr">Contact Info:</label>
                        <input type="text" class="form-control" name="contact" value="">

                        <label for="usr">Email Address</label>
                        <input type="text" class="form-control" name="email" value="">

                        <label for="usr">Phone Number</label>
                        <input type="text" class="form-control" name="number" value="">

                        <label for="usr">Profile Picture Link</label>
                        <input type="text" class="form-control" name="profilePic" value="">

                        <label for="usr">Body Picture Link</label>
                        <input type="text" class="form-control" name="bodyPic" value="">

                        <label for="usr">Group Website</label>
                        <input type="text" class="form-control" name="website" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
        </div>
        </form>
    </div>
</div>
<?php } ?>
        </body>
        </html>

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
echo $_SESSION["username"];

$sql = "SELECT clubid, clubname, clubdescription, clubgenre, clubcontact, profileLink FROM Clubs";
$result = $connection->query($sql);?>


        <div class="col-lg-12">
            <h2 class="page-header">Go Portlethen Clubs</h2>
        </div>


<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $clubid = $row["clubid"];
       $clubname = $row["clubname"];
       $clubdescription = $row["clubdescription"];
       $profileLink = $row["profileLink"];
       $bodyLink = $row["bodyLink"];

       ?>


            <div class="col-md-3 col-sm-6">

                <div class="panel panel-default text-center">
                    <div class="panel-heading">

                        <img id="result_img" src='<?php echo $profileLink;?> class="img-responsive"'>
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4><?php echo $clubname ?></h4>
                        <p> <?php echo $clubdescription ?></p>
                       <?php echo"<a href = '/master/club.php?id=$clubid' class='btn btn-success'>Visit</a>"?>
                    </div>
                </div>
            </div>






        <?php
    }
} else {
    echo "0 results";
}?>

<?php if ((isset($_SESSION['userSession'])) && ($_SESSION['permissions'] == 3)) { ?>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Club
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
            <form action="createClub.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">

                        <label for="usr">Club Name:</label>
                        <input type="text" class="form-control" name="name" value="">

                        <label for="usr">Description:</label>
                        <textarea class="form-control" name="description" rows="5" cols="80"></textarea>

                        <label for="usr">Contact Info:</label>
                        <input type="text" class="form-control" name="clubContact" value="">

                        <label for="usr">Email Address</label>
                        <input type="text" class="form-control" name="emailAddress" value="">

                        <label for="usr">Phone Number</label>
                        <input type="text" class="form-control" name="phoneNumber" value="">
                        
                        <label for="usr">Profile Picture Link</label>
                        <input type="text" class="form-control" name="profileLink" value="">

                        <label for="usr">Body Picture Link</label>
                        <input type="text" class="form-control" name="bodyLink" value="">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-default">Submit</button>

                </div>
        </div>
        <?php } ?>
        </form>
    </div>
</div>





        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        </body>
        </html>

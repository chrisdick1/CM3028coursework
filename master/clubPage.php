<?php
session_start();
include ("header.php");
?>
<html lang="en">

<body>
<br>
<?php
require_once("../includes/db_connection.php");
echo $_SESSION["username"];

$sql = "SELECT clubid, clubname, clubdescription, clubgenre, clubcontact FROM Clubs";
$result = $connection->query($sql);?>

    <div class="row">
        <div class="col-lg-12">


<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $clubid = $row["clubid"];
       $clubname = $row["clubname"];
       $clubdescription = $row["clubdescription"];
       $clubgenre = $row["clubgenre"];
       $clubcontact = $row["clubcontact"];

       ?>

            <div class="col-lg-12">
                <h2 class="page-header">Services Panels</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service One</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

        <div class="jumbotron">

        <p>Club Name: <?php echo $clubname ?></p>
        <p>Club Description: <?php echo $clubdescription ?></p>
        <p>Club Genre: <?php echo $clubgenre ?></p>
        <p>Club Contact Information: <?php echo $clubcontact ?></p>
            <?php echo "<a href = '/master/club.php?id=$clubid'>Visit Club Page</a>" ?>


        </div>
        <?php
    }
} else {
    echo "0 results";
}?>












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

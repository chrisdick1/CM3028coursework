<?php
require_once("../includes/db_connection.php");
include ("header.php");?>
</nav>
<?php
$id = $_GET['id'];
$clubid = $_GET['id'];

$sql = "SELECT clubid, clubName, clubDescription, clubContact, emailAddress, phoneNumber, profileLink, bodyLink, website FROM Clubs WHERE clubid = $id";
$result = $connection->query($sql);?>

    <html lang="en">

    <body>
    <br>
    <?php
    require_once("../includes/db_connection.php");


    $sql = "SELECT clubid, clubName, clubDescription, clubContact, emailAddress, phoneNumber, profileLink, bodyLink, website FROM clubs";
    $result = $connection->query($sql);?>

    <div class="col-xs-12" id="images">
        <?php
        $sql = "SELECT clubid, clubName, clubDescription, clubContact, emailAddress, phoneNumber, profileLink, bodyLink, website FROM Clubs WHERE clubid = $id";
        $result = $connection->query($sql);?>

        <div class="col-xs-12" id="images">

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

            <!-- Page Content -->
            <div class="container">

                <!-- Portfolio Item Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Portfolio Item
                            <small>Item Subheading</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Portfolio Item Row -->
                <div class="row">

                    <div class="col-md-8">
                        <img class="img-responsive" src="<?php echo $bodyLink;?>" alt="ClubPicture">
                    </div>

                    <div class="col-md-4">
                        <h3><?php echo $name ?></h3>
                        <p><?php echo $description ?></p>
                        <h3>Contact Details</h3>
                        <ul>
                            <li><?php echo $contact ?></li>
                            <li><?php echo $email ?></li>
                            <li><?php echo $number ?></li>
                            <li><?php echo $website ?></li>
                        </ul>
                    </div>

                </div>
                <!-- /.row -->

                <!-- Related Projects Row -->
                <div class="row">

                    <div class="col-lg-12">
                        <h3 class="page-header">Related Projects</h3>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                        </a>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                        </a>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                        </a>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                        <a href="#">
                            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                        </a>
                    </div>

                </div>
                <!-- /.row -->

                <hr>

                <?php
                }
            } else {
                echo "0 results";
            } ?>





            


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

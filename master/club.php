<?php
require_once("../includes/db_connection.php");
include ("header.php");?>
</nav>
<?php
$id = $_GET['id'];

$sql = "SELECT clubid, clubName, clubDescription, clubContact FROM Clubs WHERE clubid = $id";
$result = $connection->query($sql);?>


(clubName, clubDescription, clubContact, emailAddress, phoneNumber, profileLink, bodyLink, website)

    <html lang="en">

    <body>
    <br>
    <?php
    require_once("../includes/db_connection.php");


    $sql = "SELECT clubid, clubname, clubdescription, clubgenre, clubcontact, profileLink, bodyLink FROM clubs";
    $result = $connection->query($sql);?>

    <div class="col-xs-12" id="images">
        <?php
        $sql = "SELECT clubid, clubname, clubdescription, clubgenre, clubcontact FROM Clubs WHERE clubid = $id";
        $result = $connection->query($sql);?>

        <div class="col-xs-12" id="images">

            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $clubid = $row["clubid"];
                    $clubname = $row["clubname"];
                    $clubdescription = $row["clubdescription"];
                    $clubgenre = $row["clubgenre"];
                    $clubcontact = $row["clubcontact"];
                    $profileLink = $row["profileLink"];
                    $bodyLink = $row["bodyLink"];

            ?>
<!--                     <div class="jumbotron">-->
<!---->
<!--                        <p>Club Name: --><?php //echo $clubname ?><!--</p>-->
<!--                        <p>Club Description: --><?php //echo $clubdescription ?><!--</p>-->
<!--                        <p>Club Genre: --><?php //echo $clubgenre ?><!--</p>-->
<!--                        <p>Club Contact Information: --><?php //echo $clubcontact ?><!--</p>-->
<!---->
<!---->
<!--                    </div>-->
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
                        <img class="img-responsive" src="<?php echo $profileLink;?>" alt="ClubPicture">
                    </div>

                    <div class="col-md-4">
                        <h3>Club Description</h3>
                        <p><?php echo $clubdescription ?></p>
                        <h3>Contact Details</h3>
                        <ul>
                            <li>Lorem Ipsum</li>
                            <li>Dolor Sit Amet</li>
                            <li>Consectetur</li>
                            <li>Adipiscing Elit</li>
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

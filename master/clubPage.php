<?php
require_once("../includes/db_connection.php");

$sql = "SELECT clubid, clubname, clubdescription, clubgenre, clubcontact FROM Clubs";
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

       ?> <div class="jumbotron">

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



        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" href="../../favicon.ico">

            <title>Narrow Jumbotron Template for Bootstrap</title>

            <!-- Bootstrap core CSS -->
            <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="narrow-jumbotron.css" rel="stylesheet">
        </head>

        <body>

        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills float-xs-right">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <h3 class="text-muted">Project name</h3>
            </div>

            <div class="jumbotron">
                <h1 class="display-3">Jumbotron heading</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
            </div>

            <div class="row marketing">
                <div class="col-lg-6">
                    <h4>Subheading</h4>
                    <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                    <h4>Subheading</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                    <h4>Subheading</h4>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                </div>

                <div class="col-lg-6">
                    <h4>Subheading</h4>
                    <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                    <h4>Subheading</h4>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                    <h4>Subheading</h4>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                </div>
            </div>

            <footer class="footer">
                <p>&copy; Company 2014</p>
            </footer>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        </body>
        </html>


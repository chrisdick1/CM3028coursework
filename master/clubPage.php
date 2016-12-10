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
            <?php echo "<a href = '/photoProfile.php?id=$clubid'>Visit Club Page</a>" ?>


        </div>
        <?php
    }
} else {
    echo "0 results";
}?>


        <?php echo "<a href = '/photoProfile.php?id=$clubid'>Visit Club Page</a>" ?>

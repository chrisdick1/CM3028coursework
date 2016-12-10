<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true);

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

?>

    <div id="main">
        <div id="navigation">
            <?php echo public_navigation($current_subject, $current_page); ?>
        </div>
        <div id="page">
            <?php if ($current_page) { ?>

                <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
                <?php echo nl2br(htmlentities($current_page["content"])); ?>

            <?php } else { ?>

                <p> <?php
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
        } ?></p>



            <?php }?>
        </div>
    </div>

<?php include("../includes/layouts/footer.php"); ?>
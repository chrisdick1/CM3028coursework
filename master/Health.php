<?php ?>
<head>
    <title>Health</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!-- Trigger the modal with a button -->
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
            <form action="edit_user.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">

                        <label for="usr">Event Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $country; ?>">

                        <label for="usr">Description:</label>
                        <textarea class="form-control" name="description" rows="5" cols="80"><?php echo $description; ?></textarea>

                        <label for="usr">Date:</label>
                        <input type="text" class="form-control" name="country" value="<?php echo $country; ?>">

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
<?php include('updateTables.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add a new Destination</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body class="adminpage">
        <h1 id="adminpageh1">Add a Destination</h1>
        <hr width="550px"/>

        <br/>

        <form class="form-horizontal" method="post" action="updateTables.php">

            <div class="form-group">
                <label class="col-sm-2 control-label">Destination Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_deName" value="<?php echo $pk_deName; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">City</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_deCity" value="<?php echo $pk_deCity; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">State</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_deState" value="<?php echo $pk_deState; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Zip Code</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_deZipCode" value="<?php echo $pk_deZipCode; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Country Code</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_deCountryCode" value="<?php echo $pk_deCountryCode; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Telephone</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="pk_deTelephone" value="<?php echo $pk_deTelephone; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">DP ID</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="pk_dpID" value="<?php echo $pk_dpID; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="addDest" class="btn btn-info">Add</button>
                    <a href="AdminPage.php" class="btn btn-primary">Cancel</a>
                </div>
            </div>

        </form>
    </body>
</html>

<?php include('updateTables.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add a new Department</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body class="adminpage">
        <h1 id="adminpageh1">Add a Department</h1>
        <hr width="550px"/>

        <br/>

        <form class="form-horizontal" method="post" action="updateTables.php">

            <div class="form-group">
                <label class="col-sm-2 control-label">Department Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_dName" value="<?php echo $pk_dName; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">C ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cID" value="<?php echo $pk_cID; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">MD ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_mdID" value="<?php echo $pk_mdID; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="addDept" class="btn btn-info">Add</button>
                    <a href="AdminPage.php" class="btn btn-primary">Cancel</a>
                </div>
            </div>

        </form>
    </body>
</html>

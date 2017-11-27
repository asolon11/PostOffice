<?php include('updateTables.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add a New Customer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body class="adminpage">
        <h1 id="adminpageh1">Add a Customer</h1>
        <hr width="550px"/>

        <br/>

        <form class="form-horizontal" method="post" action="updateTables.php">

            <div class="form-group">
                <label class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cFname" value="<?php echo $pk_cFname; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Middle Initial</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cMinit" value="<?php echo $pk_cMinit; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cLname" value="<?php echo $pk_cLname; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Company</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cCompany" value="<?php echo $pk_cCompany; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Street</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cAddress" value="<?php echo $pk_cAddress; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">City</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cCity" value="<?php echo $pk_cCity; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">State</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cState" value="<?php echo $pk_cState; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Zip Code</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cZipCode" value="<?php echo $pk_cZipCode; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="pk_cEmail" value="<?php echo $pk_cEmail; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Mobile</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="pk_cMobile" value="<?php echo $pk_cMobile; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Employee ID</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="pk_eID" value="<?php echo $pk_eID; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="addCust" class="btn btn-info">Add</button>
                    <a href="AdminPage.php" class="btn btn-primary">Cancel</a>
                </div>
            </div>

        </form>
    </body>
</html>

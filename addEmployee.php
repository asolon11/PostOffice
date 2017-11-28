<?php include('updateTables.php');

?>
<!DOCTYPE html>
<html>
  <head>
      <title>Add Employee</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel="stylesheet" href="styles/style.css">
  </head>
  <body class="adminpage">
    <h1 id="adminpageh1">Add An Employee</h1>
    <hr width="550px"/>

      <br/>

    <form class="form-horizontal" method="post" action="updateTables.php">

      <div class="form-group">
        <label class="col-sm-2 control-label">First Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eFname" placeholder="First Name" value="<?php echo $pk_eFname; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Middle Initial</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eMinit" value="<?php echo $pk_eMinit; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Last Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eLname" value="<?php echo $pk_eLname; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Start Date</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eStartDate" value="<?php echo $pk_eStartDate; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">End Date</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eEndDate" value="<?php echo $pk_eEndDate; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Street</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eAddress" value="<?php echo $pk_eAddress; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">City</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eCity" value="<?php echo $pk_eCity; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">State</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eState" value="<?php echo $pk_eState; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Zipcode</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eZipCode" value="<?php echo $pk_eZipCode; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" name="pk_eEmail" value="<?php echo $pk_eEmail; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eMobile" value="<?php echo $pk_eMobile; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">SSN</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eSsn" value="<?php echo $pk_eSsn; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" name="pk_eSex" value="<?php echo $pk_eSex; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Manager ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_mID" value="<?php echo $pk_mID; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Department ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_edID" value="<?php echo $pk_edID; ?>" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="add" class="btn btn-info">Add</button>
          <a href="AdminPage.php" class="btn btn-primary">Cancel</a>
        </div>
      </div>
    </form>

  </body>
</html>

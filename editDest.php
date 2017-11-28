<?php include('updateTables.php');

    if (isset($_GET['editDest'])) {
      $pk_deID = $_GET['editDest'];
      $edit_state = true;

      $rec2 = mysqli_query($db, "SELECT * FROM pk_Destination WHERE pk_deID=$pk_deID");
      $record2 = mysqli_fetch_array($rec2);
      $pk_deID = $record2['pk_deID'];
      $pk_deName = $record2['pk_deName'];
      $pk_deCity = $record2['pk_deCity'];
      $pk_deState = $record2['pk_deState'];
      $pk_deZipCode = $record2['pk_deZipCode'];
      $pk_deCountryCode = $record2['pk_deCountryCode'];
      $pk_deTelephone = $record2['pk_deTelephone'];
      $pk_dpID = $record2['pk_dpID'];
    }
?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Edit Destination</title>
  </head>
  <body class="adminpage">

    <h1 id="adminpageh1">Update Destination Information</h1>
    <hr width="550px"/>

      <br/>
      <h3><b>DESTINATION: </b>

      <?php
        print $pk_deName;
      ?></h3>

    <br/>
    <form class="form-horizontal" action="updateTables.php" method="POST" target="currentPage">
      <div class="form-group">
        <label class="col-sm-2 control-label">Destination ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_deID" value="<?php echo $pk_deID;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Destination Name</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_deName" value="<?php echo $pk_deName;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">City</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_deCity" value="<?php echo $pk_deCity;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">State</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_deState" value="<?php echo $pk_deState;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">ZipCode</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_deZipCode" value="<?php echo $pk_deZipCode;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Country Code</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_deCountryCode" value="<?php echo $pk_deCountryCode;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Telephone No.</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_deTelephone" value="<?php echo $pk_deTelephone;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">DP ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_dpID" value="<?php echo $pk_dpID;?>" required>
        </div>
      </div>



      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="editDest" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>

    <br/>
    <a href="/PostOffice/AdminPage.php">Click here to return to Admin Page</a>
  </body>
</html>

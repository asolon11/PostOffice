<?php include('updateTables.php');

    if (isset($_GET['edit'])) {
        $pk_eID = $_GET['edit'];
        $edit_state = true;

        $rec = mysqli_query($db, "SELECT * FROM pk_Employee WHERE pk_eID=$pk_eID");
        $record = mysqli_fetch_array($rec);
        $pk_eID = $record['pk_eID'];
        $pk_eStartDate = $record['pk_eStartDate'];
        $pk_eEndDate = $record['pk_eEndDate'];
        $pk_eFname = $record['pk_eFname'];
        $pk_eMinit = $record['pk_eMinit'];
        $pk_eLname = $record['pk_eLname'];
        $pk_eAddress = $record['pk_eAddress'];
        $pk_eCity = $record['pk_eCity'];
        $pk_eState = $record['pk_eState'];
        $pk_eZipCode = $record['pk_eZipCode'];
        $pk_eEmail = $record['pk_eEmail'];
        $pk_eMobile = $record['pk_eMobile'];
        $pk_eSsn = $record['pk_eSsn'];
        $pk_eSex = $record['pk_eSex'];
        $pk_mID = $record['pk_mID'];
        $pk_edID = $record['pk_edID'];

    }
?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Edit Employee</title>
  </head>
  <body class="adminpage">

    <h1 id="adminpageh1">Update Employee Information</h1>
    <hr width="550px"/>

      <br/>
      <h3><b>EMPLOYEE: </b>

      <?php
        print $pk_eFname;
        print " ";
        print $pk_eMinit;
        print ". ";
        print $pk_eLname;
      ?></h3>

    <br/>
    <form class="form-horizontal" action="updateTables.php" method="POST" target="currentPage">
      <div class="form-group">
        <label class="col-sm-2 control-label">Employee ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eID" value="<?php echo $pk_eID;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Start Date</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eStartDate" value="<?php echo $pk_eStartDate;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">End Date</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eEndDate" value="<?php echo $pk_eEndDate;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Street</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eAddress" value="<?php echo $pk_eAddress;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">City</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eCity" value="<?php echo $pk_eCity;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">State</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eState" value="<?php echo $pk_eState;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Zipcode</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eZipCode" value="<?php echo $pk_eZipCode;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" name="pk_eEmail" value="<?php echo $pk_eEmail;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eMobile" value="<?php echo $pk_eMobile;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">SSN</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eSsn" value="<?php echo $pk_eSsn;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-1">
          <input type="text" class="form-control" name="pk_eSex" value="<?php echo $pk_eSex;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Manager ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_mID" value="<?php echo $pk_mID;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Department ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_edID" value="<?php echo $pk_edID;?>" required>
        </div>
      </div>

      <!-- this won't work for some reason.
      <div class="form-group">
        <label class="col-sm-2 control-label">Department ID</label>
        <div class="col-sm-2">
          <select class="form-control" name="pk_edID">
              <?php while ($row = mysqli_fetch_array($results)) {?>
                  <option value="<?php echo $pk_edID;?>">
                      <?php echo $pk_edID;?>
                  </option>
              <?php } ?>
          </select>
        </div>
      </div> -->

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="update" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>

    <br/>
    <a href="AdminPage.php">Click here to return to Admin Page</a>
  </body>
</html>

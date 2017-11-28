<?php include('updateTables.php');

    // fetches customer records to be updated
    if (isset($_GET['editCust'])) {
      $pk_cID = $_GET['editCust'];
      $edit_state = true;

      $rec2 = mysqli_query($db, "SELECT * FROM pk_Customer WHERE pk_cID=$pk_cID");
      $record2 = mysqli_fetch_array($rec2);
      $pk_cID = $record2['pk_cID'];
      $pk_cFname = $record2['pk_cFname'];
      $pk_cMinit = $record2['pk_cMinit'];
      $pk_cLname = $record2['pk_cLname'];
      $pk_cCompany = $record2['pk_cCompany'];
      $pk_cAddress = $record2['pk_cAddress'];
      $pk_cCity = $record2['pk_cCity'];
      $pk_cState = $record2['pk_cState'];
      $pk_cZipCode = $record2['pk_cZipCode'];
      $pk_cEmail = $record2['pk_cEmail'];
      $pk_cMobile = $record2['pk_cMobile'];
      $pk_eID = $record2['pk_eID'];
    }

?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Edit Customer</title>
  </head>
  <body class="adminpage">

    <h1 id="adminpageh1">Update Customer Information</h1>
    <hr width="550px"/>

    <br/>
    <h3><b>CUSTOMER: </b>
      <?php
          print $pk_cFname;
          print " ";
          print $pk_cMinit;
          print ". ";
          print $pk_cLname;
      ?>
    </h3>

    <br/>
    <form class="form-horizontal" action="updateTables.php" method="POST">
      <div class="form-group">
        <label class="col-sm-2 control-label">Customer ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_cID" value="<?php echo $pk_cID;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Company</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_cCompany" value="<?php echo $pk_cCompany;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Street</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_cAddress" value="<?php echo $pk_cAddress;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">City</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="pk_cCity" value="<?php echo $pk_cCity;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">State</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_cState" value="<?php echo $pk_cState;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">ZipCode</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_cZipCode" value="<?php echo $pk_cZipCode;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_cEmail" value="<?php echo $pk_cEmail;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_cMobile" value="<?php echo $pk_cMobile;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Employee ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_eID" value="<?php echo $pk_eID;?>" required>

          <!-- This is supposed to show a drop down menu with the employee's IDs but it won't work -->
          <!-- <select class="form-control"name="pk_eID">
            <?php
              $customerInformation = "select * from pk_Employee";
              $result = mysqli_query($connect, $customerInformation);
              while ($row = mysqli_fetch_assoc($result))
              {
                print "<option value='" .$row['pk_eID'] . "'>" . $row['pk_eID'] . "</option>". "\r\n";
              }
            ?>
          </select> -->
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="updateCust" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
    <br/>
    <a href="AdminPage.php">Click here to return to Admin Page</a>
  </body>
</html>

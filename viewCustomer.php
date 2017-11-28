<?php include('updateTables.php');

    if (isset($_GET['viewCust'])) {
      $pk_cID = $_GET['viewCust'];
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
    <title>Viewing <?php echo $pk_cFname?>'s Information</title>
  </head>
  <body class="adminpage">

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

    <!-- <br/> -->
    <div align="center">
      <table>
        <tr>
            <td width="130px"><h4><b>Customer ID</b><h4></td>
            <td width="200px"><?php echo $pk_cID;?></td>
        </tr>
        <tr>
            <td><h4><b>Company</b></h4></td>
            <td> <?php echo $pk_cCompany;?></td>
        </tr>
        <tr>
            <td><h4><b>Address</b></h4></td>
            <td><?php echo $pk_cAddress?>, <?php echo $pk_cCity?>,</td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $pk_cState?>, <?php echo $pk_cZipCode?></td>
        </tr>
        <tr>
            <td><h4><b>Email</b></h4></td>
            <td><?php echo $pk_cEmail?></td>
        </tr>
        <tr>
            <td><h4><b>Mobile No.</b></h4></td>
            <td><?php echo $pk_cMobile?></td>
        </tr>
        <tr>
            <td><h4><b>Employee ID</b></h4></td>
            <td><?php echo $pk_eID?></td>
        </tr>
      </table>
    </div>

    <!-- <div>
        <form class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">Customer ID</label>
            <div class="col-sm-9">
              <p class="form-control-static"><?php echo $pk_cID;?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Company</label>
            <div class="col-sm-9">
              <p class="form-control-static"><?php echo $pk_cCompany;?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Street</label>
            <div class="col-sm-9">
              <p class="form-control-static"><?php echo $pk_cAddress;?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">City</label>
            <div class="col-sm-9">
              <p class="form-control-static"><?php echo $pk_cCity;?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">State</label>
            <div class="col-sm-9">
              <p class="form-control-static"><?php echo $pk_cState;?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">ZipCode</label>
            <div class="col-sm-9">
              <p class="form-control-static"><?php echo $pk_cZipCode;?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-9">
              <p class="form-control-static"><?php echo $pk_cEmail;?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Mobile</label>
            <div class="col-sm-2">
              <p class="form-control-static"><?php echo $pk_cMobile;?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Employee ID</label>
            <div class="col-sm-2">
              <p class="form-control-static"><?php echo $pk_eID;?></p>
            </div>
          </div>

        </form>
      </div> -->
    <br/>
    <a href="AdminPage.php" role="btn" class="btn btn-primary">Return to Admin Page</a>
  </body>
</html>

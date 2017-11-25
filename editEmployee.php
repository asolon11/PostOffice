<html>
  <head>
    <?php
      $connect = mysqli_connect("localhost", "root", "1234");
      mysqli_select_db($connect, "packageDB");
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Edit Employee</title>
  </head>
  <body class="adminpage">
    <?php
      $getEmployee = "select * from pk_Employee where pk_eID = "
                     . $_GET['id'] . ";";
      $result = mysqli_query($connect, $getEmployee);
      $row = mysqli_fetch_assoc($result);
    ?>

    <h1 id="adminpageh1">Update Employee Information</h1>
    <hr width="550px"/>

      <br/>
      <h3><b>EMPLOYEE: </b>
      <?php
        print $row['pk_eFname'];
        print " ";
        print $row['pk_eMinit'];
        print ". ";
        print $row['pk_eLname'];
      ?></h3>

    <br/>
    <form class="form-horizontal" action="updateEmployeeTable.php" method="POST" target="currentPage">
      <div class="form-group">
        <label class="col-sm-2 control-label">Employee ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eID" value=<?php print '"';
                                                              print $row['pk_eID'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Start Date</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eStartDate" value=<?php print '"';
                                                              print $row['pk_eStartDate'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">End Date</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eEndDate" value=<?php print '"';
                                                              print $row['pk_eEndDate'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Street</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eAddress" value=<?php print '"';
                                                              print $row['pk_eAddress'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">State</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eState" value=<?php print '"';
                                                              print $row['pk_eState'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">City</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eCity" value=<?php print '"';
                                                              print $row['pk_eCity'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Zipcode</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eZipCode" value=<?php print '"';
                                                              print $row['pk_eZipCode'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" name="pk_eEmail" value=<?php print '"';
                                                               print $row['pk_eEmail'];
                                                               print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eMobile" value=<?php print '"';
                                                              print $row['pk_eMobile'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">SSN</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pk_eSsn" value=<?php print '"';
                                                              print $row['pk_eSsn'];
                                                              print '"';?>>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-1">
          <select class="form-control" name="pk_eSex">
            <?php
              $employeeInformation = "select * from pk_Employee";
              $result = mysqli_query($connect, $employeeInformation);
              while ($row = mysqli_fetch_assoc($result))
              {
                print "<option value='" .$row['pk_eSex'] . "'>" . $row['pk_eSex'] . "</option>". "\r\n";
              }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Manager ID</label>
        <div class="col-sm-2">
          <select class="form-control" name="pk_mID">
            <?php
              $employeeInformation = "select * from pk_Employee";
              $result = mysqli_query($connect, $employeeInformation);
              while ($row = mysqli_fetch_assoc($result))
              {
                print "<option value='" .$row['pk_mID'] . "'>" . $row['pk_mID'] . "</option>". "\r\n";
              }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Department ID</label>
        <div class="col-sm-2">
          <select class="form-control"name="pk_edID">
            <?php
              $employeeInformation = "select * from pk_Employee";
              $result = mysqli_query($connect, $employeeInformation);
              while ($row = mysqli_fetch_assoc($result))
              {
                print "<option value='" .$row['pk_edID'] . "'>" . $row['pk_edID'] . "</option>". "\r\n";
              }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>

    <br/>
    <a href="/PostOffice/AdminPage.php">Click here to return to Admin Page</a>
  </body>
</html>

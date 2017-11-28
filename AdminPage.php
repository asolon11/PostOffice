<?php include('updateTables.php');

?>
<html>
  <head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body class="adminpage">

    <h1 id="adminpageh1">Admin Page</h1>

    <!--
      Not sure if we should show all of the information of each employee and customer or just show the names
      and the link to view will lead to a page to show the rest of the information.
    -->
    <h2>Employees</h2>

    <table class="table table-bordered">
      <tr class="active">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
      </tr>

      <!-- Gets the information from the database -->
      <?php while ($row = mysqli_fetch_array($results)) { ?>
          <tr>
              <td><?php echo $row['pk_eFname']?></td>
              <td><?php echo $row['pk_eLname']?></td>
              <td width="200px">
                  <a class="btn btn-info" href="viewEmployee.php?viewEmployee=<?php echo $row['pk_eID']?>">View</a>
                  <a class="btn btn-primary" href="editEmployee.php?edit=<?php echo $row['pk_eID']; ?> ">Edit</a>
                  <a class="btn btn-danger" href="updateTables.php?del=<?php echo $row['pk_eID']; ?>">Delete</a>
              </td>
          </tr>
      <?php } ?>

    </table>

    <a href='addEmployee.php'>Create a New Employee</a>

    <br/>

    <h2>Customers</h2>

    <table class="table table-bordered">
      <tr class="active">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
      </tr>

      <?php while ($row = mysqli_fetch_array($customerResults)) { ?>
          <tr>
              <td><?php echo $row['pk_cFname']?></td>
              <td><?php echo $row['pk_cLname']?></td>
              <td width="200px">
                  <a class="btn btn-info" href="viewCustomer.php?viewCust=<?php echo $row['pk_cID']?>">View</a>
                  <a class="btn btn-primary" href="editCustomer.php?editCust=<?php echo $row['pk_cID']; ?> ">Edit</a>
                  <a class="btn btn-danger" href="updateTables.php?delCust=<?php echo $row['pk_cID']; ?>">Delete</a>
              </td>
          </tr>
      <?php } ?>

    </table>

    <a href="addCustomer.php">Create a New Customer</a>

        <br/>
        <br/>

        <h2>Departments</h2>

        <table class="table table-bordered">
          <tr class="active">
            <th>Department Name</th>
            <th>Actions</th>
          </tr>

              <?php while ($row = mysqli_fetch_array($departmentResults)) { ?>
                  <tr>
                      <td><?php echo $row['pk_dName']?></td>
                      <td width="200px">
                          <a class="btn btn-info" href="viewDepartment.php?viewDept=<?php echo $row['pk_dID']; ?>">View</a>
                          <a class="btn btn-primary" href="editDepartment.php?editDept=<?php echo $row['pk_dID']; ?> ">Edit</a>
                          <a class="btn btn-danger" href="updateEmployee.php?delDept=<?php echo $row['pk_dID']; ?>">Delete</a>
                      </td>
                  </tr>
              <?php } ?>

        </table>

        <a href="addDepartment.php">Create a New Department</a>

        <br/>
        <br/>

        <h2>Destinations</h2>

        <table class="table table-bordered">
          <tr class="active">
            <th>Destination Name</th>
            <th>Actions</th>
          </tr>

              <?php while ($row = mysqli_fetch_array($destinationResults)) { ?>
                  <tr>
                      <td><?php echo $row['pk_deName']?></td>
                      <td width="200px">
                          <a class="btn btn-info" href="viewDest.php?viewDest=<?php echo $row['pk_deID']; ?>">View</a>
                          <a class="btn btn-primary" href="editDest.php?editDest=<?php echo $row['pk_deID']; ?> ">Edit</a>
                          <a class="btn btn-danger" href="updateEmployee.php?delDept=<?php echo $row['pk_deID']; ?>">Delete</a>
                      </td>
                  </tr>
              <?php } ?>

        </table>

        <a href="addDestination.php">Create a New Destination</a>

        <br/>
        <br/>

        <h2>Managers</h2>

        <table class="table table-bordered">
          <tr class="active">
            <th>Manager ID</th>
            <th>Employee ID</th>
            <th>Manager Bonus</th>
            <th>Actions</th>
          </tr>

              <?php while ($row = mysqli_fetch_array($managersResults)) { ?>
                  <tr>
                      <td><?php echo $row['pk_mID']?></td>
                      <td><?php echo $row['pk_eID']?></td>
                      <td><?php echo $row['pk_mBonus']?></td>
                      <td width="140px">
                          <a class="btn btn-primary" href="editDest.php?editDest=<?php echo $row['pk_mID']; ?> ">Edit</a>
                          <a class="btn btn-danger" href="updateEmployee.php?delDept=<?php echo $row['pk_mID']; ?>">Delete</a>
                      </td>
                  </tr>
              <?php } ?>

        </table>

        <a href="addManager.php">Create a New Manager</a>

        <br/>
        <br/>

        <h2>Packages</h2>

        <table class="table table-bordered">
          <tr class="active">
            <th>Package Name</th>
            <th>Actions</th>
          </tr>

              <?php while ($row = mysqli_fetch_array($packageResults)) { ?>
                  <tr>
                      <td><?php echo $row['pk_PackageName']?></td>
                      <td width="200px">
                          <a class="btn btn-info" href="viewPackage.php?viewPack=<?php echo $row['pk_ID']; ?>">View</a>
                          <a class="btn btn-primary" href="editPackage.php?editPack=<?php echo $row['pk_ID']; ?> ">Edit</a>
                          <a class="btn btn-danger" href="updateEmployee.php?delPack=<?php echo $row['pk_ID']; ?>">Delete</a>
                      </td>
                  </tr>
              <?php } ?>

        </table>

        <a href="addDestination.php">Create a New Package</a>

        <br/>
        <br/>

        <h2>Source</h2>

        <table class="table table-bordered">
          <tr class="active">
            <th>Source Name</th>
            <th>Actions</th>
          </tr>

              <?php while ($row = mysqli_fetch_array($sourceResults)) { ?>
                  <tr>
                      <td><?php echo $row['pk_sName']?></td>
                      <td width="200px">
                          <a class="btn btn-info" href="viewSource.php?viewSource=<?php echo $row['pk_sID']; ?>">View</a>
                          <a class="btn btn-primary" href="editSource.php?editSource=<?php echo $row['pk_sID']; ?> ">Edit</a>
                          <a class="btn btn-danger" href="updateEmployee.php?delSource=<?php echo $row['pk_sID']; ?>">Delete</a>
                      </td>
                  </tr>
              <?php } ?>

        </table>

        <a href="addSource.php">Create a New Source</a>

        <br/>
        <br/>

        <h2>Time Date Stamp</h2>

        <table class="table table-bordered">
          <tr class="active">
            <th>TimeDateStamp</th>
            <th>Actions</th>
          </tr>

              <?php while ($row = mysqli_fetch_array($tdsResults)) { ?>
                  <tr>
                      <td><?php echo $row['pk_TimeID']?></td>
                      <td width="200px">
                          <a class="btn btn-info" href="viewtds.php?viewtds=<?php echo $row['pk_TimeID']; ?>">View</a>
                          <a class="btn btn-primary" href="edittds.php?edittds=<?php echo $row['pk_TimeID']; ?> ">Edit</a>
                          <a class="btn btn-danger" href="updateEmployee.php?deltds=<?php echo $row['pk_TimeID']; ?>">Delete</a>
                      </td>
                  </tr>
              <?php } ?>

        </table>

        <a href="addtds.php">Create a New Time Date Stamp</a>

        <br/>
        <br/>

        <h2>Transactions</h2>

        <table class="table table-bordered">
          <tr class="active">
            <th>Transaction</th>
            <th>Actions</th>
          </tr>

              <?php while ($row = mysqli_fetch_array($transactionsResults)) { ?>
                  <tr>
                      <td><?php echo $row['pk_tTypeName']?></td>
                      <td width="200px">
                          <a class="btn btn-info" href="viewTrans.php?viewTrans=<?php echo $row['pk_tID']; ?>">View</a>
                          <a class="btn btn-primary" href="editTrans.php?editTrans=<?php echo $row['pk_tID']; ?> ">Edit</a>
                          <a class="btn btn-danger" href="updateEmployee.php?delTrans=<?php echo $row['pk_tID']; ?>">Delete</a>
                      </td>
                  </tr>
              <?php } ?>

        </table>

        <a href="addTrans.php">Create a Transaction</a>

  </body>
</html>

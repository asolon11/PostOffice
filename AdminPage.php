<?php include('updateEmployeeTable.php');

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
        <!-- <th width="110px">Id</th> -->
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
      </tr>
      <tr>
        <!-- Sample data to delete later -->
        <!-- <td>1</td> -->
        <td>Example First Name</td>
        <td>Example Last Name</td>
        <td width="200px"><button class="btn btn-info">View</button> <a href="editEmployee.php" class="btn btn-primary" role="button">Edit</a> <button class="btn btn-danger" href="addNewEmployee.php?delete=<?php echo $row['pk_eID']; ?>">Delete</button></td>
      </tr>

      <!-- Gets the information from the database -->
      <?php while ($row = mysqli_fetch_array($results)) { ?>
          <tr>
              <td><?php echo $row['pk_eFname']?></td>
              <td><?php echo $row['pk_eLname']?></td>
              <td>
                  <a class="btn btn-info">View</a>
                  <a class="btn btn-primary" href="editEmployee.php?edit=<?php echo $row['pk_eID']; ?> ">Edit</a>
                  <a class="btn btn-danger" href="updateEmployeeTable.php?del=<?php echo $row['pk_eID']; ?>">Delete</a>
              </td>
          </tr>
      <?php } ?>

    </table>

    <a href='addEmployee.php'>Create a New Employee</a>

    <br/>

    <h2>Customers</h2>

    <table class="table table-bordered">
      <tr class="active">
        <!-- <th width="110px">Id</th> -->
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
      </tr>
      <tr>
        <!-- Sample data to delete later -->
        <!-- <td>1</td> -->
        <td>Customer First Name</td>
        <td>Customer Last Name</td>
        <td width="200px"><button class="btn btn-info">View</button> <button class="btn btn-primary">Edit</button> <button class="btn btn-danger" href="addNewEmployee.php?delete=<?php echo $row['pk_eID']?>">Delete</button></td>
      </tr>

      <!-- Gets the information from the database -->
      <!-- <?php
        $employeeInfo = mysqli_query($connect, "select pk_cID, pk_cFname, pk_cLname from pk_Customer");
        while ($row = mysqli_fetch_assoc($employeeInfo))
        {
          print "<tr>";
          print "<td>";
          print $row['pk_cID'];
          print "</td>";
          print "<td>";
          print $row['pk_cFname'];
          print "</td>";
          print "<td>";
          print $row['pk_cLname'];
          print "</td>";
          print "<td width='200px'>";
          $viewLink = "<a href ='CustomerPage.php?id="
                      . $row['pk_cID']
                      . "' class='btn btn-info' role='button'>View</a> ";
          print $viewLink;
          $editLink = "<a href='editCustomer.php?id="
                      . $row['pk_cID']
                      . "' class='btn btn-primary' role='button'>Edit</a> ";
          print $editLink;
          $deleteLink = "<a href='deleteCustomer.php?id="
                      . $row['pk_cID']
                      . "' class='btn btn-danger' role='button'>Delete</a>";
          print $deleteLink;
          print "</td>";
          print "</tr>";
        }

      ?> -->

    </table>

    <a href="addCustomer.php">Create a New Customer</a>

  </body>
</html>

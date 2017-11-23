<html>
  <head>
    <title>Admin Page</title>
    <?php
      //this is just according to the database on my laptop.
      $connect = mysqli_connect("localhost", "root", "1234");
      mysqli_select_db($connect, "packageDB");
    ?>
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
        <th width="110px">Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
      </tr>
      <tr>
        <!-- Sample data to delete later -->
        <td>1</td>
        <td>Example First Name</td>
        <td>Example Last Name</td>
        <td width="200px"><button class="btn btn-info">View</button> <a href="editEmployee.php" class="btn btn-primary" role="button">Edit</a> <button class="btn btn-danger">Delete</button></td>
      </tr>

      <!-- Gets the information from the database -->
      <?php
        $employeeInfo = mysqli_query($connect, "select pk_eID, pk_eFname, pk_eLname from pk_Employee");
        while ($row = mysqli_fetch_assoc($employeeInfo))
        {
          print "<tr>";
          print "<td>";
          print $row['pk_eID'];
          print "</td>";
          print "<td>";
          print $row['pk_eFname'];
          print "</td>";
          print "<td>";
          print $row['pk_eLname'];
          print "</td>";
          print "<td>";
          $viewLink = "<a href ='EmployeePage.php?id="
                      . $row['pk_eID']
                      . "' class='btn btn-info' role='button'>View</a> ";
          print $viewLink;
          $editLink = "<a href='editEmployee.php?id="
                      . $row['pk_eID']
                      . "' class='btn btn-primary' role='button'>Edit</a> ";
          print $editLink;
          $deleteLink = "<a href='deleteEmployee.php?id="
                      . $row['pk_eID']
                      . "' class='btn btn-danger' role='button'>Delete</a>";
          print $deleteLink;
          print "</td>";
          print "</tr>";
        }

      ?>

    </table>

    <a>Create a New Employee</a>

    <br/>

    <h2>Customers</h2>

    <table class="table table-bordered">
      <tr class="active">
        <th width="110px">Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
      </tr>
      <tr>
        <!-- Sample data to delete later -->
        <td>1</td>
        <td>Customer First Name</td>
        <td>Customer Last Name</td>
        <td width="200px"><button class="btn btn-info">View</button> <button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>
      </tr>

      <!-- Gets the information from the database -->
      <?php
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

      ?>

    </table>

    <a>Create a New Customer</a>

  </body>
</html>

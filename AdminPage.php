<html>
  <head>
    <title>Admin Page</title>
    <!-- <?php
      $connect = mysqli_connect("localhost", "root", "1234");
      mysqli_select_db($connect, "packageDB");
    ?> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body class="adminpage">

    <h1 id="adminpageh1">Admin Page</h1>

    <h2>Employees</h2>

    <table class="table table-bordered">
      <tr class="active">
        <!-- <th width="40px">Id</th> -->
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
      </tr>
      <tr>
        <!-- <td>1</td> -->
        <td>Example First Name</td>
        <td>Example Last Name</td>
        <td width="200px"><button class="btn btn-info">View</button> <button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>
      </tr>

      <?php
        // $employeeInfo = mysqli_query($connect, "select pk_eID, pk_eFname, pk_eLname from pk_Employee")
        // while ($row = mysqli_fetch_assoc($employeeInfo))
        // {
        //   print "<tr>";
        //   print "<td>";
        //   print $row['pk_eID'];
        //   print "</td>";
        //   print "<td>";
        //   print $row['pk_eFname'];
        //   print "</td>";
        //   print "<td>";
        //   print $row['pk_eLname'];
        //   print "</td>";
        //   print "<td>";
        //   $editLink = "<a href='editEmployee.php?id="
        //               . $row['pk_eID']
        //               . "'> Edit |</a>";
        //   print $editLink;
        //   $deleteLink = "<a href='deleteEmployee.php?id="
        //               . $row['pk_eID']
        //               . "'> Delete </a>";
        //   print $deleteLink;
        //   print "</td>";
        //   print "</tr>";
        // }

      // ?>

    </table>

    <a>Create a New Employee</a>

    <br/>

    <h2>Customers</h2>

    <table class="table table-bordered">
      <tr class="active">
        <!-- <th width="40px">Id</th> -->
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
      </tr>
      <tr>
        <!-- <td>1</td> -->
        <td>Customer First Name</td>
        <td>Customer Last Name</td>
        <td width="200px"><button class="btn btn-info">View</button> <button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>
      </tr>

      <?php
        // $employeeInfo = mysqli_query($connect, "select pk_cID, pk_cFname, pk_cLname from pk_Customer")
        // while ($row = mysqli_fetch_assoc($employeeInfo))
        // {
        //   print "<tr>";
        //   print "<td>";
        //   print $row['pk_cID'];
        //   print "</td>";
        //   print "<td>";
        //   print $row['pk_cFname'];
        //   print "</td>";
        //   print "<td>";
        //   print $row['pk_cLname'];
        //   print "</td>";
        //   print "<td width='200px' align='center'>";
        //   $editLink = "<a href='editCustomer.php?id="
        //               . $row['pk_cID']
        //               . "'> Edit |</a>";
        //   print $editLink;
        //   $deleteLink = "<a href='deleteCustomer.php?id="
        //               . $row['pk_cID']
        //               . "'> Delete </a>";
        //   print $deleteLink;
        //   print "</td>";
        //   print "</tr>";
        // }

      // ?>

    </table>

    <a>Create a New Customer</a>

  </body>
</html>

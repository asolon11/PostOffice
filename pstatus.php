<!DOCTYPE html>
<html>
<head>
	<title>Package Status</title>
	<?php
      //this is just according to the database on my laptop.
      $connect = mysqli_connect("localhost", "root", "123456");
      mysqli_select_db($connect, "packageDB");
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">p
  </head>
</head>
<body class="packageStatus">
	 <table class="table table-bordered">
      <tr class="active">
        <th width="110px">Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Status</th>
      </tr>
      <?php
        $packageInfo = mysqli_query($connect, "select pk_PackageName, pk_Description, pk_Status from pk_Package");
        while ($row = mysqli_fetch_assoc($employeeInfo))
        {
          print "<tr>";
          print "<td>";
          print $row['pk_PackageName'];
          print "</td>";
          print "<td>";
          print $row['pk_Description'];
          print "</td>";
          print "<td>";
          print $row['pk_Status'];
          print "</td>";
          /*
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
		*/
        }

      ?>		
</body>
</html>
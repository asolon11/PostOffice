<!DOCTYPE html>
<html>
<head>
	<title>Package Status</title>
	<?php
      //this is just according to the database on my laptop.
      $connect = mysqli_connect("localhost", "root", "123456");
      mysqli_select_db($connect, "packageDB2");
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
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
        print "<h1> Package Status </h1";
        //trying to get the attribute for the id
        //$package_id = filter_input(INPUT_GET,'link', FILTER_SANITIZE_URL);
        //$packageInfo = mysqli_query($connect, "select pk_PackageName, pk_Description, pk_Status from pk_Package where pk_id = " + $package_id + ";");
        $packageInfo = mysqli_query($connect, "select pk_ID, pk_PackageName, pk_Description, pk_Status from pk_Package ;");
        /*if(is_null($packageInfo)){
          print "<b>";
          print "Package not found!";
          print "</b>";
          sleep(10);
          header("Location: /PostOffice/Packages.php");
          exit;
        }*/
        while ($row = mysqli_fetch_assoc($packageInfo))
        {
          print "<tr>";
          print "<td>";
          print $row['pk_ID'];
          print "</td>";
          print "<td>";
          print $row['pk_PackageName'];
          print "</td>";
          print "<td>";
          print $row['pk_Description'];
          print "</td>";
          print "<td>";
          print $row['pk_Status'];
          print "</td>";
        }
      ?>		
</body>
</html>

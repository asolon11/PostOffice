<html>
  <head>
    <?php
      $connect = mysqli_connect("localhost", "root", "1234");
      mysqli_select_db($connect, "packageDB");
    ?>
  </head>
  <body>
  	<?php
  		$updateEmployee = "update pk_Employee set pk_eID = "
  		                 . $_POST['pk_eID'] . ", pk_eStartDate = '"
                       . $_POST['pk_eStartDate'] . "', pk_eEndDate = '"
  		                 . $_POST['pk_eEndDate'] . "', pk_eAddress = '"
  		                 . $_POST['pk_eAddress'] . "', pk_eCity = '"
  		                 . $_POST['pk_eCity'] . "', pk_eState = '"
                       . $_POST['pk_eState'] . "', pk_eZipCode = '"
                       . $_POST['pk_eZipCode'] . "', pk_eEmail = '"
                       . $_POST['pk_eEmail'] . "', pk_eMobile = '"
                       . $_POST['pk_eMobile'] . "', pk_eSsn = '"
                       . $_POST['pk_eSsn'] . "', pk_eSex = '"
                       . $_POST['pk_eSex'] . "', pk_mID = "
                       . $_POST['pk_mID'] . ", pk_edID = "
                       . $_POST['pk_edID'] . " where pk_eID = "
  										 . $_POST['pk_eID'];

      // just to see if query is correct
  		print $updateEmployee;

  		mysqli_query($connect, $updateEmployee);
      // header('Location:/PostOffice/AdminPage.php');
  	?>
    <br/>
    <br/>
    <a href="/PostOffice/AdminPage.php">Admin Page</a>

  </body>
</html>

<?php include('updateTables.php');

    if (isset($_GET['viewDest'])) {
      $pk_deID = $_GET['viewDest'];
      $edit_state = true;

      $rec2 = mysqli_query($db, "SELECT * FROM pk_Destination WHERE pk_deID=$pk_deID");
      $record2 = mysqli_fetch_array($rec2);
      $pk_deID = $record2['pk_deID'];
      $pk_deName = $record2['pk_deName'];
      $pk_deCity = $record2['pk_deCity'];
      $pk_deState = $record2['pk_deState'];
      $pk_deZipCode = $record2['pk_deZipCode'];
      $pk_deCountryCode = $record2['pk_deCountryCode'];
      $pk_deTelephone = $record2['pk_deTelephone'];
      $pk_dpID = $record2['pk_dpID'];
    }

?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Viewing <?php echo $pk_deName?>'s Information</title>
  </head>
  <body class="adminpage">

    <br/>
    <h3><b>DESTINATION: </b>
      <?php
          print $pk_deName;
      ?>
    </h3>

    <!-- <br/> -->
    <div align="center">
      <table>
        <tr>
            <td width="130px"><h4><b>Destination ID</b><h4></td>
            <td width="200px"><?php echo $pk_deID;?></td>
        </tr>
        <tr>
            <td><h4><b>Address</b></h4></td>
            <td><?php echo $pk_deCity?>,</td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $pk_deState?>, <?php echo $pk_deZipCode?></td>
        </tr>
        <tr>
            <td><h4><b>Country Code</b></h4></td>
            <td><?php echo $pk_deCountryCode?></td>
        </tr>
        <tr>
            <td><h4><b>Telephone No.</b></h4></td>
            <td><?php echo $pk_deTelephone?></td>
        </tr>
        <tr>
            <td><h4><b>DP ID</b></h4></td>
            <td><?php echo $pk_dpID?></td>
        </tr>
      </table>
    </div>

    <br/>
    <a href="AdminPage.php" role="btn" class="btn btn-primary">Return to Admin Page</a>
  </body>
</html>

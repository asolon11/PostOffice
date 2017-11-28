<?php include('updateTables.php');

    if (isset($_GET['viewDept'])) {
      $pk_dID = $_GET['viewDept'];
      $edit_state = true;

      $rec2 = mysqli_query($db, "SELECT * FROM pk_Department WHERE pk_dID=$pk_dID");
      $record2 = mysqli_fetch_array($rec2);
      $pk_dID = $record2['pk_dID'];
      $pk_dName = $record2['pk_dName'];
      $pk_cID = $record2['pk_cID'];
      $pk_mdID = $record2['pk_mdID'];
    }

?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Viewing <?php echo $pk_dName?>'s Information</title>
  </head>
  <body class="adminpage">

    <br/>
    <h3><b>DEPARTMENT: </b>
      <?php
          print $pk_dName;
      ?>
    </h3>

    <!-- <br/> -->
    <div align="center">
      <table>
        <tr>
            <td width="130px"><h4><b>Department ID</b><h4></td>
            <td width="200px"><?php echo $pk_dID;?></td>
        </tr>
        <tr>
            <td><h4><b>C ID</b></h4></td>
            <td><?php echo $pk_cID?></td>
        </tr>
        <tr>
            <td><h4><b>MD ID</b></h4></td>
            <td><?php echo $pk_mdID?></td>
        </tr>
      </table>
    </div>

    <br/>
    <a href="AdminPage.php" role="btn" class="btn btn-primary">Return to Admin Page</a>
  </body>
</html>

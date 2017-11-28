<?php include('updateTables.php');

    if (isset($_GET['viewEmployee'])) {
        $pk_eID = $_GET['viewEmployee'];
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Viewing <?php echo $pk_eFname?>'s Information</title>
  </head>
  <body class="adminpage">

    <br/>
    <h3><b>EMPLOYEE: </b>
      <?php
          print $pk_eFname;
          print " ";
          print $pk_eMinit;
          print ". ";
          print $pk_eLname;
      ?>
    </h3>

    <!-- <br/> -->
    <div align="center">
      <table>
        <tr>
            <td width="140px"><h4><b>Customer ID</b><h4></td>
            <td width="200px"><?php echo $pk_eID;?></td>
        </tr>
        <tr>
            <td><h4><b>Start Date</b></h4></td>
            <td> <?php echo $pk_eStartDate;?></td>
        </tr>
        <tr>
            <td><h4><b>End Date</b></h4></td>
            <td> <?php echo $pk_eEndDate;?></td>
        </tr>
        <tr>
            <td><h4><b>Address</b></h4></td>
            <td><?php echo $pk_eAddress?>, <?php echo $pk_eCity?>,</td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $pk_eState?>, <?php echo $pk_eZipCode?></td>
        </tr>
        <tr>
            <td><h4><b>Email</b></h4></td>
            <td><?php echo $pk_eEmail?></td>
        </tr>
        <tr>
            <td><h4><b>Mobile No.</b></h4></td>
            <td><?php echo $pk_eMobile?></td>
        </tr>
        <tr>
            <td><h4><b>SSN</b></h4></td>
            <td><?php echo $pk_eSsn?></td>
        </tr>
        <tr>
            <td><h4><b>Gender</b></h4></td>
            <td><?php echo $pk_eSex?></td>
        </tr>
        <tr>
            <td><h4><b>Manager ID</b></h4></td>
            <td><?php echo $pk_mID?></td>
        </tr>
        <tr>
            <td><h4><b>Department ID</b></h4></td>
            <td><?php echo $pk_edID?></td>
        </tr>
      </table>
    </div>

    <br/>
    <a href="AdminPage.php" role="btn" class="btn btn-primary">Return to Admin Page</a>
  </body>
</html>

<?php include('updateTables.php');

    if (isset($_GET['editDept'])) {
      $pk_dID = $_GET['editDept'];
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
    <title>Edit Department</title>
  </head>
  <body class="adminpage">

    <h1 id="adminpageh1">Update Department Information</h1>
    <hr width="550px"/>

      <br/>
      <h3><b>DEPARTMENT: </b>

      <?php
        print $pk_dName;
      ?></h3>

    <br/>
    <form class="form-horizontal" action="updateTables.php" method="POST" target="currentPage">
      <div class="form-group">
        <label class="col-sm-2 control-label">Department ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_dID" value="<?php echo $pk_dID;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Department Name</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_dName" value="<?php echo $pk_dName;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">C ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_cID" value="<?php echo $pk_cID;?>" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">MD ID</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="pk_mdID" value="<?php echo $pk_mdID;?>" required>
        </div>
      </div>



      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="editDept" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>

    <br/>
    <a href="/PostOffice/AdminPage.php">Click here to return to Admin Page</a>
  </body>
</html>

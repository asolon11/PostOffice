<?php
  $userphp = null;
  if($_SERVER["REQUEST_METHOD"] == 'POST') {
      $connect = mysqli_connect('localhost', 'root', '');
      mysqli_select_db($connect, '');
      $result= mysqli_query($connect, "SELECT password FROM customer_login WHERE username ='" .$_POST['username']. "';");

      $password = mysqli_fetch_array($result);
      if($password['password'] == null || $password['password'] != $_POST['pwd'])
        $userphp = "The username and password you entered did not match our records";
      else if($password['password'] == $_POST['pwd']) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header("location: welcome.php");
      }
  }
?>

<html>
<head>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
  <div class="container ">
    <?php include('header.php') ?>

  <div class="row">
      <img class="col-md-6" src="delivery.png" class="img-rounded" alt="Cinque Terre">
      <div class="col-md-2"></div>
    <div class="col-md-4">
      <h2>Login</h1>
      <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group col-md-12">
          <label>Username</label>
          <label class="text-danger"><?php echo $userphp; ?></label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group col-md-12">
          <label>Password</label>
          <input type="password" name="pwd" class="form-control" required><br>
        </div>
          <button class="btn btn-primary" type="submit">Login</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>

<?php
  $emailphp = null;
  $userphp = null;
  $usernewphp = null;

  if($_SERVER["REQUEST_METHOD"] == 'POST') {
    $connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connect, 'test');
    $emailQuery = "SELECT * FROM pk_Customer WHERE pk_cEmail ='" .$_POST['email']. "';";
    $userQuery = "SELECT * FROM pk_Customer_login WHERE pk_username ='" .$_POST['user']. "';";

    if(mysqli_num_rows(mysqli_query($connect, $emailQuery)) > 0 && mysqli_num_rows(mysqli_query($connect, $userQuery)) > 0) {
      $emailphp = "Email used already";
      $userphp = "Username taken already";
    }
    if(mysqli_num_rows(mysqli_query($connect, $emailQuery)) > 0) {
       $emailphp = "Email used already";
    }
    else if(mysqli_num_rows(mysqli_query($connect, $userQuery)) > 0) {
       $userphp = "Username taken already";
    }
    else {
        $addUser = "INSERT INTO pk_Customer(pk_cFname, pk_cLname, pk_cCompany, pk_cAddress, pk_cCity, pk_cState, pk_cZipCode, pk_cEmail, pk_cMobile) values('"
          .$_POST['fname']."','"
          .$_POST['lname']."','"
          .$_POST['cname']."','"
          .$_POST['street']."','"
          .$_POST['city']."','"
          .strtoupper($_POST['state'])."','"
          .$_POST['zip']."','"
          .$_POST['email']."','"
          .$_POST['phone']."'); ";
        mysqli_query($connect, $addUser);

        $result = mysqli_query($connect, "SELECT pk_cID FROM pk_customer WHERE pk_cEmail ='" .$_POST['email']. "' LIMIT 1;");
        $customerID = mysqli_fetch_array($result);
        $addUserLogin = "INSERT INTO pk_Customer_login(pk_employeeID, pk_customerID, pk_username, pk_password) values (null,'"
         .$customerID['pk_cID']."', '"
         .$_POST['user']."','"
         .$_POST['pwd']."'); ";

        mysqli_query($connect, $addUserLogin);
        $usernewphp = 'Account Created!';
      }
    }
?>
<html>
<head>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script></head>
<body>
  <div class="container">
    <?php include('header.php') ?>
    <label><?php echo $usernewphp; ?></label>
    <h2>Sign Up</h1>
    <form id="signupform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-horizontal">
      <div class="row">
          <div class="form-group">
            <div class="col-md-12">
              <label>Company Name</label>
              <input type="text" name="cname" class="form-control">
            </div>
          </div>
      </div>
      <div class="row">
        <div class="form-group">
          <div class="col-md-6">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control">
          </div>
          <div class="col-md-6">
            <label name>Last Name</label>
            <input type="text" name="lname" class="form-control">
          </div>
        </div>
      </div>
        <div class="row">
          <div class="form-group">
            <div class=col-md-12>
              <label>Street</label>
              <input type="text" name="street" class="form-control">
            </div>
          </div>
        </div>
    <div class="row">
        <div class="form-group">
          <div class="col-md-4">
            <label>City</label>
            <input type="text" name="city" class="form-control">
          </div>
          <div class="col-md-4">
            <label>State</label>
            <input type="text" name="state" class="form-control">
          </div>
          <div class="col-md-4">
            <label>Zip Code</label>
            <input type="text" name="zip" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <div class="col-md-4">
            <label>Username</label>
            <label class="text-danger"><?php echo $userphp; ?></label>
            <input type="text" name="user" class="form-control">
          </div>
          <div class="col-md-4">
            <label>Email</label>
            <label class="text-danger"><?php echo $emailphp; ?></label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="col-md-4">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <div class="col-md-6">
            <label>Password</label>
            <input type="password" name="pwd" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Confirm Password</label>
            <input type="password" name="confirmpwd" class="form-control">
          </div>
        </div>
      </div>
        <button class="btn btn-primary" type="submit">Create Account</button>

        <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <div id="messages"></div>
        </div>
    </div>

    </form>
  </div>

  <script type="text/javascript">
  $(document).ready(function() {
      $('#signupform').bootstrapValidator({
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
              fname: {
                  validators: {
                      stringLength: {
                          max:25,
                          message:'No more than 25 letters'
                      },
                      notEmpty: {
                          message: 'Cannot be empty'
                      }
                  }
              },
              lname: {
                  validators: {
                      stringLength: {
                          max:25,
                          message:'No more than 25 letters'
                      },
                      notEmpty: {
                          message: 'Cannot be empty'
                      }
                  }
              },
              cname: {
                  validators: {
                      stringLength: {
                          max:25,
                          message:'No more than 25 letters'
                      }
                  }
              },
              street: {
                  validators: {
                      notEmpty: {
                          message: 'Cannot be empty'
                      }
                  }
              },
              city: {
                  validators: {
                      notEmpty: {
                          message: 'Cannot be empty'
                      }
                  }
              },
              state: {
                  validators: {
                      notEmpty: {
                          message: 'Cannot be empty'
                      },
                      stringLength: {
                          min: 2,
                          max: 2,
                          message:'Please enter your state in this format: CA'
                      }
                  }
              },
              zip: {
                  validators: {
                      stringLength: {
                          min: 5,
                          max: 5,
                          message:'Please enter your 5 digit zip code'
                      },
                      notEmpty: {
                          message: 'Cannot be empty'
                      },
                      zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                  }
              },
              user: {
                  validators: {
                      notEmpty: {
                          message: 'Cannot be empty'
                      }
                  }
              },
              email: {
                  validators: {
                      notEmpty: {
                          message: 'Cannot be empty'
                      },
                      emailAddress: {
                          message: 'The email address is not valid'
                      }
                  }
              },
              phone: {
                  validators: {
                      stringLength: {
                          min: 10,
                          max:10,
                          message:'Please follow this format, 6261112222'
                      },
                      notEmpty: {
                          message: 'Cannot be empty'
                      }

                  }
              },
              pwd: {
                  validators: {
                      notEmpty: {
                          message: 'Cannot be empty'
                      },
                  }
              },
              confirmpwd: {
                  validators: {
                      stringLength: {
                          max:25,
                          message:'No more than 25 letters'
                      },
                      notEmpty: {
                          message: 'Cannot be empty'
                      },
                      identical: {
                        field: 'pwd',
                        message: 'Password does not match'
                      }
                  }
              }
          }
      });
  });
  </script>
</body>
</html>

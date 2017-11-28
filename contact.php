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

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>

	<div class="row">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.0516158159785!2d-118.17123128495601!3d34.06819108060157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c5983a11c7fb%3A0x1833946fced02790!2sCalifornia+State+University%2C+Los+Angeles+(CSULA)!5e0!3m2!1sen!2sus!4v1511855229362" width="1250" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

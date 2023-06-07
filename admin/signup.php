<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>DrAid</title>
</head>

<body>
  <div class="header">
    <div class="hedlogo">
      <h1><a href="home.php">DrAid</a></h1>
    </div>
  </div>

  <div class="section indexSection">

    <div class="entry signBg">
      <div class="signup">
        <h1 class="label">Sign Up</h1>

        <form class="signin" action="includes/signup.inc.php" method="post">

          <?php
            if (isset($_GET['id'])) {

              if ($_GET['id'] == 'business') {
                ?>
          <div class="field">
            <input type="text" name="businessID" id="number" value="" required>
            <label for="number" class="lab">Enter Your Institute/Hospital Name</label>
          </div>
          <?php
              }
              if ($_GET['id'] == 'employee') {
                ?>
          <div class="field">
            <input type="text" name="employeeID" id="number" value="" required>
            <label for="number" class="lab">Enter Your Institute/Hospital User ID</label>
          </div>
          <?php
              }
            }
          ?>
          <input type="hidden" name="signupID" value="<?php echo $_GET['id']; ?>">

          <div class="name">
            <div class="field">
              <input type="text" name="fname" id="fname" value="" required>
              <label for="fname" class="lab">Enter Your Firstname</label>
            </div>
            <div class="field">
              <input type="text" name="lname" id="lname" value="" required>
              <label for="lname" class="lab">Enter Your Lastname</label>
            </div>
          </div>
          <div class="field">
            <input type="text" name="number" id="number" value="" required>
            <label for="number" class="lab">Enter Your Phone Number</label>
          </div>
          <div class="field">
            <input type="email" name="mail" id="mail" value="" required>
            <label for="mail" class="lab">Enter Your Email</label>
          </div>
          <div class="gender-info">
            <p>Choose Your Gender: </p>
            <label><input type="radio" name="gender" value="Male"> Male</label>
            <label><input type="radio" name="gender" value="Female"> Female</label>
          </div>
          <div class="field">
            <input type="password" name="pwd" id="pwd" value="" required>
            <label for="pwd" class="lab">Enter Your Password</label>
          </div>
          <div class="field">
            <input type="password" name="re-pwd" id="re-pwd" value="" required>
            <label for="re-pwd" class="lab">Re-Enter Your Password</label>
          </div>
          <div class="fgtDecline">
            <input type="reset" value="Reset" class="del">
            <input type="submit" name="signupReq" value="Submit" class="success">
          </div>
          <h4>Already have an account? <a href="index.php">Sign In</a></h4>
        </form>
      </div>
    </div>
  </div>

  <div class="footer">
    <h3>Develop By:<a href="#">Someone</a></h3>
  </div>

  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
</body>

</html>

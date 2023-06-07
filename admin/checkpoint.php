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

  <div class="section indexSection"></div>

  <div class="entry" id="fgt" style="display:block;">
    <div class="login fgt_login">
      <h1 class="label">Check Your OTP</h1>
      <form class="signin" action="includes/tokenSubmit.php" method="post">

        <p>Please enter your OTP to complete signup your account.</p>
        <?php
          if (isset($_GET['selector'])) {

            if (!empty($_GET['selector'])) {
              ?>
              <input type="hidden" name="reqSelector" value="<?php echo $_GET['selector']; ?>">
              <?php
            }elseif (empty($_GET['selector'])) {
              ?>
              <script type="text/javascript">history.go(-1);</script>
              <?php
            }

          }
        ?>

        <div class="field">
          <input type="text" name="reqToken" id="number" value="" required>
          <label for="number" class="lab">Enter Your OTP</label>
        </div>
        <div class="fgtDecline">
          <input type="reset" onclick="history.back();" value="Cancel" class="del">
          <input type="submit" name="tokenSubmit" value="Submit" class="success">
        </div>
      </form>
    </div>
  </div>

  <div class="footer">
    <h3>Develop By: <a href="#">Someone</a></h3>
  </div>

  <script src="js/jsfile.js" charset="utf-8"></script>
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
</body>

</html>

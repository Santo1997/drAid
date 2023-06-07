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

    <div id="display" class="intro_contain">
      <h2>Welcome to</h2>
      <h1>DrAid</h1><br /><br />
      <div class="center">
        <a href="#sign"> <span>Let In</span><span><i class="fi-xwlrxl-double-chevron-wide"></i></span> </a>
      </div>
    </div>
  </div>

  <div class="entry" id="sign">
    <a href="#" class="close"><i class="fi-xwluxl-times-wide"></i></a>
    <div class="login">
      <h1 class="label">Sign In</h1>
      <form class="signin" action="includes/signin.inc.php" method="post">
        <div class="field">
          <input type="text" name="sgnUsr" id="mail" value="" required>
          <label for="mail" class="lab">Enter Your Username</label>
        </div>
        <div class="field">
          <input type="password" name="sgnPwd" id="number" value="" required>
          <label for="number" class="lab">Enter Your Password</label>
        </div>

        <div class="extraInfo">
          <div>
            <input type="checkbox" name="" id="me">
            <label for="me">Remember Me</label>
          </div>
          <a href="#fgt" class="fgt">Forgot your password?</a>
        </div>

        <input type="submit" name="signinSubmit" value="Submit" class="success">
        <div class="log_info">
          <p>Don't have an account?</p>
          <input type="checkbox" id="up">
          <label for="up">
            <h3>Sign Up</h3>
          </label>
          <div class="acc_details" id="upper">
            <ul>
              <li><a href="signup.php?id=business" class="link_fnt">Organization</a></li>
              <li><a href="signup.php?id=employee" class="link_fnt">Management</a></li>
            </ul>
          </div>

        </div>
      </form>
    </div>
  </div>

  <div class="entry" id="fgt">
    <a href="#sign" class="close fgt_close"><i class="fi-xwluxl-times-wide"></i></a>
    <div class="login fgt_login">
      <h1 class="label">Find Your Account</h1>
      <form class="signin" action="includes/reset.inc.php" method="post">
        <p>Please enter your Hospital Id and Username to search for your account.</p>
        <div class="field">
          <input type="text" name="tbl" id="mail" required>
          <label for="mail" class="lab">Enter Your Hospital Id</label>
        </div>
        <div class="field">
          <input type="text" name="user" id="mail" required>
          <label for="mail" class="lab">Enter Your Username</label>
        </div>
        <div class="fgtDecline">
          <input type="reset" onclick="history.back();" value="Cancel" class="del">
          <input type="submit" name="resetSubmit" value="Submit" class="success">
        </div>
      </form>
    </div>
  </div>

  <div class="footer">
    <h3>Develop By: <a href="#">Someone</a></h3>
  </div>

  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
</body>

</html>

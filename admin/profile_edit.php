<?php
  require 'includes/header.inc.php';
?>
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
    <label for="nav">
      <div class="head">
        <img src="media/<?php echo $proPic; ?>" class="userImg">
        <h2><span><?php echo $sscode; ?></span><span><i class="fi-xwsdxl-caret-solid"></i></span></h2>
      </div>
    </label>
    <input type="checkbox" name="" id="nav">
    <ul class="headOut" id="navBar">
      <li><a href="profile.php?user=<?php echo $sscode; ?>"><span><i class="fi-xnsuxl-setting-solid grn"></i></span><span>Setting</span></a></li>
      <li><a href="includes/logout.php"><span><i class="fi-xnsuxl-sign-out-solid red"></i></span><span>Log Out</span></a></li>
    </ul>
  </div>

  <div class="section">

    <div class="secHead">
      <div class="hedUser">
        <img src="media/<?php echo $proPic; ?>" class="userImg">
        <div id="userInfo">
          <h3>Username</h3>
          <p>Member</p>
        </div>
        <div class="access">
          <label for="tog"><i class="fi-xwsrxl-ellipsis"></i></label>
          <input type="checkbox" name="" id="tog">
          <ul class="headOut" id="navBar2">
            <li><a href="profile.php?user=<?php echo $sscode; ?>"><span><i class="fi-xnsuxl-setting-solid grn"></i></span><span>Setting</span></a></li>
          </ul>
        </div>
      </div>
      <div class="nav">
        <label for="navigator" id="disNav">Navigation</label>
        <ul id="navigator">
          <li><a href="home.php"><span><i class="fi-xnluxl-radar vlt"></i></span><span>Dashboard</span></a></li>
          <li><a href="members.php?user=<?php echo $uid; ?>"><span><i class="fi-xnsuxl-team-solid orng"></i></span><span>Member</span></a></li>
        </ul>
      </div>
    </div>

    <div class="container fixed">

      <div class="tdsHistory fixedPadding">
        <div class="tdsActivity">
          <h2 class="tytle">Profile:</h2>
          <img src="media/<?php echo $proPic; ?>" class="userPic">
          <div class="userInfo" id="profileInfo">
            <!-- IDEA:
            <h1>Member Name</h1>
            <ul>
              <li></li>
              <li></li>
            </ul>
          -->
          </div>
        </div>

        <div class="tdsDetails proDetails">
          <h2 class="tytle ">Detais:</h2>



          <form class="proForm" action="includes/proEdit.inc.php" method="post">
            <input type="hidden" name="usertbl" value="<?php echo $acct; ?>">
            <input type="hidden" name="usercode" value="<?php echo $sscode; ?>">
            <label class="infoLab" for="contactEdit">Contact Information</label>
            <ul id="contactEdit" class="contactInfo">
              <li>MObile NO:</li>
              <li><input type="text" name="mobile"  id="mobile"></li>
              <li>Email: </li>
              <li><input type="email" name="mail"  id="mail"></li>
              <li>Whatsapp:</li>
              <li><input type="text" name="wts"  id="wts"></li>
            </ul>

            <label class="infoLab" for="basicEdit">Basic Information</label>
            <ul id="basicEdit" class="basicInfo">
              <li>First Name:</li>
              <li><input type="text" name="fname"  id="fname"></li>
              <li>Last Name:</li>
              <li><input type="text" name="lname"  id="lname"></li>
              <li>Display Name:</li>
              <li><input type="text" name="dsName"  id="dsName"></li>
              <li>Gender:</li>
              <li><input type="text" name="gender"  id="gender"></li>
              <li>Religion:</li>
              <li><input type="text" name="religious"  id="religious"></li>
            </ul>


            <label class="infoLab" for="eduEdit">Education Information</label>
            <ul id="eduEdit" class="basicInfo">
              <li>School/College/University:</li>
              <li><input type="text" name="eduIns"  id="eduIns"></li>
              <li>Degree:</li>
              <li><input type="text" name="eduDeg"  id="eduDeg"></li>
            </ul>



            <div class="updtInfo">
              <ul>
                <li><a href="profile.php?user=<?php echo $sscode; ?>" class=" cancel">Cancel</a></li>
                <li><input type="submit" name="proEditSubmit" value="Update" class="submit"></li>
              </ul>
            </div>
          </form>





        </div>
      </div>



      <div class="footer fixedFoot">
        <h3>Develop By: <a href="#">Someone</a></h3>
      </div>

    </div>

  </div>

  <script src="js/jsfile.js" charset="utf-8"></script>
  <script src="js/fun.js" charset="utf-8"></script>
  <script defer src="https://friconix.com/cdn/friconix.js"></script>
</body>

</html>

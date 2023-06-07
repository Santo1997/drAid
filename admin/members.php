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

      <div class="memberSlide">
        <label for="shwMember" id="disNav" class="infoLab"><span><i class="fi-xnsuxl-user-solid"></i></span><span>Doctors List</span></label>
        <div class="detaContain">
          <ul id="shwMember" class="shwMember">

            <!-- IDEA:
            <li><a href="#">User Name</a></li>
            <li><a href="#">User Name</a></li>
            <li><a href="#">User Name</a></li>
            <li><a href="#">User Name</a></li>
            <li><a href="#">User Name</a></li>
            <li><a href="#">User Name</a></li>
          -->
          </ul>
        </div>

      </div>
    </div>

    <div class="container fixed">

      <div class="containInfo">
        <ul>
          <li>
            <h1><?php echo $tdsPending; ?></h1>
            <p>Today's Process</p>
          </li>
          <li>
            <h1><?php echo $pending; ?></h1>
            <p>Total Pending</p>
          </li>
          <li>
            <h1><?php echo $tdsPending; ?></h1>
            <p>Processing</p>
          </li>
          <li>
            <h1><?php echo $success; ?></h1>
            <p>Success</p>
          </li>
        </ul>
      </div>

      <div class="tdsHistory fixedHeight">
        <div class="tdsActivity">
          <h2 class="tytle">Profile:</h2>
          <img src="" id="membImg" class="userPic">
          <div class="userInfo" id="memInfo">
            <!-- IDEA:
            <h1>Member Name</h1>
            <ul>
              <li></li>
              <li></li>
            </ul>
          -->
          </div>
        </div>

        <div class="tdsDetails">
          <h2 class="tytle titPos">Detais:</h2>

          <label for="contactInfo" class="infoLab">Contact Information:</label>
          <ul id="contactInfo" class="contactInfo">
            <!-- IDEA:
            <li>MObile NO:</li>
            <li>0123456789</li>
            <li>Email: </li>
            <li>memberMail@gmail.com</li>
            <li>Whatsapp:</li>
            <li>0123456789</li>
          -->
          </ul>
          <label for="basicInfo" class="infoLab">Basic Information:</label>
          <ul id="basicInfo" class="basicInfo">
            <!-- IDEA:
            <li>Full Name:</li>
            <li>Member Name</li>
            <li>School/College/University:</li>
            <li>School/College/University</li>
            <li>Degree:</li>
            <li>Degree</li>
            <li>Gender:</li>
            <li>Gender</li>
            <li>Religion:</li>
            <li>Religion</li>
          -->
          </ul>
        </div>
      </div>

      <div class="footer fixedFoot">
        <h3>Develop By: <a href="#">Someone</a></h3>
      </div>

    </div>

  </div>


    <script src="js/app.js" charset="utf-8"></script>
    <script src="js/jsfile.js" charset="utf-8"></script>
    <script src="js/fun.js" charset="utf-8"></script>
  <script defer src="https://friconix.com/cdn/friconix.js"></script>
</body>

</html>

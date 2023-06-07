<?php
  require 'includes/header.inc.php';

  if (isset($_GET['err'])){

    if ($_GET['err']=='Invalid') {
      echo " <script> alert('Invalid Image Type or size more than 2mb') </script>";
    }elseif ($_GET['err']=='stmtError') {
      echo " <script> alert('Photo not uploaded. Please Reloaded') </script>";
    }
  }


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
          <h3>Hossain Santo</h3>
          <p>Admin</p>
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
          <form class="upload" action="includes/img.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="tblName" value="<?php echo $acct; ?>">
            <input type="hidden" name="userCode" value="<?php echo $sscode; ?>">
            <input type="file" name="img" id="upload">
            <label for="upload">Upload</label>
            <input type="submit" name="imgSubmit" value="Submit">
          </form>

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
          <h2 class="tytle titPos">Detais:</h2>



          <label class="infoLab" for="profileConact">Contact Information</label>
          <ul id="profileConact" class="contactInfo">
            <!-- IDEA:
            <li>MObile NO:</li>
            <li>0123456789</li>
            <li>Email: </li>
            <li>memberMail@gmail.com</li>
            <li>Whatsapp:</li>
            <li>0123456789</li>
          -->
          </ul>

          <label class="infoLab" for="profileBasic">Basic Information</label>
          <ul id="profileBasic" class="basicInfo">
            <!-- IDEA:
            <li>Full Name:</li>
            <li>Member Name</li>
            <li>Display Name:</li>
            <li>Usercode(If not change)</li>
            <li>Gender:</li>
            <li>Gender</li>
            <li>Religion:</li>
            <li>Religion</li>
          -->
          </ul>
          <label class="infoLab" for="profileEdu">Education Information</label>
          <ul id="profileEdu" class="basicInfo">
            <!-- IDEA:
            <li>School/College/University:</li>
            <li>School/College/University</li>
            <li>Degree:</li>
            <li>Degree</li>
          -->
          </ul>

          <div class="updtInfo">
            <a href="profile_edit.php?user=<?php echo $sscode; ?>" class="updtLink">Update Information
              <i class="fi-xwlrxl-double-chevron-wide"></i>
            </a>
          </div>

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

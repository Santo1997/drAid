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
          <h3>Farhana Akter<?php /*echo $ssname;*/ ?></h3>
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

    <div class="container">

      <div class="containInfo">
        <ul>
          <li>
            <h1 id="tdsPendCount"></h1>
            <p>Today's Process</p>
          </li>
          <li>
            <h1 id="pendCount"></h1>
            <p>Total Pending</p>
          </li>
          <li>
            <h1 id="tdsProCount"></h1>
            <p>Processing</p>
          </li>
          <li>
            <h1 id="tdsSuccCount"></h1>
            <p>Success</p>
          </li>
        </ul>
      </div>

      

      <div class="tdsHistory">
        <div class="tdsActivity">
          <h2 class="tytle">Todays Activities:</h2>
          <h1>
            <span id="date"></span><br />
            <span id="time"></span>
          </h1>
          <ul class="ulHed">
            <li>Time</li>
            <li>Person</li>
          </ul>
          <div class="scroller">
            <ul class="ullst" id="shwTdsMetTimeUser">
              <!-- IDEA: -->
            </ul>
          </div>
        </div>
        <div class="tdsDetails">
          <h2 class="tytle">Todays Detais:</h2>
          <div class="detaContain" id="shwTdsMeeting">
            <!-- IDEA: -->
          </div>
        </div>
      </div>

      <div class="pendSucHis">
        <div class="pendHis">
          <h2 class="tytle marginFix">Total Pending History:</h2>
          <ul class="detaHed">
            <li>Sl No</li>
            <li>Clint</li>
            <li>Time</li>
            <li>Reason</li>
            <li>Results</li>
          </ul>
          <div class="detaContain">
            <ul class="detaLst" id="shwPendind">
              <!-- IDEA: -->
            </ul>
          </div>
        </div>
        <div class="sucHis">
          <h2 class="tytle marginFix">Total Success History:</h2>
          <ul class="detaHed">
            <li>Sl No</li>
            <li>Clint</li>
            <li>Time</li>
            <li>Reason</li>
            <li>Results</li>
          </ul>
          <div class="detaContain">
            <ul class="detaLst" id="shwSuccess">
              <!-- IDEA -->
            </ul>
          </div>
        </div>
      </div>

      <div class="pendSucHis offTime">
        <form class="" action="index.html" method="post">
          <h2 class="tytle">Your Off Time for Today:</h2>
          <div>
            <span>From:</span>
            <input type="time" name="end-time" id="from">
            <label for="from"></label>
          </div> <br />
          <div>
            <span>To:</span>
            <input type="time" name="end-time" id="to">
            <label for="to"></label>
          </div>
          <input type="submit" name="" value="Submit">
        </form>

        <form class="" action="index.html" method="post">
          <h2 class="tytle">Your Off Time for Vacation:</h2>
          <div>
            <span>From:</span>
            <input type="date" name="" value="" id="dfrom">
            <label for="dfrom"></label>
          </div><br />
          <div>
            <span>To:</span>
            <input type="date" name="" value="" id="dto">
            <label for="dto"></label>
          </div>
          <input type="submit" name="" value="Submit">
        </form>
      </div>



      <div class="footer">
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

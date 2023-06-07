<?php
require 'includes/func.php';
require 'includes/classes/dbh.php';
require 'includes/classes/apptCheckCls.php';

if (isset($_GET['checkSubmit'])) {
  $checkUser = clear($_GET['checkUser']);
  $apptCheckCls = new apptCheckCls;
  $metDataStore = $apptCheckCls->metDataStore($checkUser);

  $apptPsonCls = new apptPsonCls;
  $psonDataStore = $apptPsonCls->psonDataStore($checkUser);

  $apptTblCls = new apptTblCls;
  $tblDataStore = $apptTblCls->tblDataStore($checkUser);

  if(!is_dir('js/json')) {
    mkdir("js/json");
  }
  $fp = fopen('js/json/checkUserMetData.json', 'w');
  fwrite($fp, json_encode(array($metDataStore, $psonDataStore,$tblDataStore)) );
  fclose($fp);
  redirect("chckAppointment.php?req=ok");

}else {
  echo '
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
        <a href="#">
          <img src="media/appointment.jpg" class="logoImg">
          <h1>DrAid</h1>
        </a>
      </div>
      <div class="nav">
        <ul>
          <li><a href="includes/reset.php">Home</a></li>
          <li><a href="#">Your Appointment</a></li>

        </ul>
      </div>
    </div>

    <div class="section">
      <div class="bgm">
        <img src="media/apptCheck.jpg" alt="">
      </div>

      <div class="container">'

      ?>
      <?php
      if (isset($_GET['req'])) {
        if ($_GET['req'] !== 'ok') {
          echo '
           <div class="fgt_login" method="get">
           <h1 class="label">Check Your Appointment</h1>
           <form class="signin">
             <p>Please enter your mobile number or Email to check your appointment serial number and ensure the time.</p>

             <div class="field">
               <input type="text" name="checkUser" id="text" required>
               <label for="text" class="lab">Enter Your Mobile Number or Email</label>
             </div>
             <div class="fgtDecline">
               <input type="submit" name="checkSubmit" value="Submit" class="success">
             </div>
           </form>
           </div>
          ';
        }else {
          echo '
          <div class="content apptCheck">
            <div class="meet_fix" id="conDetails">



            </div>
          </div>
          ';
        }
      }
       ?> <?php

echo

    '  </div>

    </div>


    <script src="js/app.js" charset="utf-8"></script>
    <script src="js/fun.js" charset="utf-8"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
  </body>

  </html>';}

?>

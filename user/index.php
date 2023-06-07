<?php
  require 'includes/func.php';
  require 'includes/classes/dbh.php';
  require 'includes/classes/tblInfo.inc.php';

  $metData = new tblInfo();
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
      <a href="#">
        <img src="media/appointment.jpg" class="logoImg">
        <h1>DrAid</h1>
      </a>
    </div>
    <div class="nav">
      <ul>
        <li><a href="includes/admin.php" target="_blank">Admin</a></li>
      </ul>
    </div>
  </div>

  <div class="section">
    <div id="into" class="bgm">
      <img src="media/chck.jpg" alt="">
    </div>
    <div id="display" class="intro_contain">
      <h2>Welcome to</h2>
      <h1>DrAid</h1>
      <p>DrAid - A cross-platform app that helps to easily get appointments for treatment from specific hospitals. So that medical professionals can focus on work. On the other hand, it helps to save time from standing in long queues.</p>
      <form class="" action="includes/index.inc.php" method="post">
        <label for="tblName">Please Choose your hospital</label>
        <select class="" id="tblName" name="tblName">
          <!-- IDEA:
          <option value="Al-Barakah">Al-Barakah Kidney Hospital</option>
          <option value="Sirajul">Dr. Sirajul Islam Medical College Hospital</option>
          <option value="Abedin">Abedin General Hospital and Consultation Center</option>
          <option value="Al-Mohite">Al-Mohite General Hospital & Diagnostic Centre</option>
          <option value="Bangladesh">Bangladesh Institute of Research & Rehabilitation in Diabetes, Endocrine & Metabolic Disorders (BIRDEM)</option>
          -->
        </select>
        <br />
        <input type="submit" name="tblSubmit" value="Submit" class="success">
      </form>

    </div>
  </div>

  <script src="js/app.js" charset="utf-8"></script>
  <script src="js/fun.js" charset="utf-8"></script>
</body>

</html>

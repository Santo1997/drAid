<?php
  session_start();
  require 'includes/func.php';
  require 'includes/classes/dbh.php';
  require 'includes/getInfo.php';
  require 'includes/meeting.inc.php';
  require 'includes/shifting.inc.php';



  if (isset($_SESSION['last_active'])) {
    if ((time()-$_SESSION['last_active'])>100) {
      session_unset();
      session_destroy();
      redirect("index.php");
    }
  }

  $_SESSION['last_active'] = time();

  $acct = $_SESSION['acct'];
  $uid = $_SESSION['uid'];
  $ssname = $_SESSION['Username'];
  $sscode = $_SESSION['Usercode'];
  $proPic = $_SESSION['Image'];

  $metData = new shifting($acct);
  $metData = new shiftingData($acct,$sscode);
  $metData = new meeting($acct,$sscode);

  if (isset($_GET['user'])) {
    $userid = $_GET['user'];

    $get = new getInfo;
    $user = $get->getUser($acct,$userid);
    $tdsPending = $get->tdsPending($acct,$user);
    $pending = $get->pending($acct,$user);
    $success = $get->success($acct,$user);

  }

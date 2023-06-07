<?php
require 'func.php';
require 'mailer.php';
require 'classes/dbh.php';
require 'classes/homeCls.php';
require 'controller/homeContro.php';

if (isset($_POST['setSubmit'])) {

  $setTbl = clear($_POST['setTbl']);
  $setUser = clear($_POST['setuser']);
  $metUser = clear($_POST['username']);
  $metMail = clear($_POST['memail']);
  $metNum = clear($_POST['metnum']);
  $metTime = clear($_POST['metime']);
  $metType = clear($_POST['metype']);
  $metHed = clear($_POST['metReason']);
  $metDeta = clear($_POST['metCause']);

  $date = new DateTime($metTime, new DateTimezone('Asia/Dhaka'));
  $splitdate = $date->format('d-m-Y g:ia');
  $expireDate = $date->format('U');
  $expireDate = $expireDate + 600;
  $splitTimeStamp = explode(" ",$splitdate);
  $metDate = $splitTimeStamp[0];
  $metTime = $splitTimeStamp[1];

  $apptReqire = new homeContro($setUser, $setTbl, $metUser, $metMail,$metNum, $metDate, $metTime, $metType, $metHed, $metDeta,$expireDate);
  $apptReqire->homeReq();
  redirect("../chckAppointment.php?req");

}

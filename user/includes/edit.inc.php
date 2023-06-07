<?php
require 'func.php';
require 'classes/dbh.php';
require 'classes/editCls.php';
require 'controller/editContro.php';

if (isset($_POST['editSubmit'])) {

  $editID = clear($_POST['editID']);
  $tbl = clear($_POST['setTbl']);
  $setUser = clear($_POST['setuser']);
  $metUser = clear($_POST['username']);
  $metMail = clear($_POST['memail']);
  $metnum = clear($_POST['metnum']);
  $metTime = clear($_POST['metime']);
  $metType = clear($_POST['metype']);
  $metHed = clear($_POST['metReason']);
  $metDeta = clear($_POST['metCause']);

  $date = new DateTime($metTime, new DateTimezone('Asia/Dhaka'));
  $date = $date->format('d-m-Y g:ia');
  $splitTimeStamp = explode(" ",$date);
  $metDate = $splitTimeStamp[0];
  $metTime = $splitTimeStamp[1];

  $signupReqire = new editContro($editID,$tbl,$setUser,$metUser,$metMail,$metnum,$metDate,$metTime,$metType,$metHed,$metDeta);
  $signupReqire->editReq();
  redirect("../chckAppointment.php?req=OK");

}

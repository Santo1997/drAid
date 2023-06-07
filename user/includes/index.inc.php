<?php
require 'func.php';
require 'classes/dbh.php';
require 'classes/tblCls.php';

if (isset($_POST['tblSubmit'])) {

  $tbl = clear($_POST['tblName']);

  session_start();
  $_SESSION['acct'] = $tbl;

  $tblUserData = new tblCls($tbl);
  $tblUserData = new metCls($tbl);
  redirect("../home.php");
}

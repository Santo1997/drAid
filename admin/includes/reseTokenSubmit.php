<?php
require 'func.php';
require 'classes/dbh.php';
require 'classes/resetCls.php';
require 'controller/resetContro.php';

if (isset($_POST['tokenSubmit'])) {

  $reqSelector = clear($_POST['reqSelector']);
  $pwd = clear($_POST['reqPwd']);
  $rpwd = clear($_POST['reqRpwd']);

  $submit = new resetContro($pwd,$rpwd,$reqSelector);
  $submit->varifyReq();

  redirect("../index.php?#sign");

}

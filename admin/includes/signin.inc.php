<?php
require 'func.php';
require 'mailer.php';
require 'classes/dbh.php';
require 'classes/signinCls.php';
require 'controller/signinContro.php';

if (isset($_POST['signinSubmit'])) {

  $user = clear($_POST['sgnUsr']);
  $pwd = clear($_POST['sgnPwd']);


  $signupReqire = new signinContro($user, $pwd);
  $signupReqire->signin();
  redirect("../home.php");
}

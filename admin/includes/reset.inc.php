<?php
require 'func.php';
require 'mailer.php';
require 'classes/dbh.php';
require 'classes/rstReqCls.php';
require 'controller/rstReqContro.php';

if (isset($_POST['resetSubmit'])) {

  $user = clear($_POST['user']);
  $tbl = clear($_POST['tbl']);




  $expire = date("U")+180;
  $selector = bin2hex(random_bytes(8));


  $selector = clear($selector);



  $rstReqContro = new rstReqContro($user, $tbl, $selector, $expire);
  $mail = $rstReqContro->rstReq();

  $sub = " Your Reset Password Link ";
  $to = $mail;

  $toName = $user;
  $body = ' Your Password Reset Link:
  ';
  $body .= "Click the link: http://localhost/projects/draid/admin/resetpoint.php?selector=".$selector;

  $sendMail = new Mail($sub, $to, $toName, $body);
  redirect("../index.php");

}

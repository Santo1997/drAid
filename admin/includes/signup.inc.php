<?php
require 'func.php';
require 'mailer.php';
require 'classes/dbh.php';
require 'classes/signupCls.php';
require 'controller/signupContro.php';

if (isset($_POST['signupReq'])) {

  if (isset($_POST['businessID'])) {
    $businessID = clear($_POST['businessID']);
    $businessID = strtolower($businessID);
    $businessCode = substr($businessID, 0, 4) . hexdec(substr(bin2hex(random_bytes(3)), 0, 3));
  }elseif (isset($_POST['employeeID'])) {
    $businessID = clear($_POST['employeeID']);
    $businessCode = $businessID;
  } else {
    $businessID = clear('none');
    $businessCode = random_bytes(3);
  }

  $signupID = clear($_POST['signupID']);
  $fname = clear($_POST['fname']);
  $lname = clear($_POST['lname']);
  $num = clear($_POST['number']);
  $mail = clear($_POST['mail']);
  $gender = clear($_POST['gender']);
  $pwd = clear($_POST['pwd']);
  $rpwd = clear($_POST['re-pwd']);
  $user = $fname . ' ' . $lname;
  $expire = date("U")+180;


  $selector = bin2hex(random_bytes(8));
  $tkn = random_bytes(3);
  $selector = clear($selector);
  $tkn =clear($tkn);
  $token = password_hash($tkn, PASSWORD_DEFAULT);
  $userCode = strtolower(substr($fname, 0, 2)).strtolower(substr($lname, 0, 2)) . hexdec(substr($selector, 0, 3));

  $signupReqire = new signupContro($signupID, $businessID, $businessCode, $user, $userCode, $num, $mail, $gender, $pwd, $rpwd, $selector, $token, $expire);
  $signupReqire->signupReq();

  $sub = " Your OTP ";
  $to = $mail;
  $toName = $user;

  if ($businessID === 'none') {
    $body = 'Your Login Username is: ' . $userCode .
            '

            Your OTP is: ' . bin2hex($tkn);
  }else {
    $body = 'Your Business ID is: ' . $businessCode .
            '
            Your Login Username is: ' . $userCode .
            '
            Your OTP is: ' . bin2hex($tkn);
  }


  $sendMail = new Mail($sub, $to, $toName, $body);
  redirect("../checkpoint.php?selector=".$selector);

}

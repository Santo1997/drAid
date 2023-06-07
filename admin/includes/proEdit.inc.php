<?php
require 'func.php';

require 'classes/dbh.php';
require 'user.inc.php';
require 'classes/profileCls.php';
require 'controller/profileContro.php';

if (isset($_POST['proEditSubmit'])) {

  $usertbl = clear($_POST['usertbl']);
  $usercode = clear($_POST['usercode']);
  $num = clear($_POST['mobile']);
  $mail = clear($_POST['mail']);
  $wts = clear($_POST['wts']);
  $fname = clear($_POST['fname']);
  $lname = clear($_POST['lname']);
  $dsName = clear($_POST['dsName']);
  $gender = clear($_POST['gender']);
  $religious = clear($_POST['religious']);
  $eduIns = clear($_POST['eduIns']);
  $eduDeg = clear($_POST['eduDeg']);
  $user = $fname . ' ' . $lname;


  $profileUpdate = new profileContro($usertbl,$user,$dsName,$num,$mail,$gender,$religious,$eduIns,$eduDeg,$wts,$usercode);
  $profileUpdate->proUpdateReq();
  $metData = new user($usertbl);
  redirect("../profile.php?user=".$usercode);

}

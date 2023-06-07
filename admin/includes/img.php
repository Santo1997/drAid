<?php
require 'func.php';
require 'classes/dbh.php';
require 'classes/imgCls.php';
require 'controller/imgContro.php';

  if (isset($_POST['imgSubmit'])) {
    $usertbl = clear($_POST['tblName']);
    $usercode = clear($_POST['userCode']);
    $img = $_FILES['img'];

    $proPic = new imgContro($usertbl,$usercode,$img);
    $proPic->proPicSet();
    redirect("../profile.php?user=".$usercode);

  }

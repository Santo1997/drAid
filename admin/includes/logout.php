<?php
require 'func.php';
  session_start();
  session_unset();
  session_destroy();

  $dirname = '../js/json';
  $delete = array_map('unlink', glob("$dirname/*.*"));
  $delete = rmdir($dirname);;

  if ($delete == true) {
    redirect("../../user/index.php");
  }else {
    redirect("../../user/index.php");
  }

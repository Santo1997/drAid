<?php
require 'func.php';
  session_start();
  session_unset();
  session_destroy();

  $dirname = '../js/json';
  $delete = array_map('unlink', glob("$dirname/*.*"));
  $delete = rmdir($dirname);;

  if ($delete == true) {
    redirect("../index.php");
  }else {
    redirect("../index.php");
  }

  if (isset($_SESSION['last_active'])) {
    if ((time()-$_SESSION['last_active'])>10) {
      session_unset();
      session_destroy();
      redirect("index.php");
    }
  }

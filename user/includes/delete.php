<?php
require 'func.php';
require 'classes/dbh.php';
require 'classes/deleteCls.php';


if (isset($_GET['dltid'])) {

  $dltid = clear($_GET['dltid']);


  $delete = new deleteCls;
  $delete->dltID($dltid);
  redirect("../index.php?delete=OK");
}

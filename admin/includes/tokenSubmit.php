<?php
require 'func.php';
require 'classes/dbh.php';
require 'classes/submitCls.php';
require 'controller/submitContro.php';

if (isset($_POST['tokenSubmit'])) {

  $reqSelector = clear($_POST['reqSelector']);
  $reqToken = clear($_POST['reqToken']);

  $submit = new submitContro($reqToken,$reqSelector);
  $submit->varifyReq();

  redirect("../index.php?#sign");

}

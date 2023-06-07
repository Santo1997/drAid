<?php

class shifting extends DBH {

  function __construct($tbl) {
    $currentDate = date("U");

    $sql = "SELECT * FROM appoint WHERE tableData=? and metExpire<=? ; ";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($tbl,$currentDate));

    while($row = $stmt->fetchObject()) {
      $sql = "INSERT INTO aptsuccess (metPson, tableData, whoMet, metMail, metDate, metTime, metType, metHed, metDetail)
      VALUES (?,?,?,?,?,?,?,?,?) ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      if (!$stmt->execute(array($row->metPson, $row->tableData, $row->whoMet, $row->metMail, $row->metDate, $row->metTime, $row->metType, $row->metHed, $row->metDetail))) {
        //redirect("home.php?error=stmtFailed");
      }
      $sql = "DELETE FROM appoint WHERE uid =? ; ";
      $stmt= sqlDefine('DBH', 'prep', $sql);
      $stmt->execute(array($row->uid));

    }
    $stmt = null;

  }
}

class shiftingData extends DBH {

  function __construct($tbl,$user) {

    $metArr = array();
    $sql ="SELECT * FROM aptsuccess WHERE tableData = ? AND metPson = ?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($tbl,$user));
    while($row = $stmt->fetchObject()) {
      $metArr[] = $row;
    }

    if(!is_dir('js/json')) {
      mkdir("js/json");
    }

    $fp = fopen('js/json/shiftData.json', 'w');
    fwrite($fp, json_encode($metArr) );
    fclose($fp);

  }
}

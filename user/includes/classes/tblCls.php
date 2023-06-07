<?php

class tblCls extends DBH {

  function __construct($tbl) {

    $metArr = array();
    $sql ="SELECT uid,User,Usercode,Userdisplay,Number,Email,Gender	,Title,Religion,EduInstitute,EduDegree FROM $tbl";
    $stmt= sqlDefine('DBH', 'quer', $sql);
    while($row = $stmt->fetchObject()) {
      $metArr[] = $row;
    }
    $stmt = null;

    if(!is_dir('../js/json')) {
      mkdir("../js/json");
    }

    $fp = fopen('../js/json/tblUserData.json', 'w');
    fwrite($fp, json_encode($metArr) );
    fclose($fp);

  }
}

class metCls extends DBH {

  function __construct($tbl) {

    $metArr = array();
    $sql ="SELECT uid,metPson,metDate,metTime FROM appoint WHERE tableData = ?";
    $stmt= sqlDefine('DBH', 'prep', $sql);
    $stmt->execute(array($tbl));
    while($row = $stmt->fetchObject()) {
      $metArr[] = $row;
    }
    $stmt = null;

    if(!is_dir('../js/json')) {
      mkdir("../js/json");
    }

    $fp = fopen('../js/json/userMetData.json', 'w');
    fwrite($fp, json_encode($metArr) );
    fclose($fp);

  }
}
